<?php

namespace App\Types\Creational\Builder\Models;

class Car
{
    private $data = [];

    public function setPart($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function getPartsData()
    {
        return $this->data;
    }
}
