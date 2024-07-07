<?php


namespace App\Types\Behavioural\Specification;

class AgeSpecification implements SpecificationInterface
{
    private int $minAge;
    private int $maxAge;

    public function __construct(int $minAge, int $maxAge)
    {
        $this->maxAge = $maxAge;
        $this->minAge = $minAge;
    }
    public function isSatisfieBy(CV $cv): bool
    {
        return $cv->getAge() <= $this->maxAge && $cv->getAge() >= $this->minAge;
    }
}
