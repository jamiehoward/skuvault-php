<?php

namespace SkuVault\Resources;

/**
 * A receive history line item records the quantity of a product that
 * was received for a specific purchase order.
 *
 * @see https://dev.skuvault.com/reference/getreceiveshistory
 *
 * @property string $code The product code.
 * @property string $location The location the product was received into.
 * @property string $poNumber The purchase order number.
 * @property string $partNumber The part number for the product.
 * @property int $quantity The quantity of the product that was received.
 * @property int $quantity3pl The 3PL quantity of the product that was received.
 * @property int $quantityToLocation The quantity of the product that was received to the location.
 * @property string $receiptDate The date the product was received.
 * @property string $receivedDate The date the product was received.
 * @property string $sku The product SKU.
 * @property string $username The username of the user who received the product.
 * @property string $warehouse The warehouse the product was received into.
*/
class ReceivesHistory extends ApiResource
{
    const OBJECT_GROUP = "purchaseorders";
    const OBJECT_NAME = "Receive";
}
