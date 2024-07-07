<?php

namespace App\Types\Structural\FluentBuilder;


class QueryBuilder implements QueryBuilderInterface
{
    private array $fields;
    private string $table;
    private string $alias;
    private array $conditions;

    public function select(array $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    public function from(string $table, string $alias)
    {
        $this->table = $table;
        $this->alias = $alias;

        return $this;
    }

    public function where(array $conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    public function getSQL()
    {
        $fields = implode(', ', $this->fields);
        $table = $this->table;
        $alias = $this->alias;
        $conditions = implode(' and ', $this->conditions);

        return "select $fields from $table as $alias where $conditions";
    }
}
