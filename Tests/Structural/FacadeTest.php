<?php

namespace Tests\Structural;

use App\Types\Structural\Facade\ConverterFacade;
use App\Types\Structural\Facade\Photo;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    private ConverterFacade $converterFacade;

    public function setUp(): void
    {
        $this->converterFacade = new ConverterFacade();
    }

    public function testCanConvertPhotoToJPG()
    {
        $photo = new Photo();

        $this->assertEquals('-WEB--color correction-', $this->converterFacade->JPGConverter($photo));
    }
}
