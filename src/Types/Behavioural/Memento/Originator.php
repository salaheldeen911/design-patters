<?php


namespace App\Types\Behavioural\Memento;

class Originator
{
    private CodeFile $codeFile;

    public function __construct()
    {
        $this->codeFile = new CodeFile();
    }

    public function addNewEcho($line)
    {
        $this->codeFile->addNewLine("Echo '$line';");
    }

    public function addNewVar(string $var, string $val)
    {
        $this->codeFile->addNewLine("$$var = $val;");
    }

    public function save(): MementoInterface
    {
        return new ConcreteMemento(clone $this->codeFile);
    }

    public function CtrlZ(MementoInterface $memento)
    {
        $this->codeFile = $memento->getSnapShot();
    }

    public function getCodeFile(): CodeFile
    {
        return $this->codeFile;
    }
}
