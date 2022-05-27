<?php

namespace Cblink\Service\EventCenter\Kernel;

use Cblink\HyperfExt\Dto;

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
     * @return array
     */
    public function getData() :array
    {
        if (empty($this->data) && is_string($this->getItem('data'))) {
            $this->data = json_decode($this->getItem('data'), true);
        }

        return $this->data;
    }
}