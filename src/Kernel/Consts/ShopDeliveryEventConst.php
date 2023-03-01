<?php

namespace Cblink\Service\EventCenter\Kernel\Consts;

class ShopDeliveryEventConst
{
    // 配送门店配置
    public const SHOP_DELIVERY_STATUS = 'shop.delivery.status';
    public const SHOP_DELIVERY_ORDER_STATUS_CREATE = 'shop.delivery.order.status.create';
    public const SHOP_DELIVERY_ORDER_STATUS_ORDER = 'shop.delivery.order.status.order';
    public const SHOP_DELIVERY_ORDER_STATUS_PICK = 'shop.delivery.order.status.pick';
    public const SHOP_DELIVERY_ORDER_STATUS_SUCCESS = 'shop.delivery.order.status.success';
    public const SHOP_DELIVERY_ORDER_STATUS_CANCEL = 'shop.delivery.order.status.cancel';
    public const SHOP_DELIVERY_ORDER_STATUS_EXCEPTION = 'shop.delivery.order.status.exception';
    public const TYPES = [
        EventTypeConst::ANY => '所有事件',
        self::SHOP_DELIVERY_STATUS => '配送门店审核状态变更',
        self::SHOP_DELIVERY_ORDER_STATUS_CREATE => '门店配送订单创建',
        self::SHOP_DELIVERY_ORDER_STATUS_ORDER => '门店配送订单已接单',
        self::SHOP_DELIVERY_ORDER_STATUS_PICK => '门店配送订单已取货',
        self::SHOP_DELIVERY_ORDER_STATUS_SUCCESS => '门店配送订单已送达',
        self::SHOP_DELIVERY_ORDER_STATUS_CANCEL => '门店配送订单已取消',
        self::SHOP_DELIVERY_ORDER_STATUS_EXCEPTION => '门店配送订单异常',
    ];
}