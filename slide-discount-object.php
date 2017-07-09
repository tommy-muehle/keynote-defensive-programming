<?php

interface Amountable
{
    public function getAmount();
}

final class Discount implements Amountable
{
    public function getAmount()
    {
        $amount = 0.00;

        // ...

        return new Money($amount);
    }
}