<?php

namespace Tests\Behavioural;

use App\Types\Behavioural\Memento\CareTaker;
use App\Types\Behavioural\Memento\Originator;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    private Originator $originator;
    private CareTaker $careTaker;

    public function setUp(): void
    {
        $this->originator = new Originator();
        $this->careTaker = new CareTaker($this->originator);
    }

    public function testCanSaveCodeFileUpdates()
    {
        $this->originator->addNewEcho("hi");
        $this->originator->addNewVar("x", "y");

        $this->careTaker->commit();

        $codeFile = $this->originator->getCodeFile();

        $this->assertEquals(3, count($codeFile->getLines()));
    }

    public function testCanRestoreCodeFile()
    {
        $this->originator->addNewEcho("hi");
        $this->originator->addNewVar("y", "x");

        $this->careTaker->commit();

        $this->originator->addNewEcho("hi");

        $this->careTaker->commit();

        $this->originator->addNewVar("y", "x");
        $this->originator->addNewEcho("hi");
        $this->originator->addNewVar("y", "x");
        $this->originator->addNewEcho("good");
        $this->originator->addNewEcho("bye");

        $this->careTaker->rollBack();

        $codeFile = $this->originator->getCodeFile();

        $this->assertEquals(4, count($codeFile->getLines()));
    }
}
