<?php

class Person
{
    private $address;

    private $details;

    public function __construct(Address $address, Details $details = null)
    {
        $this->address = $address;
        $this->details = $details;
    }
}
