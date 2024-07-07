<?php


namespace App\Types\Behavioural\Command\Commands;

use App\Types\Behavioural\Command\GitReceiver;

class RevertCommand implements CommandInterface
{
    private GitReceiver $gitReceiver;
    public function __construct(GitReceiver $gitReceiver)
    {
        $this->gitReceiver = $gitReceiver;
    }

    public function execute()
    {
        $this->gitReceiver->gitRevert();
    }
}
