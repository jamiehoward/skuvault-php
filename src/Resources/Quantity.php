<?php

namespace SkuVault\Resources;

use SkuVault\ApiOperations;

/**
 * In SkuVault, classifications are used to group products together.
 *
 * @see https://dev.skuvault.com/reference/getitemquantities
 *
 * @property int $inStockQuantity The product's quantity that is on the shelf.
 * @property int $inboundQuantity The product's quantity that is inbound.
 * @property int $reserveQuantity The product's quantity that is reserved for orders.
 * @property string $sku The associated product's SKU.
 * @property int $totalQuantity The product's total quantity.
 * @property int $transferQuantity The product's quantity that is being transferred.
*/
class Quantity extends ApiResource
{
    const OBJECT_GROUP = "products";
    const OBJECT_NAME = "Classification";

    use ApiOperations\All;
}
