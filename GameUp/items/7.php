
<?php 
 session_start();
 include 'header.php'; ?>
 <img id="imageproduct" src="../showcase/Goodimage/HyperX Cloud Alpha S.jpg">
 
        <div id="item"><?php echo $name = 'HyperX Cloud Alpha S'; ?></div>

        <p id="price">Цена: <?php echo $price = 8079; ?> р.</p>

        <form method="post">
            <button class="buy-button">Купить</button>
        </form>

        <div id="description">Описание</div>

        <div id="text">

        <h2></h2>
            <p></p>
            
        <h2></h2>
            <p></p>
            <ul>
                <li>Частотная характеристика 13Гц – 27кГц.Тип посадки наушников:Накладные</li>
                <li>Настраиваемый объемный звук HyperX 7.1</li>
                <li>Ползунки регулировки басов</li>
                <li>Двухкамерные драйверы HyperX</li>
                <li>Баланс игры и чата</li>
                <li>Фирменный комфорт HyperX</li>
                <li>Прочная алюминиевая рама</li>
                <li>Усовершенствованный микшер управления звуком</li>
                <li>Съемный микрофон с шумоподавлением и кабель в оплетке</li>
                <li>Технология подключения: Проводная</li>
            </ul>

        
    
  </div>
</div>
<?php
include 'footer.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['counter']['headphones']++;
    $_SESSION['headphones'] = array($name, $price, $_SESSION['counter']['headphones']);
    header('Location: http://localhost/GameUp/items/cart.php');
}
?>