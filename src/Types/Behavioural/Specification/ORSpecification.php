<?php


namespace App\Types\Behavioural\Specification;

class ORSpecification implements SpecificationInterface
{
    private array $specs;

    public function __construct(SpecificationInterface ...$specs)
    {
        $this->specs = $specs;
    }
    public function isSatisfieBy(CV $cv): bool
    {
        foreach ($this->specs as $spec) {
            if ($spec->isSatisfiedBy($cv)) {
                return true;
            }
        }

        return false;
    }
}
