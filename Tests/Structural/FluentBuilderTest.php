<?php

namespace Tests\Structural;

use App\Types\Structural\FluentBuilder\QueryBuilder;
use App\Types\Structural\FluentBuilder\QueryBuilderInterface;
use PHPUnit\Framework\TestCase;

class FluentBuilderTest extends TestCase
{
    private QueryBuilderInterface $queryBuilder;

    public function setUp(): void
    {
        $this->queryBuilder = new QueryBuilder();
    }

    public function testCanCreateQueryString()
    {
        $query = $this->queryBuilder
            ->select(["id", "username", "password"])
            ->from("users", "users")
            ->where(["id = '11'", "username = 'john'"])
            ->getSQL();

        $this->assertEquals("select id, username, password from users as users where id = '11' and username = 'john'", $query);
    }
}
