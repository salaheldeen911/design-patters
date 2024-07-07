<?php

namespace App\Types\Structural\Facade\ConverterLibirary;

use App\Types\Structural\Facade\Photo;

class GIFConverter
{
    protected $animator;

    public function __Construct(Animator $animator)
    {
        $this->animator = $animator;
    }
    public function covertToGIF(Photo $photo)
    {
        $type = $photo->getType() . '.GIF';
        $photo->setType($type);
        $this->animator->animatePhoto($photo);

        return $photo;
    }
}
