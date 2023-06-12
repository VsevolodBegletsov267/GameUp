<?php 
 session_start();
 include 'header.php'; ?>
 <img id="imageproduct" src="../showcase/Goodimage/Sony DualShock 4 v2.jpg">
 
        <div id="item"><?php echo $name = 'Sony DualShock 4 v2'; ?></div>

        <p id="price">Цена: <?php echo $price = 4990; ?> р.</p>
        <form id=buybutton method="post">
        <button class="buy-button">Купить</button>
        </form>
        <div id="description">Описание</div>

        <div id="text">

        <h2></h2>
            <p>Sony DualShock 4 V2 - фирменный беспроводной геймпад от Sony для PlayStation 4 (PS4). Вторая версия Sony DualShock 4 отличается от предшествующей появившейся дополнительной световой индикацией, обновленным корпусом с более приятной на ощупь шероховатой структурой, а также более износостойким резиновым покрытием аналоговых контроллеров (стиков). Аксессуар совместим со всеми моделями PlayStation 4, а также с компьютерами под управлением Windows и Mac (необходимо дополнительное уточнение совместимости с конкретными устройствами). Sony DualShock 4 обладает отличной эргономикой и является одним из популярнейших контроллеров управления. 
</p>
            
        <h2></h2>
            <p>Sony DualShock 4 V2 так же возможно подключить к предыдущей модели Sony Playstation 3 через провод или Bluetooth переходник (приобретаются отдельно).</p>

        
    
  </div>
</div>

<?php
include 'footer.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['counter']['gamepad2']++;
    $_SESSION['gamepad2'] = array($name, $price, $_SESSION['counter']['gamepad2']);
    header('Location: http://localhost/GameUp/items/cart.php');
}
?>
