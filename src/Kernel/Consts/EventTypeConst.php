<?php

declare(strict_types=1);

namespace Cblink\Service\EventCenter\Kernel\Consts;

class EventTypeConst
{
    public const ANY = 'any';
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

    public const ORDER = [
        self::ANY => '所有事件',
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
    ];

    // 操作事件
    public const USER_CREATED = 'user.created';
    public const USER_UPDATED = 'user.updated';
    public const USER_COMPANY_CREATED = 'company.created';
    public const USER_COMPANY_UPDATED = 'company.updated';
    public const USER_MEMBER_CREATED = 'member.created';
    public const USER_MEMBER_UPDATED = 'member.updated';
    public const USER_MEMBER_DESTROY = 'member.destroy';
    public const USER_MEMBER_DISABLE = 'member.disable';
    public const USER_DEPARTMENT_CREATED = 'department.created';
    public const USER_DEPARTMENT_UPDATED = 'department.updated';
    public const USER_DEPARTMENT_DESTROY = 'department.destroy';

    public const USER = [
        self::ANY => '所有事件',
        self::USER_CREATED => '用户创建',
        self::USER_UPDATED => '用户修改',
        self::USER_COMPANY_CREATED => '企业创建',
        self::USER_COMPANY_UPDATED => '企业编辑',
        self::USER_MEMBER_CREATED => '创建成员',
        self::USER_MEMBER_UPDATED => '修改成员',
        self::USER_MEMBER_DESTROY => '删除成员',
        self::USER_MEMBER_DISABLE => '禁用/启用成员',
        self::USER_DEPARTMENT_CREATED => '部门创建',
        self::USER_DEPARTMENT_UPDATED => '部门修改',
        self::USER_DEPARTMENT_DESTROY => '部门删除',
    ];

    public const LOW_CODE_RELEASE = 'low.code.release';
    public const LOW_CODE = [
        self::LOW_CODE_RELEASE => '装修发布'
    ];

    // 配送门店配置
    public const SHOP_DELIVERY_STATUS = 'shop.delivery.status';
    public const SHOP_DELIVERY = [
        self::SHOP_DELIVERY_STATUS => '配送门店审核状态变更'
    ];
}
