<?php

class Counter
{
    private $count = 0;

    public function add(int $count)
    {
        $this->count += $count;
    }
}
