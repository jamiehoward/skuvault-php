<?php

namespace SkuVault\Resources;

/**
 * Serialized inventory tracking is tracking items in your inventory by assigning each a unique serial number.
 *
 * @see https://dev.skuvault.com/reference/getserialnumbers
 * @see https://www.skuvault.com/blog/track-inventory-faster-with-serialization/
 *
 * @property string $serialNumber The product serial number.
 * @property string $warehouseCode The product warehouse code.
 * @property string $locationCode The product location code.
 * @property string $containerCode The product container code.
*/
class SerialNumber extends ApiResource
{
    const OBJECT_GROUP = "inventory";
    const OBJECT_NAME = "Item";
}
