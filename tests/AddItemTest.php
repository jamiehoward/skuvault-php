<?php

namespace SkuVault\Tests;

use SkuVault\Endpoints\AddItem;
use PHPUnit\Framework\TestCase as BaseTestCase;
use SkuVault\Exceptions\InvalidRequest;

class AddItemTest extends BaseTestCase
{
    public function test_data_is_validated()
    {
        $this->expectException(InvalidRequest::class);

        $addItem = new AddItem();
        $addItem->addItem();
    }
}