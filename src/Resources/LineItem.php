<?php

namespace SkuVault\Resources;

use SkuVault\ApiOperations;

/**
 * Line items are the individual products that make up a purchase order.
 *
 * @see https://dev.skuvault.com/reference/getpos
 * @see https://dev.skuvault.com/reference/receivepoitems
 *
 * @property string $productId The product's ID.
 * @property string $sku The product's SKU.
 * @property int $quantity The product's quantity.
 * @property int $quantityTo3PL The product's quantity to 3PL.
 * @property int $receivedQuantity The product's received quantity.
 * @property int $receivedQuantityTo3PL The product's received quantity to 3PL.
 * @property double $cost The product's cost.
 * @property double $retailCost The product's retail cost.
 * @property string $privateNotes The product's private notes.
 * @property string $publicNotes The product's public notes.
 * @property string $variant The product's variant.
 * @property string $identifier The product's identifier.
 * 
*/
class LineItem extends ApiResource
{
    const OBJECT_GROUP = "purchaseorders";
    const OBJECT_NAME = "LineItem";
}
