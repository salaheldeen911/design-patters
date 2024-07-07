<?php

namespace App\Types\Behavioural\ChainOfResponsibility;

abstract class AbstractHandler implements HandlerInterface
{
    protected HandlerInterface|null $nextHandler;

    // public function setNextHandler(HandlerInterface $handler): HandlerInterface
    // {
    //     $this->nextHandler = $handler;

    //     return $this;
    // }

    // public function handle(Request $request)
    // {
    //     return $request;
    // }
}
