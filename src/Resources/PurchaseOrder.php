<?php

namespace SkuVault\Resources;

/**
 * Purchase Orders are inbound orders from your suppliers.
 *
 * @see https://dev.skuvault.com/reference/getpos
 *
 * @property string $poId The purchase order's ID.
 * @property string $poNumber The purchase order's number.
 * @property string $status The purchase order's status.
 * @property string $paymentStatus The purchase order's payment status.
 * @property string $sentStatus The purchase order's sent status.
 * @property string $supplierName The purchase order's supplier name.
 * @property string $createdDate The purchase order's created date.
 * @property string $orderDate The purchase order's order date.
 * @property string $orderCancelDate The purchase order's order cancel date.
 * @property string $arrivalDueDate The purchase order's arrival due date.
 * @property string $requestedShipDate The purchase order's requested ship date.
 * @property string $actualShippedDate The purchase order's actual shipped date.
 * @property string $trackingInfo The purchase order's tracking info.
 * @property string $publicNotes The purchase order's public notes.
 * @property string $privateNotes The purchase order's private notes.
 * @property string $termsName The purchase order's terms name.
 * @property string $shipToWarehouse The purchase order's ship to warehouse.
 * @property string $shipToAddress The purchase order's ship to address.
 * @property string $shippingCarrierClass The purchase order's shipping carrier class.
 * @property string $costs The purchase order's costs.
 * @property array $lineItems The purchase order's line items.
 * 
*/
class PurchaseOrder extends ApiResource
{
    const OBJECT_GROUP = "products";
    const OBJECT_NAME = "Product";
}
