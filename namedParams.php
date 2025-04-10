<?php
class Invoice
{
    public function __construct(
        private $description,
        private $total,
        private $chargeDate,
        private $paid
    ) {
    }
}
//Before
$invoice = new Invoice('customer installation', 1000, new DateTime(), true);

//after
$invoice = new Invoice(
    description: 'customer installation',
    total: 1000,
    chargeDate: new DateTime(),
    paid: true
);
