<?php

namespace App\Types\Structural\Facade;

use App\Types\Structural\Facade\ConverterLibirary\Animator;
use App\Types\Structural\Facade\ConverterLibirary\ColorCorrection;
use App\Types\Structural\Facade\ConverterLibirary\GIFConverter;
use App\Types\Structural\Facade\ConverterLibirary\JPGConverter;
use App\Types\Structural\Facade\Photo;

class ConverterFacade
{
    public function GIFConverter(Photo $photo)
    {
        $animator = new Animator();
        $gifConverter = new GIFConverter($animator);

        return $gifConverter->covertToGIF($photo);
    }

    public function JPGConverter(Photo $photo)
    {
        $colorCorrection = new ColorCorrection();
        $photo->setType($colorCorrection->correctColor($photo));
        $animator = new Animator();
        $jpgConverter = new JPGConverter($animator);

        return $jpgConverter->covertToJPG($photo);
    }
}
