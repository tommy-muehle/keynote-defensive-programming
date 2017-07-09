<?php

interface Amountable
{
    public function getAmount();
}


final class NoDiscount implements Amountable
{
    public function getAmount()
    {
        return new Money(0.00);
    }
}