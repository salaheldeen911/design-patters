<?php


namespace App\Types\Behavioural\Specification;

class LangSpecification implements SpecificationInterface
{
    private string $lang;

    public function __construct(string $lang)
    {
        $this->lang = $lang;
    }

    public function isSatisfieBy(CV $cv): bool
    {
        return in_array($this->lang, $cv->getLangs(), true);
    }
}
