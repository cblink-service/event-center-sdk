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
    public const ORDER_TRANSPORT_CREATE = 'order.transport.create';
    public const ORDER_TRANSPORT_CHANGE = 'order.transport.change';

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
        self::ORDER_TRANSPORT_CREATE => '物流单创建',
        self::ORDER_TRANSPORT_CHANGE => '物流单改变',
    ];

    // 用户事件
    public const USER_CREATED = 'user.created';
    public const USER_UPDATED = 'user.updated';
    public const USER_ACCOUNT_UPDATED = 'user.account.updated';
    public const USER_LOGIN = 'user.login';
    public const USER_MEMBER_LEVEL_UPGRADE= 'user.member.level.upgrade';

    public const USER = [
        self::ANY => '所有事件',
        self::USER_CREATED => '用户创建',
        self::USER_UPDATED => '用户修改',
        self::USER_ACCOUNT_UPDATED => '用户修改账户',
        self::USER_LOGIN => '用户登陆',
        self::USER_MEMBER_LEVEL_UPGRADE => '用户会员等级升级'
    ];

    // 组织架构
    public const USER_COMPANY_CREATED = 'company.created';
    public const USER_COMPANY_UPDATED = 'company.updated';
    public const USER_MEMBER_CREATED = 'member.created';
    public const USER_MEMBER_UPDATED = 'member.updated';
    public const USER_MEMBER_DESTROY = 'member.destroy';
    public const USER_MEMBER_DISABLE = 'member.disable';
    public const USER_DEPARTMENT_CREATED = 'department.created';
    public const USER_DEPARTMENT_UPDATED = 'department.updated';
    public const USER_DEPARTMENT_DESTROY = 'department.destroy';

    public const PARTY = [
        self::ANY => '所有事件',
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
        self::ANY => '所有事件',
        self::LOW_CODE_RELEASE => '装修发布'
    ];

    // 配送门店配置
    public const SHOP_DELIVERY_STATUS = 'shop.delivery.status';
    public const SHOP_DELIVERY_ORDER_STATUS_CREATE = 'shop.delivery.order.status.create';
    public const SHOP_DELIVERY_ORDER_STATUS_ORDER = 'shop.delivery.order.status.order';
    public const SHOP_DELIVERY_ORDER_STATUS_PICK = 'shop.delivery.order.status.pick';
    public const SHOP_DELIVERY_ORDER_STATUS_SUCCESS = 'shop.delivery.order.status.success';
    public const SHOP_DELIVERY_ORDER_STATUS_CANCEL = 'shop.delivery.order.status.cancel';
    public const SHOP_DELIVERY_ORDER_STATUS_EXCEPTION = 'shop.delivery.order.status.exception';
    public const SHOP_DELIVERY = [
        self::ANY => '所有事件',
        self::SHOP_DELIVERY_STATUS => '配送门店审核状态变更',
        self::SHOP_DELIVERY_ORDER_STATUS_CREATE => '门店配送订单创建',
        self::SHOP_DELIVERY_ORDER_STATUS_ORDER => '门店配送订单已接单',
        self::SHOP_DELIVERY_ORDER_STATUS_PICK => '门店配送订单已取货',
        self::SHOP_DELIVERY_ORDER_STATUS_SUCCESS => '门店配送订单已送达',
        self::SHOP_DELIVERY_ORDER_STATUS_CANCEL => '门店配送订单已取消',
        self::SHOP_DELIVERY_ORDER_STATUS_EXCEPTION => '门店配送订单异常',
    ];

    public const SALESMAN_CREATE = 'salesman.create';
    public const SALESMAN_WITHDRAWAL_APPLY = 'salesman.withdrawal.apply';
    public const SALESMAN_WITHDRAWAL_PASS = 'salesman.withdrawal.pass';
    public const SALESMAN_WITHDRAWAL_REFUSE = 'salesman.withdrawal.refuse';
    public const SALESMAN_WITHDRAWAL_COMPLETE = 'salesman.withdrawal.complete';
    public const SALESMAN_WITHDRAWAL_FAIL = 'salesman.withdrawal.fail';
    public const SALESMAN_BALANCE_UPDATE = 'salesman.balance.update';
    public const SALESMAN = [
        self::ANY => '所有事件',
        self::SALESMAN_CREATE=>'创建分销员',
        self::SALESMAN_BALANCE_UPDATE =>'分销员余额变更',
        self::SALESMAN_WITHDRAWAL_APPLY => '分销提现-申请',
        self::SALESMAN_WITHDRAWAL_PASS => '分销提现-通过审核',
        self::SALESMAN_WITHDRAWAL_REFUSE => '分销提现-拒绝',
        self::SALESMAN_WITHDRAWAL_COMPLETE => '分销提现-完成',
        self::SALESMAN_WITHDRAWAL_FAIL => '分销提现-失败',
    ];


    public const PRODUCT_CREATE = 'product.create';
    public const PRODUCT_UPDATE = 'product.update';
    public const PRODUCT_SKU_BATCH_UPDATE = 'product.sku.batch-update';
    public const PRODUCT_STATUS_BATCH_UPDATE = 'product.status.batch-update';
    public const PRODUCT = [
        self::ANY => '所有事件',
        self::PRODUCT_CREATE => '商品创建',
        self::PRODUCT_UPDATE => '商品编辑',
        self::PRODUCT_SKU_BATCH_UPDATE => '批量更新SKU',
        self::PRODUCT_STATUS_BATCH_UPDATE => '批量更新商品状态',
    ];
}
