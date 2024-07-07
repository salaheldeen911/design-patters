<?php

namespace App\Types\Creational2\Pool;

class Pooler
{
    protected $bazyCars = [];
    protected $freeCars = [];

    public function carRent(): Car
    {
        if (count($this->freeCars) === 0) {
            $newCar = new Car();
            $this->bazyCars[spl_object_hash($newCar)] = $newCar;
            return $newCar;
        }

        $car = array_pop($this->freeCars);
        return $car;
    }

    public function carFree(Car $car): array
    {
        $carId = spl_object_hash($car);
        if (isset($this->bazyCars[$carId])) {
            unset($this->bazyCars[$carId]);
            $this->freeCars[$carId] = $car;
        }

        return $this->freeCars;
    }

    public function getReport(): string
    {
        return count($this->freeCars) + count($this->bazyCars);
    }

    public function getFreeCount(): string
    {
        return count($this->freeCars);
    }
}
