<?php

namespace Cblink\Service\EventCenter\Kernel\Consts;

class ProductEventConst
{
    public const PRODUCT_CREATE = 'product.create';
    public const PRODUCT_UPDATE = 'product.update';
    public const PRODUCT_SKU_BATCH_UPDATE = 'product.sku.batch-update';
    public const PRODUCT_STATUS_BATCH_UPDATE = 'product.status.batch-update';
    public const TYPES = [
        EventTypeConst::ANY => '所有事件',
        self::PRODUCT_CREATE => '商品创建',
        self::PRODUCT_UPDATE => '商品编辑',
        self::PRODUCT_SKU_BATCH_UPDATE => '批量更新SKU',
        self::PRODUCT_STATUS_BATCH_UPDATE => '批量更新商品状态',
    ];
}