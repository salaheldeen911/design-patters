<?php

namespace App\Types\Behavioural\ChainOfResponsibility;

class MohsenHandler extends AbstractHandler
{
    public function __construct($nextHandler = null)
    {
        $this->nextHandler = $nextHandler;
    }

    public function handle(Request $request)
    {
        if ($request->getId() < 3 && $request->getId() > 0) {
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
