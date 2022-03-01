<?php

namespace Clink\Service\EventCenter\Kernel;

use Cblink\HyperfExt\Dto;

/**
 * @property string $topic      消息主题
 * @property string $type       消息类型
 * @property string $appid      产生消息的应用
 * @property array $data        消息内容
 */
class MessageDto extends Dto
{
    protected $fillable = [
        'topic', 'type', 'appid', 'data'
    ];
}