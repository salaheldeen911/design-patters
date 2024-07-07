<?php

namespace App\Types\Structural\Facade\ConverterLibirary;

use App\Types\Structural\Facade\Photo;

class ColorCorrection
{
    public function correctColor(Photo $photo)
    {
        return $photo . '-color correction-';
    }
}
