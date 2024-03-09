<?php

namespace App\Database;
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'env' . DIRECTORY_SEPARATOR . 'env.php';

use PDO;

class DatabaseManager extends PDO
{
    private static $pdo;

    public function __construct()
    {
       if(is_null(self::$pdo)) {
            self::$pdo = new PDO ('mysql:host='. DB_HOST .';dbname='. DB_NAME, DB_USERNAME, DB_PASSWORD);
        }
    }

    /**
     * Get the value of pdo
     */ 
    public function getPdo()
    {
        return self::$pdo;
    }

    /**
     * Set the value of pdo
     *
     * @return  self
     */ 
    public function setPdo($pdo)
    {
        self::$pdo = $pdo;

        return $this;
    }
}
