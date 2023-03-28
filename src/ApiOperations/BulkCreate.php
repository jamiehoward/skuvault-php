<?php

namespace SkuVault\ApiOperations;

/**
 * Trait for listable resources. Adds a `bulkCreate()` static method to the class.
 *
 */
trait BulkCreate
{
    /**
     * @param null|array $params
     * @param null|array|string $options
     *
     * @return static the created resource
     */
    public static function bulkCreate($params = null, $options = null)
    {
        //
    }
}