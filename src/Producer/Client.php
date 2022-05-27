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
     * @param string $topic
     * @param string $type
     * @param string $appid
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function push(string $topic, string $type, string $appid, array $data = [])
    {
        $data = json_encode($data, 512);

        $payload = compact('topic', 'type', 'appid', 'data');

        $payload['sign'] = $this->app->buildSign($payload);

        return $this->httpPost('/producer', $payload);
    }

}