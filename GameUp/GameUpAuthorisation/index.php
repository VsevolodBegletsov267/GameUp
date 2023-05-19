<?php

require_once 'model/User.php';
require_once 'model/UserList.php';
require_once 'controller/UserController.php';

$userList = new UserList();
$userView = new UserView($userList);
$userController = new UserController($userList, $userView);

$mysql = new mysqli('localhost', 'root', '1029384756Seva', 'gameup');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($email != null && $password != null) {

        $result = $mysql->query("SELECT `password` FROM users WHERE `email` = '$email'");
        $user = $result->fetch_assoc();

        if ($user['password'] == $password) {
            header("Location: http://localhost/GameUp/GameUpShowcase/index1%20.php");
        } else {
            echo '<center><h1>Неверный пользователь или пароль!</h1></center>';
        }
    }
}

$userView->render();
