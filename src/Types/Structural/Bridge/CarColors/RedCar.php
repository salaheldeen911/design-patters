<?php

namespace App\Types\Structural\Bridge\CarColors;

class RedCar implements CarColor
{
    public function getColor()
    {
        return "red";
    }
}
