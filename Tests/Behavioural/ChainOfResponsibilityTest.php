<?php

namespace Tests\Behavioural;

use App\Types\Behavioural\ChainOfResponsibility\AfafHandler;
use App\Types\Behavioural\ChainOfResponsibility\AliHandler;
use App\Types\Behavioural\ChainOfResponsibility\MohsenHandler;
use App\Types\Behavioural\ChainOfResponsibility\Request;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest extends TestCase
{

    // private $firstHandler;
    // private $request;

    // public function setUp(): void
    // {
    //     $this->firstHandler = new AliHandler();
    //     $$this->request = new Request();
    // }

    public function testCanAliHandleRequest()
    {
        $firstHandler = new AliHandler();
        $request = new Request();
        $request->setId(4);

        $firstHandler->handle($request);

        $this->assertTrue($request->getDone());
        $this->assertEquals(AliHandler::class, $request->getHandler());
    }

    public function testCanAfafHandleRequest()
    {
        $firstHandler = new AliHandler();
        $request = new Request();
        $request->setId(21);

        $firstHandler->handle($request);

        $this->assertTrue($request->getDone());
        $this->assertEquals(AfafHandler::class, $request->getHandler());
    }

    public function testCanMohsenHandleRequest()
    {
        $firstHandler = new AliHandler();
        $request = new Request();
        $request->setId(1);

        $firstHandler->handle($request);

        $this->assertTrue($request->getDone());
        $this->assertEquals(MohsenHandler::class, $request->getHandler());
    }

    public function testCanAfafHandleRequestFromMohsen()
    {
        $firstHandler = new MohsenHandler(new AliHandler());
        $request = new Request();
        $request->setId(21);

        $firstHandler->handle($request);

        $this->assertTrue($request->getDone());
        $this->assertEquals(AfafHandler::class, $request->getHandler());
    }

    public function testCantHandleRequest()
    {
        $firstHandler = new AliHandler();
        $request = new Request();
        $request->setId(-1);
        $notHandledRequest = $firstHandler->handle($request);

        $this->assertNotTrue($request->getDone());
        $this->assertEquals($request, $notHandledRequest);
    }
}
