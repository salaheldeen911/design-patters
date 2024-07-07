<?php

namespace App\Types\Behavioural\ChainOfResponsibility;

interface HandlerInterface
{
    public function handle(Request $request);
}
