<?php

namespace Tests\Behavioural;

use App\Types\Behavioural\Specification\ANDSpecification;
use App\Types\Behavioural\Specification\CV;
use App\Types\Behavioural\Specification\LangSpecification;
use App\Types\Behavioural\Specification\ORSpecification;
use App\Types\Behavioural\Specification\SkillSpecification;
use App\Types\Behavioural\Specification\TechSpecification;
use PHPUnit\Framework\TestCase;

class SpecificationTest extends TestCase
{

    public function getSeniorBackEndDevSpecification()
    {
        $phpSpec = new LangSpecification("php");
        $javeSpec = new LangSpecification("java");
        $gitSpec = new TechSpecification("git");
        $dokerSpec = new TechSpecification("docker");
        $proplemSolvingSpec = new SkillSpecification("problem-solving");

        $seniorSpec = new ANDSpecification(
            $phpSpec,
            $javeSpec,
            $gitSpec,
            $dokerSpec,
            $proplemSolvingSpec
        );

        return $seniorSpec;
    }

    public function getJuniorBackEndDevSpecification()
    {
        $phpSpec = new LangSpecification("php");
        $gitSpec = new TechSpecification("git");

        $juniorSpec = new ANDSpecification(
            new ORSpecification($javeSpec, $phpSpec),
            $gitSpec,
        );

        return $juniorSpec;
    }

    public function testCanNotifyAllObserversWhenTowOrdersAreComing()
    {
        $cv = new CV(5, ['problem-solving'], 25, ['git', 'docker'], ['php', 'java']);

        self::assertTrue($this->getSeniorBackEndDevSpecification()->isSatisfieBy($cv));
    }
}
