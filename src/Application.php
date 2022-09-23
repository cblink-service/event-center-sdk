<?php

namespace Cblink\Service\EventCenter;

use Cblink\Service\Foundation\AccessToken;
use Cblink\Service\Foundation\Container;
use Closure;
use Hyperf\Utils\Collection;

/**
 * @property-read Collection $config
 * @property-read \GuzzleHttp\Client $client
 * @property-read AccessToken $access_token
 *
 * @property-read Producer\Client $producer
 * @property-read App\Client $app
 */
class Application extends Container
{
    protected array $providers = [
        Kernel\AccessTokenServiceProvider::class,
        App\ServiceProvider::class,
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
        return $this->producer->consumer($closure, $data);
    }
}