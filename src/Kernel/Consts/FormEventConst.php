<?php

namespace Cblink\Service\EventCenter\Kernel\Consts;

class FormEventConst
{
    public const FORM_CREATE = 'form.create';
    public const FORM_UPDATE = 'form.update';

    public const FORM_FIELD_CREATE = 'form.field.create';
    public const FORM_FIELD_UPDATE = 'form.field.update';
    public const FORM_FIELD_DESTROY = 'form.field.destroy';

    public const FORM_DATA_CREATE = 'form.data.create';
    public const FORM_DATA_UPDATE = 'form.data.update';
    public const FORM_DATA_DESTROY = 'form.data.destroy';


    public const TYPES = [
        EventTypeConst::ANY,
        self::FORM_CREATE => '表单创建',
        self::FORM_UPDATE => '表单修改',
        self::FORM_FIELD_CREATE => '表单创建',
        self::FORM_FIELD_UPDATE => '字段更新',
        self::FORM_FIELD_DESTROY => '字段删除',
        self::FORM_DATA_CREATE => '数据创建',
        self::FORM_DATA_UPDATE => '数据变更',
        self::FORM_DATA_DESTROY => '删除数据',
    ];
}