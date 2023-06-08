<?php

namespace SkuVault\Endpoints;

use SkuVault\Exceptions\InvalidRequest;

class AddItem extends Endpoint
{
    public $sku;
    public $code;
    public $warehouseId;
    public $locationCode;
    public $quantity = 1;
    public $reason = 'add';
    public $note = '';
    public $serialNumbers = [];

    public function addItem()
    {
        $this->data = [
            'Sku' => $this->sku,
            'Code' => $this->code,
            'WarehouseId' => $this->warehouseId,
            'LocationCode' => $this->locationCode,
            'Quantity' => $this->quantity,
            'Reason' => $this->reason,
            'Note' => $this->note,
            'SerialNumbers' => $this->serialNumbers
        ];

        $this->validate();

        $this->uri = 'inventory/addItem';
        
        return $this->call();
    }

    public function validate()
    {
        if (empty($this->sku)) {
            throw new InvalidRequest('SKU is required');
        }

        if (empty($this->code)) {
            throw new InvalidRequest('Code is required');
        }

        if (empty($this->warehouseId)) {
            throw new InvalidRequest('Warehouse ID is required');
        } else if (!is_int($this->warehouseId)) {
            throw new InvalidRequest('Warehouse ID must be an integer');
        }

        if (empty($this->locationCode)) {
            throw new InvalidRequest('Location Code is required');
        }

        if (empty($this->quantity)) {
            throw new InvalidRequest('Quantity is required');
        } else if (!is_int($this->quantity)) {
            throw new InvalidRequest('Quantity must be an integer');
        }

        if (empty($this->reason)) {
            throw new InvalidRequest('Reason is required');
        }
    }
}
