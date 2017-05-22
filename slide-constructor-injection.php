<?php

class Person
{
    private $address;

    /**
     * @param \Address $address
     */
    public function __construct(Address $address)
    {
        $this->address = $address;
    }
}
