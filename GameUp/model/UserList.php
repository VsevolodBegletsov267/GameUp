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
        $stmt = $this->pdo->prepare("INSERT INTO users (name, surname, email) VALUES (?,?,?)");
        if (filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $stmt->execute([$user->getName(), $user->getSurname(), $user->getEmail()]);
        }
        $user->setId($this->pdo->lastInsertId());
    }

    public function removeUser(User $user): void
    {
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$user->getId()]);
    }

    public function getUsers(): array
    {
        // подготовим запрос на выборку всех записей из таблицы users
        $stmt = $this->pdo->prepare("SELECT * FROM users");

        // выполним запрос
        $stmt->execute();

        // получим все строки результата в виде ассоциативного массива
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // создадим постой массив для хранения объектов User
        $users = [];
        // переберем циклом foreach все строки результата
        foreach ($rows as $row)
        {
            // создаем объект User и добавляем его в массив $users
            $users[] = new User($row['id'], $row['name'], $row['surname'], $row['email']);
        }

        // возвращаем массив объектов User
        return $users;
    }
}