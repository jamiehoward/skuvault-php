<?php

namespace SkuVault\Resources;

/**
 * In SkuVault, customer orders are called sales.
 *
 * @see https://dev.skuvault.com/reference/getlocations
 *
 * @property string $id The sale ID.
 * @property string $sellerSaleId The sale ID as it appears in the marketplace.
 * @property string $marketplaceId The marketplace ID.
 * @property string $channelId The channel ID.
 * @property string $status The sale status.
 * @property string $saleDate The sale date.
 * @property string $marketplace The marketplace.
 * @property array $saleItems The sale items.
 * @property array $fulfilledItems The fulfilled items.
 * @property array $saleKits The sale kits.
 * @property array $fulfilledKits The fulfilled kits.
 * @property array $shippingCost The shipping cost.
 * @property array $shippingCharge The shipping charge.
 * @property array $shippingInfo The shipping info for the recipient.
 * @property array $contactInfo The contact info for the recipient.
 * @property string $shippingCarrier The shipping carrier.
 * @property string $shippingClass The shipping class.
 * @property string $notes The notes.
 * @property bool $printedStatus Whether the sale's pick list has been printed.
 * @property string $lastPrintedDate The last printed date of the sale's pick list.
 * @property array $charges The charges associated with the sale.
 * @property array $promotions The promotions.
*/
class Sale extends ApiResource
{
    const OBJECT_GROUP = "sales";
    const OBJECT_NAME = "Sale"; 
}