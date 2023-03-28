<?php

namespace SkuVault\Resources;

/**
 * @property string $id The ID of the warehouse
 * @property string $code The warehouse's code
 */
class Warehouse extends ApiResource
{
    const OBJECT_GROUP = "inventory";
    const OBJECT_NAME = "Warehouse";
}
