<?php

namespace Tests\Behavioural;

use App\Types\Behavioural\ChainOfResponsibility2\AfafHandler;
use App\Types\Behavioural\ChainOfResponsibility2\AliHandler;
use App\Types\Behavioural\ChainOfResponsibility2\MohsenHandler;
use App\Types\Behavioural\ChainOfResponsibility2\Request;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest2 extends TestCase
{
    public function testCanAliHandleRequest()
    {
        $ali = new AliHandler();
        $afaf = new AfafHandler();
        $mohsen = new MohsenHandler();

        // $ali->setNext($afaf);
        $request = new Request();
        $response = $request->setId(4);

        $response = $ali->handle($request);

        $this->assertTrue($response->getDone());
        $this->assertEquals(AliHandler::class, $response->getHandler());
    }

    public function testCanAfafHandleRequest()
    {
        $ali = new AliHandler();
        $afaf = new AfafHandler();
        // $mohsen = new MohsenHandler();
        // $afaf->setNext($mohsen);
        $ali->setNext($afaf);
        $request = new Request();
        $request->setId(9);

        /**
         * @var Request $request 
         */

        $response = $ali->handle($request);

        $this->assertTrue($response->getDone());
        $this->assertInstanceOf(AfafHandler::class, $response->getHandler());
    }
}
