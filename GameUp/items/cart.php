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
    <button><img src="../showcase/user.png" alt="аккаунт" id="icon"></button>
    <button><img src="../showcase/basket.png" alt="корзина" id="icon"></button>
    <div id="slogan">Лучшее для лучших!</div>
</div>
    <div id="cart">
  <h3>Корзина</h3>
  <ul id="cart-items"></ul>
        <form method="post">
            <button id="clear-cart">Очистить корзину</button>
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
    <button>Продолжить покупки</button>
</form>
</body>
</html>
