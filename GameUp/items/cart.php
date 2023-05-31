<?php
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>GameUp!</title>
    <link rel="stylesheet" type="text/css" href="../showcase/style.css">
</head>
<body>
<div id="header">
    <image id="logo" src="../showcase/logo.jpg"></image>
    GameUp!
    <button><img src="../showcase/user.png" alt="аккаунт" id="icon"></button>
    <button><img src="../showcase/basket.png" alt="корзина" id="icon"></button>
    <div id="slogan">Лучшее для лучших!</div>
</div>
    <div id="cart">
  <h3>Корзина</h3>
  <ul id="cart-items"></ul>
  <p>Общая стоимость: <span id="total-price">0</span> руб.</p>
        <form method="POST">
            <button id="clear-cart">Очистить корзину</button>
        </form>
</div>

<div id="products">
  <h3>Товары</h3>
  <ul>
    <?php
    $mysql = new mysqli('localhost', 'root', '1029384756Seva', 'gameup');
    include "config.php";
    $nameResult = $mysql->query("SELECT name FROM `products`");
    while($good = $nameResult->fetch_assoc()) {
        foreach ($good as $item) {
            echo $item . '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
        }
    }

    $priceResult = $mysql->query("SELECT price FROM `products`");
    while($good = $priceResult->fetch_assoc()) {
        foreach ($good as $item) {
            echo $item . '<br><br>';
        }
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $mysql->query("DELETE FROM `products`");
    }
    session_destroy();
    $mysql->query("DELETE FROM `products`");
    ?>
  </ul>
</div>
</body>
</html>
