<?php
require_once "config.php";
require_once "model/User.php";

class UserList
{
    private PDO $pdo;

    public function __construct()
    {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];


        try {
            $this->pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function addUser(User $user): void
    {
        $stmt = $this->pdo->prepare("INSERT INTO users (name, email, password) VALUES (?,?,?)");
        if (filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $stmt->execute([$user->getName(), $user->getEmail(), $user->getPassword()]);
        }
        $user->setId($this->pdo->lastInsertId());
    }
}

/*    public function removeUser(User $user): void
    {
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$user->getId()]);
    }
} */