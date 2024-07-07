<?php

namespace App\Types\Structural\Bridge;

use App\Types\Structural\Bridge\CarColors\CarColor;

abstract class Car
{
    protected $color;
    public function __construct(CarColor $color)
    {
        $this->color = $color;
    }

    abstract function getProduct();
}
