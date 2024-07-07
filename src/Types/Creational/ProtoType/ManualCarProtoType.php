<?php

namespace App\Types\Creational\protoType;

class ManualCarProtoType extends AbstractCarProtoType
{
    protected $model = "Manual";

    public function __clone()
    {
    }
}
