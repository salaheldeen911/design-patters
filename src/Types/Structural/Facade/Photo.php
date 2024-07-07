<?php

namespace App\Types\Structural\Facade;


class Photo
{
    protected $type = "-WEB-";

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function __toString()
    {
        return $this->type;
    }
}
