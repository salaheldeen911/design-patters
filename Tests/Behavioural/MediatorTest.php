<?php


namespace Tests\Behavioural;

use App\Types\Behavioural\Mediator\LeftRoad;
use App\Types\Behavioural\Mediator\RightRoad;
use App\Types\Behavioural\Mediator\Road;
use App\Types\Behavioural\Mediator\RoadLightsMediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
/*
    like event and lesener->
    the mediator class takes tow or more objects in the constructor and has an action method (MAIN METHOD)
    this method accepts one of the constructor objects and a flag
    based on these parameters the action method will perform something on the other constructor object
    
    So the mediator class will have types of objects in its constructor 
    and will has the action method (THE MAIN METHOD) 
    THIS METHOD WILL accepts one type of the constructor object and a flag
    based on these infos this function will do some operations on the other constructor object

*/
{
    private $lightMediator;
    private $leftRoad;
    private $rightRoad;


    public function setUp(): void
    {
        $this->rightRoad = new RightRoad();
        $this->leftRoad = new LeftRoad();
        $this->lightMediator = new RoadLightsMediator($this->rightRoad, $this->leftRoad);
    }

    public function testCanMoveRightRoadBasedOnLeftRoadStopment()
    {
        $this->lightMediator->action($this->leftRoad, Road::STOP_EVENT);
        self::assertEquals($this->rightRoad->getRoadStatus(), "MOVE");
    }

    public function testCanMoveLeftRoadBasedOnRightRoadStopment()
    {
        $this->lightMediator->action($this->rightRoad, Road::STOP_EVENT);
        self::assertEquals($this->leftRoad->getRoadStatus(), "MOVE");
    }

    public function testCanStopRightRoadBasedOnLeftRoadMovement()
    {
        $this->lightMediator->action($this->leftRoad, Road::MOVE_EVENT);
        self::assertEquals($this->rightRoad->getRoadStatus(), "STOP");
    }

    public function testCanStopLeftRoadBasedOnRightRoadMovement()
    {
        $this->lightMediator->action($this->rightRoad, Road::MOVE_EVENT);
        self::assertEquals($this->leftRoad->getRoadStatus(), "STOP");
    }
}
