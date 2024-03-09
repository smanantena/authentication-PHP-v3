<?php

namespace Tests;

use App\Database\DatabaseManager;
use PDO;
use PHPUnit\Framework\TestCase;

class DatabaseManagerTest extends TestCase
{
    public function test_if_db_is_not_null ()
    {
        $this->assertInstanceOf(PDO::class, new DatabaseManager());
    }

    public function test_if_dbMananger_PDO_exist ()
    {
        $dbMananger = new DatabaseManager();
        $this->assertInstanceOf(PDO::class, $dbMananger->getPdo());
    }
}