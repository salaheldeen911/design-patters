<?php

namespace App\Types\Behavioural\ChainOfResponsibility;

class AliHandler extends AbstractHandler
{
    public function __construct($nextHandler = new AfafHandler())
    {
        $this->nextHandler = $nextHandler;
    }

    public function handle(Request $request)
    {
        if ($request->getId() % 2 === 0) {
            $request->setDone(true);
            $request->setHandler(self::class);

            return $request;
        }

        if (isset($this->nextHandler)) {
            return $this->nextHandler->handle($request);
        }

        return $request;
    }
}
