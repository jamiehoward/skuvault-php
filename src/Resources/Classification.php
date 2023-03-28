<?php

namespace SkuVault\Resources;

/**
 * In SkuVault, classifications are used to group products together.
 *
 * @see https://dev.skuvault.com/reference/getclassifications
 *
 * @property string $name The name of the classification.
 * @property bool $isEnabled Whether the classification is enabled.
 * @property array $attributes The classification attributes.
*/
class Classification extends ApiResource
{
    const OBJECT_GROUP = "products";
    const OBJECT_NAME = "Classification";
}
