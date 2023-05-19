<?php


require_once "config.php";
require_once "model/User.php";
require_once "index.php";

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

    public function authUser(User $user): void
    {
        $stmt = $this->pdo->prepare("SELECT `password` FROM users WHERE `email` = '$email'");
        $stmt->execute([$user->getEmail()]);
        if ($stmt = $password) {
            header("Location: https://www.youtube.com");
        }
    }
}
