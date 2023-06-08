<?php

namespace SkuVault\Exceptions;

class InvalidRequest extends \Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }

    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}