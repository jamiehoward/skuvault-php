<?php

namespace SkuVault\Resources;

use SkuVault\ApiOperations;

/**
 * Available Quantity is the quantity that is actually available to sell across all your sales channels.
 *
 * @see https://dev.skuvault.com/reference/getavailablequantities
 *
 * @property string $sku The SKU of the product.
 * @property array $alternateSkus The product's alternate SKUs.
 * @property int $availableQuantity The product's available quantity.
 * @property string $lastModifiedDateTimeUtc The product's last modified date and time in UTC.
*/
class InventoryItem extends ApiResource
{
    const OBJECT_GROUP = "inventory";
    const OBJECT_NAME = "availableQuantity";

    use ApiOperations\All;
}
