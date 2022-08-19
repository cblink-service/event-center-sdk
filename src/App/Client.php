<?php

namespace Cblink\Service\EventCenter\App;

use Cblink\Service\EventCenter\Application;
use Cblink\Service\Foundation\BaseApi;

/**
 * @property Application $app
 */
class Client extends BaseApi
{
    /**
     * 创建应用
     *
     * @param array $payload
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $payload = [])
    {
        return $this->httpPost('/api/app', $payload);
    }
}