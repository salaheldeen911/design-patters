<?php

namespace App\Types\Creational\SimpleFactory;

class Car
{
    protected $type;

    public function __construct($type)
    {
        $this->type = $type;
    }
}
