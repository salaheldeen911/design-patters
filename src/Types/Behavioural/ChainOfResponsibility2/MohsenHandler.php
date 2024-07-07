<?php

namespace App\Types\Behavioural\ChainOfResponsibility2;

class MohsenHandler extends AbstractHandler
{
    public function handle(Request $request)
    {
        if ($request->getId() < 3) {
            $request->setHandler(self::class);
            $request->setDone(true);

            return $request;
        }

        parent::handle($request);
    }
}
