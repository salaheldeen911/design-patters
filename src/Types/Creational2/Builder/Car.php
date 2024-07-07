<?php

namespace App\Types\Creational2\Builder;

class Car
{
    protected $data;

    public function setData(...$data): void
    {
        foreach ($data as $key => $value) {
            $this->data[$key] = $value;
        }
    }
}
