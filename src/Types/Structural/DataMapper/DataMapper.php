<?php

namespace App\Types\Structural\DataMapper;

class DataMapper

// Using StorageManager as ORM
{
    private $manager;

    public function __construct(StorageManager $manager)
    {
        // passign manager type : mySQL, Orecal ...
        $this->manager = $manager;
    }

    public function findById(string $id)
    {
        return $this->manager->find($id);
    }

    public function saveUserData(User $user)
    {
        return $this->manager->save(['username' => $user->getUsername(), 'password' => $user->getPassword()]);
    }
}
