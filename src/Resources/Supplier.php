<?php

namespace SkuVault\Resources;

/**
 * Suppliers are associated with products.
 *
 * @see https://dev.skuvault.com/reference/getsuppliers
 * @see https://dev.skuvault.com/reference/createsuppliers
 *
 * @property string $name The name of the supplier.
 * @property bool $isEnabled Whether the supplier is enabled.
*/
class Supplier extends ApiResource
{
    const OBJECT_GROUP = "products";
    const OBJECT_NAME = "Supplier";
}
