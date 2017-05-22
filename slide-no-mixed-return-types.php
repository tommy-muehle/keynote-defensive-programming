<?php

class Person
{
    private $birthday;

    /**
     * @return null|int
     */
    public function getAge()
    {
        if (!isset($this->birthday)) {
            return null;
        }

        // Calculate $age ...

        return $age;
    }
}
