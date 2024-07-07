<?php


namespace Tests\Behavioural;

use App\Types\Behavioural\Command\CLIInvoker;
use App\Types\Behavioural\Command\Commands\DeployCommand;
use App\Types\Behavioural\Command\Commands\RevertCommand;
use App\Types\Behavioural\Command\GitReceiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    private $invoker;
    public function setUp(): void
    {
        $this->invoker = new CLIInvoker();
    }
    public function testCanAliHandleRequest()
    {
        $receiver = new GitReceiver();
        $command = new DeployCommand($receiver);

        $this->invoker->setCommand($command);
        $this->invoker->run();

        self::assertCount(3, $receiver->getGitLog());

        self::assertEquals([
            'Git - Add',
            'Git - Commit',
            'Git - Push'
        ], $receiver->getGitLog());
    }

    public function testCanExcuteRevertCommand()
    {
        $receiver = new GitReceiver(); // punch of git functions
        $command = new DeployCommand($receiver); // accept a receiver type in the __construct function ---> and has excute function to excute some of the receiver functions
        $invoker = new CLIInvoker(); // accept a command type by setCommand function ---> and has a run function to run the excute function on the command

        $invoker->setCommand($command);
        $invoker->run();

        $revertCommand = new RevertCommand($receiver);
        $invoker->setCommand($revertCommand);
        $invoker->run();


        self::assertCount(1, $receiver->getGitLog());

        self::assertEquals([
            'Git - Revert',
        ], $receiver->getGitLog());
    }
}
