<?php

namespace Cblink\Service\EventCenter;

use Cblink\Service\Foundation\Container;
use Cblink\Service\EventCenter\Kernel\MessageDto;
use Closure;
use InvalidArgumentException;
use Hyperf\Utils\Collection;

/**
 * @property-read Collection $config
 * @property-read \GuzzleHttp\Client $client
 *
 * @property-read Producer\Client $producer
 */
class Application extends Container
{
    protected array $providers = [
        Producer\ServiceProvider::class,
    ];

    /**
     * 投递消息
     *
     * @param $topic
     * @param $type
     * @param $appid
     * @param $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Throwable
     */
    public function producer($topic, $type, $appid, $data)
    {
        return $this->producer->push($topic, $type, $appid, $data);
    }

    /**
     * 消费消息
     *
     * @param Closure $closure
     * @param array $data
     * @return false|mixed
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

        return hash_hmac('sha1', serialize($payload), md5($this->config['public_key']));
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