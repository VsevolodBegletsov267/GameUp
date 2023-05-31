<?php
require_once "config.php";
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
    <form action="">
    <button><img src="../showcase/basket.png" alt="корзина" id="icon"></button>
    </form>
    <div id="slogan">Лучшее для лучших!</div>
</div>
<div id="content">
    


  <img src="../showcase/Goodimage/HyperX Pulsefire Surge.jpg" alt="Картинка" id="imageproduct">
  
     <div id="item"><?php $name = 'HyperX Pulsefire'; ?></div>

        <p id="price">Цена: <?php $price = 2969; ?>р.</p>

        <form method="POST">
        <button class="buy-button">Купить</button>
        </form>

<style>
.buy-button {
  background-color: darkred;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  margin-top: 00px;
  margin-right: 1100px;
}

.buy-button:hover {
  background-color: #e60000;
}
</style>


        <div id="description">Описание</div>

        <div id="text">
    
    <ul>
        <li>Световое кольцо обеспечивает динамические эффекты RGB на 360 градусов.</li>
        <li>Датчик Pixart 3389 с собственным разрешением до 16 000 точек на дюйм</li>
        <li>Надежные переключатели Omron рассчитаны на 50 миллионов нажатий</li>
        <li>Простая настройка с помощью программного обеспечения HyperX NGenuity</li>
        <li>Встроенная память для хранения настроек</li>
        <li>Большие коньки для легкого скольжения</li>


    </ul>
    <p>Мышь проводная HyperX Pulsefire Surge RGB HX-MC002B представлена в черном корпусе с поддержкой RGB-подсветки. Особенность мыши в использовании лазерного датчика с настраиваемым разрешением 16000 dpi. Работа датчика возможна в разрешении 3200 dpi, 800 dpi и 1600 dpi: настройка этого показателя зависит от специфики работы с ПК. Надежные переключатели обладают большой чувствительностью, что гарантирует быстрый и четкий тактильный отклик, поэтому вы будете всегда первым в играх. Кнопки рассчитаны на 50 миллионов нажатий.
Модель поддерживает настройку эффектов подсветки, программных кнопок, разрешения, но самое главное в том, что все эти настройки можно сохранять в память при помощи программного обеспечения HyperX NGenuity. Круговая RGB-подсветка поддерживает динамические эффекты благодаря световому кольцу. HyperX Pulsefire Surge RGB HX-MC002B оборудована 6 кнопками, среди которых особое место отводится программируемым клавишам, позволяющим достичь высот в игровых сражениях.</p>
  </div>
</div>
</div>
</body>
</html>
<?php
$mysql = new mysqli('localhost', 'root', '1029384756Seva', 'gameup');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mysql->query("INSERT INTO `products`(id, name, price) VALUES(NULL, '$name', $price)");
    header("Location: http://localhost/GameUp/showcase/index1.php");
}
?>
