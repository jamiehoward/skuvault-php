<?php

namespace SkuVault\Resources;

/**
 * A specific kit's quantity across all locations.
 *
 * @see https://dev.skuvault.com/reference/getkitquantities
 *
 * @property int $availableQuantity Available Quantity is the quantity that is actually available to sell across all your sales channels.
 * @property string $lastModifiedDateTimeUtc The product's last modified date and time in UTC.
 * @property string $sku The kit's SKU.
*/
class KitQuantity extends ApiResource
{
    const OBJECT_GROUP = "inventory";
    const OBJECT_NAME = "Kit";
}
