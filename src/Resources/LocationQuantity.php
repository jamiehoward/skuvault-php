<?php

namespace SkuVault\Resources;

/**
 * Quantity per specific location instead of general stock levels.
 * The responses are keyed by the product sku.
 *
 * @see https://dev.skuvault.com/reference/getinventorybylocation
 *
 * @property string $locationCode The location code.
 * @property int $quantity The quantity in that location.
 * @property null|bool $reserve Whether the quantity is reserved.
 * @property null|string $warehouseCode The warehouse code.
*/
class LocationQuantity extends ApiResource
{
    const OBJECT_GROUP = "inventory";
    const OBJECT_NAME = "Item";
}
