<?php

namespace App\Database\Querries;

use App\Database\DatabaseManager;
use App\Database\Models\User;
use Exception;
use PDO;

class UsersQuerries
{
    
    private PDO $pdo;
    private string $tableName;

    public function __construct()
    {
        $databaseManager = new DatabaseManager();
        $this->pdo = $databaseManager->getPdo();
        $this->tableName = 'users';
    }

    public function allUsers () : array
    {
        $query = $this->pdo->query("SELECT * FROM {$this->tableName};");
        return $query->fetchAll(PDO::FETCH_CLASS, User::class) ?? [];
    }

    public function userByUsername (string $username) : ?User
    {
        
            $query = $this->pdo->prepare("SELECT * FROM {$this->tableName} WHERE username = :username;");
            $query->execute([
                "username" => $username
            ]);
            $user = $query->fetchAll(PDO::FETCH_CLASS, User::class);
            if (count($user)) {
                return $user[0];
            }
            return  null;
       
    }

    public function userById (int $id) : ?User
    {
        $query = $this->pdo->prepare("SELECT * FROM {$this->tableName} WHERE user_id = :id");
        $query->execute([
            "id" => $id
        ]);
        return $query->fetchAll(PDO::FETCH_CLASS, User::class)[0] ?? null;
    }

}
