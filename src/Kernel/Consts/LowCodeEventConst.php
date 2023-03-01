<?php

namespace Cblink\Service\EventCenter\Kernel\Consts;

class LowCodeEventConst
{
    public const LOW_CODE_RELEASE = 'low.code.release';
    public const TYPES = [
        EventTypeConst::ANY => '所有事件',
        self::LOW_CODE_RELEASE => '装修发布'
    ];
}