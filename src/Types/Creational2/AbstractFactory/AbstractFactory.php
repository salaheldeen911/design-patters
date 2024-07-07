<?php

namespace App\Types\Creational2\AbstractFactory;

use App\Types\Creational2\AbstractFactory\CarInterFace;

class AbstractFactory
{
    public function createBenz()
    {
        return new Benz;
    }
    public function createBM()
    {
        return new BM;
    }
}
