<?php

namespace Cblink\Service\EventCenter\Kernel\Consts;

class OrderEventConst
{
    public const ORDER_CREATED = 'order.created';
    public const ORDER_CANCEL = 'order.cancel';
    public const ORDER_PAID = 'order.paid';
    public const ORDER_TRANSPORT = 'order.transport';
    public const ORDER_CONFIRM = 'order.confirm';
    public const ORDER_REFUND = 'order.refund';
    public const ORDER_RECEIVE = 'order.receive';
    public const ORDER_DINING = 'order.dining';
    public const ORDER_TAKE_MEAL = 'order.take-meal';
    public const ORDER_REFUNDED = 'order.refunded';
    public const ORDER_REFUND_AGREE = 'order.refund.agree';
    public const ORDER_REFUND_REFUSE = 'order.refund.refuse';
    public const ORDER_REFUND_CANCEL = 'order.refund.cancel';
    public const ORDER_REFUND_CONFIRM = 'order.refund.confirm';
    public const ORDER_REFUND_REFUND = 'order.refund.refund';
    public const ORDER_REFUND_REFUNDED = 'order.refund.refunded';
    public const ORDER_REFUND_TRANSPORT = 'order.refund.transport';
    public const ORDER_REFUND_REFUND_RETRY = 'order.refund.refund.retry';
    public const ORDER_TRANSPORT_CREATE = 'order.transport.create';
    public const ORDER_TRANSPORT_CHANGE = 'order.transport.change';

    public const TYPES = [
        EventTypeConst::ANY => '所有事件',
        self::ORDER_CREATED => '创建订单',
        self::ORDER_CANCEL => '取消订单',
        self::ORDER_PAID => '订单支付',
        self::ORDER_TRANSPORT => '订单发货',
        self::ORDER_CONFIRM => '确认收货',
        self::ORDER_REFUND => '申请退款',
        self::ORDER_RECEIVE => '商户接单',
        self::ORDER_DINING => '商户出餐',
        self::ORDER_TAKE_MEAL => '商户取餐',
        self::ORDER_REFUNDED => '订单完成退款',
        self::ORDER_REFUND_AGREE => '同意退款',
        self::ORDER_REFUND_REFUSE => '拒绝退款',
        self::ORDER_REFUND_CANCEL => '取消退单',
        self::ORDER_REFUND_CONFIRM => '确认收货',
        self::ORDER_REFUND_REFUND => '发起退款',
        self::ORDER_REFUND_REFUNDED => '退款完成',
        self::ORDER_REFUND_TRANSPORT => '货物退回',
        self::ORDER_REFUND_REFUND_RETRY => '重试退款',
        self::ORDER_TRANSPORT_CREATE => '物流单创建',
        self::ORDER_TRANSPORT_CHANGE => '物流单改变',
    ];
}