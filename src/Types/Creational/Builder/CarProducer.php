<?php

namespace App\Types\Creational\Builder;

use App\Types\Creational\Builder\Models\Car;

class CarProducer
{
    private $Bulder;

    public function __construct(CarBuilderInterface $builder)
    {
        $this->Bulder = $builder;
    }

    public function preduce(): Car
    {
        $this->Bulder->addBoby();
        $this->Bulder->addDoors();
        $this->Bulder->addWheele();
        $this->Bulder->addEngine();

        return $this->Bulder->getCar();
    }
}
