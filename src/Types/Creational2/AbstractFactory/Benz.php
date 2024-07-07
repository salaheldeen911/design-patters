<?php

namespace App\Types\Creational2\AbstractFactory;

class Benz implements CarInterface
{
    public function model()
    {
        return "Benz";
    }
}
