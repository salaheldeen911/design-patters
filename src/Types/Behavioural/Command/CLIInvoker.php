<?php


namespace App\Types\Behavioural\Command;

use App\Types\Behavioural\Command\Commands\CommandInterface;

class CLIInvoker
{
    private CommandInterface $command;

    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function run()
    {
        return $this->command->execute();
    }
}
