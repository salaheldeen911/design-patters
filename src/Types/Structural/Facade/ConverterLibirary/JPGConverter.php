<?php

namespace App\Types\Structural\Facade\ConverterLibirary;

use App\Types\Structural\Facade\Photo;

class JPGConverter
{
    protected $animator;

    public function __Construct(Animator $animator)
    {
        $this->animator = $animator;
    }
    public function covertToJPG(Photo $photo)
    {
        // $type = $photo->getType() . '.JPG';

        $photo->setType(".JPG");
        $this->animator->animatePhoto($photo);

        return $photo->getType();
    }
}
