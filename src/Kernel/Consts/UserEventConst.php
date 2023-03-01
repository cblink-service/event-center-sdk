<?php

namespace Cblink\Service\EventCenter\Kernel\Consts;

class UserEventConst
{
    // 用户事件
    public const USER_CREATED = 'user.created';
    public const USER_UPDATED = 'user.updated';
    public const USER_ACCOUNT_UPDATED = 'user.account.updated';
    public const USER_LOGIN = 'user.login';
    public const USER_MEMBER_LEVEL_UPGRADE= 'user.member.level.upgrade';

    public const USER = [
        EventTypeConst::ANY => '所有事件',
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
        EventTypeConst::ANY => '所有事件',
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
}