<?php
session_start();
$fullprice = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_destroy();
    header('Location: http://localhost/GameUp/items/cart.php');
}
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
    <button id="headbut"><img src="../showcase/basket.png" alt="корзина" id="icon"></button>
    <div id="slogan">Лучшее для лучших!</div>
</div>
    <div id="cart">
  <h3>Корзина</h3>
  <ul id="cart-items"></ul>
        <form  method="post">
            <button class="basketbut" id="clear-cart">Очистить корзину</button>
        </form>
</div>

<div id="products">
  <h3>Товары</h3>
  <ul>
    <?php
    foreach (array_slice($_SESSION, 1) as $item) {
            echo "$item[0] ----- $item[1] руб. ----- Кол-во: " . $item[2] . "<br><br>";
            $goodprice = $item[2] * $item[1];
            $fullprice = $fullprice + $goodprice;
    }

    echo "Общая стоимость: $fullprice руб.";
    ?>
  </ul>
</div>
<form action="../showcase/index1.php">
    <button class="basketbut">Продолжить покупки</button>
</form>
<style>
    body {
        font-size: 25px;
    }
    #cart {
        text-decoration: underline;
        display: block;
    }
    #products{
        text-decoration: underline;
        display: block;
    }
    #headbut{
        border-radius: 20%;
        float: right;
        margin-right: 25px;
        margin-top: 30px;
    }
    .basketbut{
    background-color: darkred;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    margin-top: 10px;
    margin-right: 50px;
    }
</style>
</body>

</html>
