<?php

namespace Cblink\Service\EventCenter\Kernel;

use Cblink\HyperfExt\Dto;
use Hyperf\Utils\Arr;

/**
 * @property string $topic      消息主题
 * @property string $type       消息类型
 * @property string $appid      产生消息的应用
 * @property array|string $data        消息内容
 */
class MessageDto extends Dto
{
    protected $data = [];

    protected $fillable = [
        'topic', 'type', 'appid', 'data'
    ];

    /**
     * 获取数据
     *
     * @param null $key
     * @param null $default
     * @return array|string
     */
    public function getData($key = null, $default = null)
    {
        if (empty($this->data) && is_string($this->getItem('data'))) {
            $this->data = json_decode(base64_decode($this->getItem('data')), true);
        }

        if ($key) {
            return Arr::get($this->data, $key, $default);
        }

        return $this->data;
    }
}