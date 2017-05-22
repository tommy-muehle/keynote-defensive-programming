<?php

class Person
{
    // ...

    public function __clone()
    {
        throw new LogicException('Why would you even clone me?');
    }

    public function __sleep()
    {
        throw new BadMethodCallException('Serializing, really?');
    }
}
