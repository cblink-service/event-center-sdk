<?php

namespace Cblink\Service\EventCenter\Producer;

use Cblink\HyperfExt\Tools\Aes;
use Cblink\Service\Foundation\BaseApi;

class Client extends BaseApi
{

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
    public function push($topic, $type, $appid, $data)
    {
        return $this->httpPost('/producer', [
            'producer' => Aes::encode(compact('topic', 'type', 'appid', 'data'), $this->app->config['private_key'])
        ]);
    }

}