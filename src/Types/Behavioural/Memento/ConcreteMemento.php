<?php

namespace App\Types\Behavioural\Memento;

use App\Types\Behavioural\Memento\CodeFile;

class ConcreteMemento implements MementoInterface
{
    private CodeFile $codeFile;

    public function __construct(CodeFile $codeFile)
    {
        $this->codeFile = $codeFile;
    }

    public function getSnapShot(): CodeFile
    {
        return $this->codeFile;
    }
}
