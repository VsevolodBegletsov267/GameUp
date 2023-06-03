
<?php

require_once 'model/User.php';
require_once 'model/UserList.php';
require_once 'view/UserView.php';
require_once 'controller/UserController.php';

$userList = new UserList();
$userView = new UserView($userList);
$userController = new UserController($userList, $userView);

$mysql = new mysqli('localhost', 'root', 'al1234al', 'gameup');

// Если форма отправлена, добавляем нового пользователя
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($name && $email && $password) {
        $nameResult = $mysql->query("SELECT `name` FROM users");
        $nameUser = $nameResult->fetch_assoc();
        $emailResult = $mysql->query("SELECT `email` FROM users");
        $emailUser = $emailResult->fetch_assoc();
        foreach ($nameUser as $item) {
            if ($name == $item) {
                echo "Пользователь с таким именем уже существует";
                exit();
            }
        }
        foreach ($emailUser as $item) {
            if ($email == $item) {
                echo "Пользователь с таким email'ом уже существует";
                exit();
            }
        }
        header("Location: http://localhost/GameUp/showcase/index1.php");
        $user = new User(0, $name, $email, $password);
        $userController->addUser($user);
    }
}

// Отображаем список пользователей и форму для добавления новых
$userView->render();
