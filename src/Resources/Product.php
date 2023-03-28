<?php

namespace SkuVault\Resources;

/**
 * Products are the core of SkuVault. They are the items that you sell and track.
 *
 * @see https://dev.skuvault.com/reference/createproduct
 * @see https://dev.skuvault.com/reference/createproducts
 * @see https://dev.skuvault.com/reference/getproduct
 * @see https://dev.skuvault.com/reference/getproducts
 * @see https://dev.skuvault.com/reference/updateproduct
 * @see https://dev.skuvault.com/reference/updateproducts
 *
 * @property string $id The product ID.
 * @property string $code The product code.
 * @property string $sku The product SKU.
 * @property string $primarySku The product's primary SKU.
 * @property string $partNumber The product's part number.
 * @property string $description The product's description.
 * @property string $shortDescription The product's short description.
 * @property string $longDescription The product's long description.
 * @property double $cost The product's cost.
 * @property double $retailPrice The product's retail price.
 * @property double $salePrice The product's sale price.
 * @property string $weightValue The product's weight value.
 * @property string $weightUnit The product's weight unit.
 * @property int $reorderPoint The product's reorder point.
 * @property string $brand The product's brand.
 * @property string $supplier The product's supplier.
 * @property array $supplierInfo The product's supplier info.
 * @property string $classification The product's classification.
 * @property int $quantityOnHand The product's quantity on hand.
 * @property int $quantityOnHold The product's quantity on hold.
 * @property int $quantityPicked The product's quantity picked.
 * @property int $quantityPending The product's quantity pending.
 * @property int $quantityAvailable The product's quantity available.
 * @property int $quantityIncoming The product's quantity incoming.
 * @property int $quantityInbound The product's quantity inbound.
 * @property int $quantityTransfer The product's quantity transfer.
 * @property int $quantityInStock The product's quantity in stock.
 * @property int $quantityTotalFBA The product's quantity total FBA.
 * @property string $createdDateUtc The product's created date UTC.
 * @property string $modifiedDateUtc The product's modified date UTC.
 * @property array $pictures The product's pictures.
 * @property array $attributes The product's attributes.
 * @property string $variationParentSku The product's variation parent SKU.
 * @property bool $isAlternateSKU Whether the product is an alternate SKU.
 * @property bool $isAlternateCode Whether the product is an alternate code.
 * @property int $moq The product's MOQ.
 * @property string $moqInfo The product's MOQ info.
 * @property int $incrementalQuantity The product's incremental quantity.
 * @property bool $disableQuantitySync Whether quantity sync is disabled.
 * @property array $statuses The product's statuses.
 * @property bool $isSerialized Whether the product is serialized.
 * @property string $client 
 * 
*/
class Product extends ApiResource
{
    const OBJECT_GROUP = "products";
    const OBJECT_NAME = "Product";
}
