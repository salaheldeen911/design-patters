<?php

namespace App\Types\Behavioural\ChainOfResponsibility2;

class AfafHandler extends AbstractHandler
{
    public function handle(Request $request)
    {
        if ($request->getId() < 20) {
            $request->setHandler(self::class);
            $request->setDone(true);
            return $request;
        }

        parent::handle($request);
    }
    public function hi()
    {
        return "hi";
    }
}
