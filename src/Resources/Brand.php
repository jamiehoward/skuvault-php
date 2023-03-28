<?php

namespace SkuVault\Resources;

/**
 * Brands are used to group products together.
 *
 * @see https://dev.skuvault.com/reference/createbrands
 * @see https://dev.skuvault.com/reference/getbrands
 *
 * @property string $name The name of the brand.
 * @property bool $isEnabled Whether the brand is enabled.
*/
class Brand extends ApiResource
{
    const OBJECT_GROUP = "products";
    const OBJECT_NAME = "Brand";
}
