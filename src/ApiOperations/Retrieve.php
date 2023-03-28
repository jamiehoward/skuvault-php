<?php

namespace SkuVault\ApiOperations;

/**
 * Trait for deletable resources. Adds a `retrieve()` static method to the class.
 *
 */
trait Retrieve
{
    /**
     * @param array|string $id the ID of the API resource to retrieve,
     *     or an options array containing an `id` key
     * @param null|array|string $options
     *
     *
     * @return static
     */
    public static function retrieve($id, $options = null)
    {
        //
    }
}
