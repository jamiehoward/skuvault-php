<?php

namespace SkuVault\Resources;

/**
 * Quantity per specific product instead of per location.
 *
 * @see https://dev.skuvault.com/reference/getitemquantities
 *
 * @property int $availableQuantity Available Quantity is the quantity that is actually available to sell across all your sales channels.
 * @property string $code The product's code.
 * @property int $heldQuantity The product's quantity that is held.
 * @property string $lastModifiedDateTimeUtc The product's last modified date and time in UTC.
 * @property int $pendingQuantity The product's quantity that is pending.
 * @property int $pickedQuantity The product's quantity that is picked.
 * @property string $sku The product's SKU.
 * @property int $totalOnHand The product's total on hand.
*/
class ItemQuantity extends ApiResource
{
    const OBJECT_GROUP = "inventory";
    const OBJECT_NAME = "Item";
}
