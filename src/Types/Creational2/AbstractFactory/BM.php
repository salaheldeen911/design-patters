<?php

namespace App\Types\Creational2\AbstractFactory;

class BM extends Car implements CarInterface
{
    public function model()
    {
        return "Benz";
    }
}
