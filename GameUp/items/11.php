
<?php
session_start();
 include 'header.php'; ?>
 <img id="imageproduct" src="../showcase/Goodimage/MSI Oculux NXG253.jpg">
 
        <div id="item"><?php echo $name = 'MSI Oculux NXG253'; ?></div>

        <p id="price">Цена: <?php echo $price = 68999; ?> р.</p>

        <form method="post">
            <button class="buy-button">Купить</button>
        </form>

        <div id="description">Описание</div>

        <div id="text">

        <h2></h2>
            <p>Монитор MSI Oculux NXG253R обладает мощными характеристиками для увлекательного и комфортного гейминга. В нем установлен дисплей 24.5 дюйма IPS стандарта FullHD, который обеспечивает передачу четкого и красочного изображения. Время отклика 1 мс и частота 360 Гц предотвращают размытие динамичной картинки в шутерах, симуляторах и других игровых жанрах.</p>
            <p>Возможности подключения реализованы одним разъемом DisplayPort, двумя видеовыходами HDMI, тремя портами USB для периферийных устройств, а также выходом на наушники. MSI Oculux NXG253R оснащен подставкой с устойчивым основанием и гибкостью настройки положения. Корпус монитора украшен светодиодной подсветкой RGB.

</p>
            
        <h2></h2>
            <p></p>

        
    
  </div>
</div>

<?php
include 'footer.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['counter']['screen1']++;
    $_SESSION['screen1'] = array($name, $price, $_SESSION['counter']['screen1']);
    header('Location: http://localhost/GameUp/items/cart.php');
}
?>