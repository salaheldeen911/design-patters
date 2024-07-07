<?php

namespace App\Types\Creational\Builder;

use App\Types\Creational\Builder\Models\Car;

interface CarBuilderInterface
{
    public function addEngine();
    public function addDoors();
    public function addBoby();
    public function addWheele();
    public function getCar(): Car;
}
