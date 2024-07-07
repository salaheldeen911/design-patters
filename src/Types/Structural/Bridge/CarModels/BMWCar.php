<?php

namespace App\Types\Structural\Bridge\CarModels;

use App\Types\Structural\Bridge\Car;
use App\Types\Structural\Bridge\CarColors\CarColor;

class BMWCar extends Car
{
    public function __construct(CarColor $carColor)
    {
        parent::__construct($carColor);
    }

    public function getProduct()
    {
        return sprintf("the car type is %s and the car color is %s", "BMW", $this->color->getColor());
    }
}
