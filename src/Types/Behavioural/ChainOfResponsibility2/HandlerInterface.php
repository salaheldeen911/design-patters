<?php

namespace App\Types\Behavioural\ChainOfResponsibility2;

interface HandlerInterface
{
    public function setNext(HandlerInterface $handler);
    public function handle(Request $request);
}
