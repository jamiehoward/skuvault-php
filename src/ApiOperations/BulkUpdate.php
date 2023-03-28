<?php

namespace SkuVault\ApiOperations;

/**
 * Trait for updatable resources. Adds an `bulkUpdate()` static method and a
 * `save()` method to the class.
 *
 */
trait BulkUpdate
{
    /**
     * @param string $id the ID of the resource to update
     * @param null|array $params
     * @param null|array|string $options
     *
     *
     * @return static the updated resource
     */
    public static function bulkUpdate($id, $params = null, $options = null)
    {
        //
    }

    /**
     * @param null|array|string $options
     *
     *
     * @return static the saved resource
     */
    public function save($options = null)
    {
        //
    }
}
