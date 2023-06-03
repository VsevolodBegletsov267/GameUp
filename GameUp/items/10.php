
<?php
session_start();
 include 'header.php'; ?>
 <img id="imageproduct" src="../showcase/Goodimage/Samsung Odyssey G7.jpg">
 
        <div id="item"><?php echo $name = 'Odyssey G7'; ?></div>

<p id="price">Цена: <?php echo $price = 49999; ?> р.</p>

        <form method="post">
            <button class="buy-button">Купить</button>
        </form>

        <div id="description">Описание</div>

        <div id="text">

        <h2>Революция изогнутого экрана
</h2>
            <p>Изогнутость экрана с радиусом кривизны 1000R - это новая вершина технологии производства изогнутых экранов с кривизной, полностью соответствующей кривизне хрусталика глаз человека, обеспечивающей максимальный реализм изображения и комфорт для зрения.

</p>
            
        <h2>Кристально-чистое изображение
</h2>
            <p>QLED, HDR600 и WQHD разрешение для естественной цветопередачи, ощущения глубины и детализации изображения.

</p>
            <h2>Дизайн со светящейся полусферой (Core lighting design)
</h2>
            <p>Тонкий матово-черный корпус гармонирует с фантастически подсвеченной панелью и создает ощущение устройства, пришедшего к нам из будущего.

</p>
            <h2>Создан для победителей
</h2>
            <p>Поддержка частоты 240Гц RapidCurve, время отклика в 1 миллисекунду и совместимость с технологией синхронизации G-Sync обеспечат вам победу в любой игре.

</p>



        
    
  </div>
</div>

<?php
include 'footer.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['counter']['screen']++;
    $_SESSION['screen'] = array($name, $price, $_SESSION['counter']['screen']);
    header('Location: http://localhost/GameUp/items/cart.php');
}
?>