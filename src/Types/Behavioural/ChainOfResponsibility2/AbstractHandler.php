<?php

namespace App\Types\Behavioural\ChainOfResponsibility2;

abstract class AbstractHandler implements HandlerInterface
{
    protected HandlerInterface $nextHandler;

    public function setNext(HandlerInterface $handler): HandlerInterface
    {
        $this->nextHandler = $handler;

        return $handler;
    }
    public function handle(Request $request)
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }

        return $request;
    }
}
