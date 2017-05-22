<?php

class Customer
{
    private $isVerified = false;

    public function verify() : void
    {
        $this->isVerified = true;
    }

    public function isVerified() : bool
    {
        return $this->isVerified;
    }
}
