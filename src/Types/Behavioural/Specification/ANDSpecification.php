<?php


namespace App\Types\Behavioural\Specification;

class ANDSpecification implements SpecificationInterface
{
    private array $specs;

    public function __construct(SpecificationInterface ...$specs)
    {
        $this->specs = $specs;
    }
    public function isSatisfieBy(CV $cv): bool
    {
        foreach ($this->specs as $spec) {
            if (!$spec->isSatisfieBy($cv)) {
                return false;
            }
        }

        return true;
    }
}
