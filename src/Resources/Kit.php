<?php

namespace SkuVault\Resources;

/**
 * A specific kit's quantity across all locations.
 *
 * @see https://dev.skuvault.com/reference/getkits
 *
 * @property int $availableQuantity Available Quantity is the quantity that is actually available to sell across all your sales channels.
 * @property array $statuses The statuses of the kit.
 * @property string $code The kit's code.
 * @property float $cost The kit's cost.
 * @property string $description The kit's description.
 * @property array $kitLines The products that make up the kit.
 * @property string $lastModifiedDateTimeUtc The kit's last modified date and time in UTC.
 * @property string $sku The kit's SKU.
*/
class Kit extends ApiResource
{
    const OBJECT_GROUP = "products";
    const OBJECT_NAME = "Kit";
}
