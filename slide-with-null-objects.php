<?php

final class Order
{
    /** @var Money */
    private $price;

    /** @var Discount */
    private $discount;

    public function getPrice()
    {
        $amount = $this->price->getAmount() - $this->discount->getAmount();

        return new Money($amount);
    }
}

