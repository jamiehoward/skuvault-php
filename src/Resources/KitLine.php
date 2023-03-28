<?php

namespace SkuVault\Resources;

/**
 * A line item on a kit that corresponds to a product.
 *
 * @see https://dev.skuvault.com/reference/getkits
 *
 * @property int $combine Substitute combine option. 1) Use up by priority. 2) Use single SKU if possible. 3) Never combine.
 * @property array $items The products that make up the kit.
 * @property string $lineName The name of the line.
 * @property int $quantity The quantity for the line.
*/
class KitLine extends ApiResource
{
    const OBJECT_GROUP = "products";
    const OBJECT_NAME = "KitLine";
}