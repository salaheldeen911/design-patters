<?php


namespace App\Types\Behavioural\Memento;

class CodeFile
{
    private array $lines = [];

    public function __construct()
    {
        $this->lines[] = '<?php';
    }

    public function addNewLine(string $line)
    {
        $this->lines[] = $line;
    }

    public function getLines(): array
    {
        return $this->lines;
    }
}
