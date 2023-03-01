<?php

namespace Cblink\Service\EventCenter\Kernel\Consts;

class SalesmanEventConst
{
    // 分销功能
    public const SALESMAN_CREATE = 'salesman.create';
    public const SALESMAN_WITHDRAWAL_APPLY = 'salesman.withdrawal.apply';
    public const SALESMAN_WITHDRAWAL_PASS = 'salesman.withdrawal.pass';
    public const SALESMAN_WITHDRAWAL_REFUSE = 'salesman.withdrawal.refuse';
    public const SALESMAN_WITHDRAWAL_COMPLETE = 'salesman.withdrawal.complete';
    public const SALESMAN_WITHDRAWAL_FAIL = 'salesman.withdrawal.fail';
    public const SALESMAN_BALANCE_UPDATE = 'salesman.balance.update';
    public const TYPES = [
        EventTypeConst::ANY => '所有事件',
        self::SALESMAN_CREATE=>'分销员创建',
        self::SALESMAN_BALANCE_UPDATE =>'余额变更',
        self::SALESMAN_WITHDRAWAL_APPLY => '提现申请',
        self::SALESMAN_WITHDRAWAL_PASS => '通过提现审核',
        self::SALESMAN_WITHDRAWAL_REFUSE => '拒绝提现审核',
        self::SALESMAN_WITHDRAWAL_COMPLETE => '提现成功',
        self::SALESMAN_WITHDRAWAL_FAIL => '提现失败',
    ];
}