<?php

namespace App\Types\Structural\DataMapper;

// Database layer
class StorageManager
{
    private $data;

    public function __construct(array $data)
    {
        // ex: connect to database
        $this->data = $data;
    }

    public function find(string $id)
    {
        return $this->data[$id];
    }

    public function save(array $user): bool
    {
        $this->data[] = $user;
        return true;
    }
}
