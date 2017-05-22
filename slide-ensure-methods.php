<?php

class Counter
{
    public function add($count)
    {
        $this->ensureIsInteger($count);

        // ...
    }

    private function ensureIsInteger($value)
    {
        // ...

        throw new \RuntimeException('...');
    }
}
