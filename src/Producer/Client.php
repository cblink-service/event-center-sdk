<?php

namespace Cblink\Service\EventCenter\Producer;

use Cblink\Service\EventCenter\Application;
use Cblink\Service\Foundation\BaseApi;

/**
 * @property Application $app
 */
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
        if (is_array($data)) {
            $data = serialize($data);
        }

        $payload = compact('topic', 'type', 'appid', 'data');

        $payload['sign'] = $this->app->buildSign($payload);

        return $this->httpPost('/producer', $payload);
    }

}