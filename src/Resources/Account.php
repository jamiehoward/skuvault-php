<?php

namespace SkuVault\Resources;

/**
 * Accounts are used to connect to other systems.
 *
 * @see https://dev.skuvault.com/reference/getintegrations
 *
 * @property string $id The account's ID.
 * @property string $longId The account's long ID.
 * @property string $name The account's name.
 * @property string $type The account's type.
 * 
*/
class Account extends ApiResource
{
    const OBJECT_GROUP = "integrations";
    const OBJECT_NAME = "Account";
}
