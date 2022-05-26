<?php
namespace WorkshopInvoicer;

use Exception;

class Invoice {
    public float $totalCost = 0;
    public array $services = [];

    //The properties for this class objects are strict
    public function __set($name, $value) {
        throw new Exception("Cannot add new property \$$name to instance of " . __CLASS__);
    }
}