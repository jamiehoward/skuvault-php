<?php

namespace SkuVault\Resources;

/**
 * Retrieves the Item Cost for a Product for a Specific Sale.
 *
 * @see https://dev.skuvault.com/reference/getsaleitemcost
 *
 * @property string $saleId The sale ID.
 * @property array $items The sale cost line items.
 * 
*/
class SaleItemCost extends ApiResource
{
    const OBJECT_GROUP = "sales";
    const OBJECT_NAME = "Sale";
}
