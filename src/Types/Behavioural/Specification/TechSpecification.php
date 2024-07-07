<?php


namespace App\Types\Behavioural\Specification;

class TechSpecification implements SpecificationInterface
{
    private string $tech;

    public function __construct(string $tech)
    {
        $this->tech = $tech;
    }

    public function isSatisfieBy(CV $cv): bool
    {
        return in_array($this->tech, $cv->getTechs(), true);
    }
}
