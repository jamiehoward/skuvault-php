<?php

namespace SkuVault\ApiOperations;

/**
 * Trait for listable resources. Adds a `create()` static method to the class.
 *
 */
trait Create
{
    /**
     * @param null|array $params
     * @param null|array|string $options
     *
     * @return static the created resource
     */
    public static function create($params = null, $options = null)
    {
        //
    }
}