<?php

declare(strict_types=1);

namespace Cblink\Service\EventCenter\Kernel\Consts;

class TopicConst
{
    public const FORM = 'form';
    public const ORDER = 'order';
    public const USER = 'user';
    public const PRODUCT = 'product';
    public const PARTY = 'party';
    public const LOW_CODE = 'low_code';
    public const SHOP_DELIVERY = 'shop_delivery';
    public const SALESMAN = 'salesman';

    public const TYPES = [
        self::ORDER => [
            'name' => '订单',
            'topic' => self::ORDER,
            'types' => OrderEventConst::TYPES,
        ],
        self::USER => [
            'name' => '用户',
            'topic' => self::USER,
            'types' => UserEventConst::USER,
        ],
        self::PARTY => [
            'name' => '组织架构',
            'topic' => self::PARTY,
            'types' => UserEventConst::PARTY,
        ],
        self::LOW_CODE => [
            'name' => '低代码',
            'topic' => self::LOW_CODE,
            'types' => LowCodeEventConst::TYPES,
        ],
        self::SHOP_DELIVERY => [
            'name' => '门店配送',
            'topic' => self::SHOP_DELIVERY,
            'types' => ShopDeliveryEventConst::TYPES,
        ],
        self::SALESMAN => [
            'name' => '分销',
            'topic' => self::SALESMAN,
            'types' => SalesmanEventConst::TYPES,
        ],
        self::PRODUCT => [
            'name' => '商品',
            'topic' => self::PRODUCT,
            'types' => ProductEventConst::TYPES,
        ],
        self::FORM => [
            'name' => '表单',
            'topic' => self::FORM,
            'types' => FormEventConst::TYPES,
        ],
    ];
}
