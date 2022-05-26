<?php
use PHPUnit\Framework\TestCase;
use WorkshopInvoicer\InvoiceBuilder;

class InvoiceBuilderTest extends TestCase
{

    /**
     * @covers InvoiceBuilder
     */
    public function test_class_instantiates()
    {
        $invoiceBuilder = new InvoiceBuilder();
        $this->assertInstanceOf('WorkshopInvoicer\InvoiceBuilder', $invoiceBuilder);
    }

    /**
     * Testing Daniel's order
     * @covers InvoiceBuilder
     */
    public function test_basic_inspection_cost()
    {
        $invoiceBuilder = new InvoiceBuilder();
        $invoiceBuilder->addBasicInspection();
        $this->assertEquals(50, $invoiceBuilder->getTotalCost());
    }

    /**
     * Testing Joseph's order
     * @covers InvoiceBuilder
     */
    public function test_oil_change_cost()
    {
        $invoiceBuilder = new InvoiceBuilder();
        $invoiceBuilder->addBasicInspection();
        $invoiceBuilder->addOilChange();
        $this->assertEquals(135, $invoiceBuilder->getTotalCost());
    }

    /**
     * Testing James order
     * @covers InvoiceBuilder
     */
    public function test_tire_rotation_cost()
    {
        $invoiceBuilder = new InvoiceBuilder();
        $invoiceBuilder->addBasicInspection();
        $invoiceBuilder->addTireRotation();
        $this->assertEquals(73.5, $invoiceBuilder->getTotalCost());
    }

    /**
     * Testing Daniel's question
     * @covers InvoiceBuilder
     */
    public function test_oil_change_and_tire_rotation_cost()
    {
        $invoiceBuilder = new InvoiceBuilder();
        $invoiceBuilder->addBasicInspection();
        $invoiceBuilder->addOilChange();
        $invoiceBuilder->addTireRotation();
        $this->assertEquals(158.5, $invoiceBuilder->getTotalCost());
    }
}
