<?php

namespace Cblink\Service\EventCenter;

use Cblink\Service\Foundation\Container;
use Clink\Service\EventCenter\Kernel\MessageDto;
use Closure;
use InvalidArgumentException;
use Cblink\HyperfExt\Tools\Aes;
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
     * @param string $data
     * @return false|mixed
     * @throws \Throwable
     */
    public function consumer(Closure $closure, string $data)
    {
        $message = Aes::decode($data, $this->config['public_key']);

        throw_if(empty($message), InvalidArgumentException::class, 'Decryption failed.');

        return call_user_func($closure, [new MessageDto($message)]);
    }


}