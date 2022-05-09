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
    public const ORDER_REFUND_AGREE = 'order.refund.agree';
    public const ORDER_REFUND_REFUSE = 'order.refund.refuse';
    public const ORDER_REFUND_CANCEL = 'order.refund.cancel';
    public const ORDER_REFUND_CONFIRM = 'order.refund.confirm';
    public const ORDER_REFUND_REFUND = 'order.refund.refund';
    public const ORDER_REFUND_REFUNDED = 'order.refund.refunded';
    public const ORDER_REFUND_TRANSPORT = 'order.refund.transport';

    public const ORDER = [
        self::ANY => '所有事件',
        self::ORDER_CREATED => '创建订单',
        self::ORDER_CANCEL => '取消订单',
        self::ORDER_PAID => '订单支付',
        self::ORDER_TRANSPORT => '订单发货',
        self::ORDER_CONFIRM => '确认收货',
        self::ORDER_REFUND => '申请退款',
        self::ORDER_REFUND_AGREE => '同意退款',
        self::ORDER_REFUND_REFUSE => '拒绝退款',
        self::ORDER_REFUND_CANCEL => '取消退单',
        self::ORDER_REFUND_CONFIRM => '确认收货',
        self::ORDER_REFUND_REFUND => '发起退款',
        self::ORDER_REFUND_REFUNDED => '退款完成',
        self::ORDER_REFUND_TRANSPORT => '货物退回',
    ];

    // 操作事件
    public const USER_CREATED = 'user.created';
    public const USER_UPDATED = 'user.updated';
    public const USER_COMPANY_CREATED = 'company.created';
    public const USER_COMPANY_JOIN = 'company.join';
    public const USER_COMPANY_LEAVE = 'company.leave';
    public const USER_DEPARTMENT_CREATED = 'department.created';
    public const USER_DEPARTMENT_UPDATED = 'department.updated';

    public const USER = [
        self::ANY => '所有事件',
        self::USER_CREATED => '用户创建',
        self::USER_UPDATED => '用户修改',
        self::USER_COMPANY_CREATED => '企业创建',
        self::USER_COMPANY_JOIN => '加入企业',
        self::USER_COMPANY_LEAVE => '离开企业',
        self::USER_DEPARTMENT_CREATED => '部门创建',
        self::USER_DEPARTMENT_UPDATED => '部门修改',
    ];
}
