<?php


namespace App\Types\Behavioural\Specification;

interface SpecificationInterface
{
    public function isSatisfieBy(CV $sv): bool;
}
