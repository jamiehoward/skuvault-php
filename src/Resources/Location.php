<?php

namespace SkuVault\Resources;

/**
 * A location is a specific place where a product can be found in a warehouse.
 *
 * @see https://dev.skuvault.com/reference/getlocations
 *
 * @property string $warehouseCode The warehouse code.
 * @property string $warehouseName The warehouse name.
 * @property null|string $locationCode The location code.
 * @property null|string $containerCode The container code.
 * @property null|string $parentLocation The parent location.
 * @property int $totalQuantity The total quantity.
*/
class Location extends ApiResource
{
    const OBJECT_GROUP = "inventory";

    // Not sure why this is "Item" instead of "Location" but it is.
    const OBJECT_NAME = "Item"; 
}