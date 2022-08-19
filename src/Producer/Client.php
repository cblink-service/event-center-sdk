<?php

namespace Cblink\Service\EventCenter\Producer;

use Cblink\Service\Foundation\BaseRequestApi;
use Closure;
use InvalidArgumentException;
use Cblink\Service\EventCenter\Application;
use Cblink\Service\EventCenter\Kernel\MessageDto;

/**
 * @property Application $app
 */
class Client extends BaseRequestApi
{
    /**
     * 投递消息
     *
     * @param string $topic
     * @param string $type
     * @param string $appid
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function push(string $topic, string $type, string $appid, array $data = [])
    {
        $data = base64_encode(json_encode($data, 512));

        $payload = compact('topic', 'type', 'appid', 'data');

        $payload['sign'] = $this->buildSign($payload);

        return $this->httpPost('/producer', $payload);
    }

    /**
     * 消费消息
     *
     * @param Closure $closure
     * @param array $data
     * @return mixed
     * @throws \Throwable
     */
    public function consumer(Closure $closure, array $data)
    {
        throw_unless($this->verifySign($data), InvalidArgumentException::class, 'Decryption failed.');

        return call_user_func_array($closure, [new MessageDto($data)]);
    }

    /**
     * @param array $payload
     * @return string
     */
    public function buildSign(array $payload): string
    {
        ksort($payload);

        return hash_hmac('sha1', serialize($payload), md5($this->app->config['public_key']));
    }

    /**
     * @param array $payload
     * @return bool
     */
    public function verifySign(array $payload): bool
    {
        $sign = $payload['sign'] ?? '';
        unset($payload['sign']);

        return $this->buildSign($payload) == $sign;
    }
}