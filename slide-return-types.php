<?php

class Person
{
    private $birthday;

    /**
     * @return int
     * @throws InvalidArgumentException
     */
    public function getAge()
    {
        if (!isset($this->birthday)) {
            throw new InvalidArgumentException('...');
        }

        // Calculate and return $age ...
    }

    public function hasBirthday()
    {
        return isset($this->birthday);
    }
}
