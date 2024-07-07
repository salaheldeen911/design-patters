<?php

namespace App\Types\Creational\Builder;

use App\Types\Creational\Builder\Models\BenzCar;
use App\Types\Creational\Builder\Models\Car;


class BenzCarBuilder implements CarBuilderInterface
{
    /**
     * @var Car $type
     */

    private $type;

    public function __construct()
    {
        $this->type = new BenzCar();
    }

    public function addEngine()
    {
        $this->type->setPart('ENGINE', 'engine');
    }
    public function addDoors()
    {
        $this->type->setPart('DOOR', 'door');
    }
    public function addBoby()
    {
        $this->type->setPart('BODY', 'body');
    }
    public function addWheele()
    {
        $this->type->setPart('WHEELE', 'wheele');
    }
    public function getCar(): Car
    {
        return $this->type;
    }
}
