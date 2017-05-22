<?php

class Person
{
    private $address;

    private $details;

    // ...

    public function __construct(Address $address)
    {
        $this->address = $address;
    }

    public function addDetails(Details $details)
    {
        $this->details = $details;
    }
}
