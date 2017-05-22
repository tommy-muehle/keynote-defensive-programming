<?php

use Assert\Assertion;

class Counter
{
    private $count;

    /**
     * @param int $count
     */
    public function add($count)
    {
        Assertion::integer($count);

        $this->count += $count;
    }
}
