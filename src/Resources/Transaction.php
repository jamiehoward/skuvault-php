<?php

namespace SkuVault\Resources;

/**
 * Transactions are used to track inventory movement.
 *
 * @see https://dev.skuvault.com/reference/gettransactions
 *
 * @property string $user The user who performed the transaction.
 * @property string $sku The product SKU.
 * @property string $code The product code.
 * @property string $scannedCode The product scanned code.
 * @property string $title The product title.
 * @property int $quantity The quantity of the product that was involved in the transaction.
 * @property int $quantityBefore The quantity of the product before the transaction.
 * @property int $quantityAfter The quantity of the product after the transaction.
 * @property string $location The location that was involved in the transaction.
 * @property string $transactionType The type of transaction. E.g. pick, add, remove, etc.
 * @property string $transactionReason The reason for the transaction.
 * @property string $transactionNote The transaction note.
 * @property string $transactionDate The timestamp of the transaction.
 * @property array $context The context of the transaction. E.g. sale, purchase order, etc.
*/
class Transaction extends ApiResource
{
    const OBJECT_GROUP = "inventory";
    const OBJECT_NAME = "Transaction";
}
