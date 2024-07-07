<?php

namespace App\Types\Creational\protoType;

class AutoCarProtoType extends AbstractCarProtoType
{
    protected $model = "Auto";

    public function __clone()
    {
    }
}
