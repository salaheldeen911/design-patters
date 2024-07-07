<?php

namespace App\Types\Structural\Facade\ConverterLibirary;

use App\Types\Structural\Facade\Photo;

class Animator
{
    public function AnimatePhoto(Photo $photo)
    {
        return $photo->setType('-animated-');
    }
}
