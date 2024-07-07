<?php


namespace App\Types\Behavioural\Command;

class GitReceiver
{
    private array $gitLog = [];

    public function getGitLog(): array
    {
        return $this->gitLog;
    }

    public function gitCommit()
    {
        $this->gitLog[] = 'Git - Commit';
    }

    public function gitAdd()
    {
        $this->gitLog[] = 'Git - Add';
    }

    public function gitPush()
    {
        $this->gitLog[] = 'Git - Push';
    }

    public function gitRevert()
    {
        $this->gitLog = ['Git - Revert'];
    }
}
