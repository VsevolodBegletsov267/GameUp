<?php
session_start();
 include 'header.php'; ?>
 <img id="imageproduct" src="../showcase/Goodimage/Sony Dual Sense.jpg">
 
        <div id="item"<?php echo $name = 'Sony Dual Sense'; ?></div>

        <p id="price">Цена: <?php echo $price = 5900; ?> р.</p>

        <form id="buybutton" method="post">
            <button class="buy-button">Купить</button>
        </form>

        <div id="description">Описание</div>

        <div id="text">


            <p>Геймпад беспроводной PlayStation DualSense CFI-ZCT1W белого цвета поможет погрузиться в игровой процесс, обладая широким функционалом. Удобное расположение элементов управления и эргономичная конструкция корпуса делают контроллер надежным спутником профессионального геймера и любителя. Он рассчитан на работу с системами PS5, Android и iOS, подключается при помощи Bluetooth. Это снимает ограничения на передвижение пользования, позволяет ощутить свободу действий.</p>
            

            <p>Контроллер PlayStation DualSense CFI-ZCT1W использует адаптивные динамические триггеры для симуляции сопротивления курка в шутерах. Благодаря гироскопу устройство способно определять положение в пространстве. Чтобы сделать поворот в гонках круче, достаточно вместе с нажатием кнопки направления наклонить джойстик в нужную сторону. Максимальное погружение в игровой процесс обеспечивает виброотдача. Это тактильная обратная связь с пользователем, которая имитирует различные поверхности. Заряда аккумулятора емкостью 1560 мА·ч хватает на автономную работу геймпада до 10 ч. На зарядку уйдет 3 ч.</p>

        <style>
            body{
                font-size: 10px;
            }

        </style>
    
  </div>
</div>

<?php
include 'footer.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['counter']['gamepad1']++;
    $_SESSION['gamepad1'] = array($name, $price, $_SESSION['counter']['gamepad1']);
    header('Location: http://localhost/GameUp/items/cart.php');
}
?>