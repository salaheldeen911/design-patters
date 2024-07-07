<?php

namespace App\Types\Behavioural\ChainOfResponsibility;

class AfafHandler extends AbstractHandler
{
    public function __construct($nextHandler = new MohsenHandler())
    {
        $this->nextHandler = $nextHandler;
    }

    public function handle(Request $request)
    {
        if ($request->getId() > 20) {
            $request->setHandler(self::class);
            $request->setDone(true);

            return $request;
        }

        if (isset($this->nextHandler)) {
            return $this->nextHandler->handle($request);
        }

        return $request;
    }
}
