<?php

namespace App\Types\Behavioural\ChainOfResponsibility2;

class AliHandler extends AbstractHandler
{
    public function handle(Request $request)
    {
        if ($request->getId() % 2 === 0) {
            $request->setDone(true);
            $request->setHandler(self::class);

            return $request;
        }

        parent::handle($request);
    }
}
