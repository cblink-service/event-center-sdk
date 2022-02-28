<?php

declare(strict_types=1);

namespace Cblink\Service\EventCenter\Kernel\Consts;

class TopicConst
{
    public const ORDER = 'order';
    public const USER = 'user';

    public const TOPIC = [
        self::ORDER => '订单',
        self::USER => '用户',
    ];

    public const TYPE = [
        self::ORDER => [
            'name' => '订单',
            'topic' => self::ORDER,
            'types' => EventTypeConst::ORDER,
        ],
        self::USER => [
            'name' => '用户',
            'topic' => self::USER,
            'types' => EventTypeConst::USER,
        ],
    ];
}
