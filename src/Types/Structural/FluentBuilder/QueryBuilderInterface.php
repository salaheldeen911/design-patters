<?php

namespace App\Types\Structural\FluentBuilder;


interface QueryBuilderInterface
{
    public function select(array $fields);

    public function from(string $table, string $alias);

    public function where(array $conditions);

    public function getSQL();
}
