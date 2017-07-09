<?php

final class Order
{
    /** @var Money */
    private $price;

    /** @var Discount */
    private $discount;

    public function getPrice()
    {
        $priceWithDiscount = $this->price;

        if (!$this->discount instanceof Discount) {
            return $priceWithDiscount;
        }

        // ...

        return new Money($priceWithDiscount);
    }
}