<?php

namespace Tests\Structural;

use App\Types\Structural\DataMapper\DataMapper;
use App\Types\Structural\DataMapper\StorageManager;
use App\Types\Structural\DataMapper\User;
use PHPUnit\Framework\TestCase;

class DataMapperTest extends TestCase
{
    private StorageManager $manager;
    private array $data;


    protected function setUp(): void
    {
        // parent::setUp();
        $this->data = [1 => ['username' => "admin", 'password' => "password"]];
        $this->manager = new StorageManager($this->data);
    }

    public function testCanGetUserById()
    {
        $dataMapper = new DataMapper($this->manager);
        $user = $dataMapper->findById(1);

        $this->assertEquals($this->data[1], $user);
    }

    public function testCanSaveUser()
    {
        $user = new User();
        $user->setUsername("master");
        $user->setpassword("321");
        $user->setId(2);

        $dataMapper = new DataMapper($this->manager);

        $this->assertEquals($dataMapper->saveUserData($user), true);
    }
}
