<?php
namespace WorkshopInvoicer;

use Exception;
use WorkshopInvoicer\Invoice;

class InvoiceBuilder {

    private Invoice $invoice;

    protected function resetInvoice() {
        $this->invoice = new Invoice();
    }

    public function addBasicInspection() {
        $this->resetInvoice();
        $this->invoice->totalCost += 50;
        array_push($this->invoice->services, 'Basic Inspection');
    }

    public function addOilChange() {
        if (!in_array('Basic Inspection', $this->invoice->services)) {
            throw new Exception('Before doing anything with the car, a basic inspection needs to take place');
        }

        $this->invoice->totalCost += 85;
        array_push($this->invoice->services, 'Oil Change');
    }

    public function addTireRotation() {
        if (!in_array('Basic Inspection', $this->invoice->services)) {
            throw new Exception('Before doing anything with the car, a basic inspection needs to take place');
        }

        $this->invoice->totalCost += 23.5;
        array_push($this->invoice->services, 'Tire Rotation');
    }

    public function getTotalCost(): float {
        if (!in_array('Basic Inspection', $this->invoice->services)) {
            throw new Exception('Your invoice needs at least one service');
        }

        if ($this->invoiceHasDuplicatedServices()) {
            throw new Exception('Your invoice has duplicated services');
        }

        return $this->invoice->totalCost;
    }

    protected function invoiceHasDuplicatedServices(): bool {
        return count($this->invoice->services) !== count(array_unique($this->invoice->services));
    }
}