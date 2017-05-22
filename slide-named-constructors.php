<?php

class Person
{
    // ...

    /**
     * @param Address $address
     */
    public function __construct(Address $address){ ... }

    public static function createDetailedPerson(Address $address, Details $details)
    {
        $person = new self($address);
        $person->details = $details;

        return $person;
    }
}
