<?php


namespace App\Types\Behavioural\Specification;

class CV
{
    private string $yOfEx;
    private int $age;
    private array $skills;
    private array $techs;
    private array $langs;


    public function __construct(int $yOfEx, array $skills, int $age, array $techs, array $langs)
    {
        $this->yOfEx = $yOfEx;
        $this->age = $age;
        $this->skills = $skills;
        $this->techs = $techs;
        $this->langs = $langs;
    }

    public function getage()
    {
        return $this->age;
    }

    public function getYOfEx()
    {
        return $this->yOfEx;
    }

    public function getSkills()
    {
        return $this->skills;
    }

    public function getTechs()
    {
        return $this->techs;
    }

    public function getLangs()
    {
        return $this->langs;
    }
}
