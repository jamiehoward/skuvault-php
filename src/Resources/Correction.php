<?php

namespace SkuVault\Resources;

/**
 * A correction is a change to the receiving history of a purchase order.
 *
 * @see https://dev.skuvault.com/reference/getreceiveshistory
 *
 * @property string $code The product code.
 * @property string $correctedDate The date the correction happened.
 * @property int $newQuantity The new quantity for that line item.
 * @property int $newQuantity3pl The new 3PL quantity for that line item.
 * @property int $oldQuantity The old quantity for that line item.
 * @property int $oldQuantity3pl The old 3PL quantity for that line item.
 * @property string $poNumber The purchase order number.
 * @property string $partNumber The part number for the product.
 * @property array $quantityByReceiptDate The quantity by receipt date.
 * @property string $receivedDate The date the product was received.
 * @property string $sku The product SKU.
 * @property string $username The username of the user who made the correction.
*/
class Correction extends ApiResource
{
    const OBJECT_GROUP = "purchaseorders";
    const OBJECT_NAME = "Correction";
}
