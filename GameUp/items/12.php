
<?php
session_start();
 include 'header.php'; ?>
 <img id="imageproduct" src="../showcase/Goodimage/Huawei MateView GT.jpg">
 
        <div id="item"><?php echo $name = 'MateView GT'; ?></div>

<p id="price">Цена: <?php echo $price = 29990; ?> р.</p>

        <form id=buybutton method="post">
            <button class="buy-button">Купить</button>
        </form>

        <div id="description">Описание</div>

        <div id="text">

        <h2></h2>
            <p>Монитор HUAWEI MateView GT ZQE-CAA привлекает внимание большим изогнутым экраном. Дисплей на 34” обладает высоким разрешением и системами улучшения графики. Вы насладитесь четкой картинкой с реалистичной передачей цвета, которая не потеряет динамичности при резкой смене локаций. Встроенные динамики по 5 Вт порадуют чистым звуком даже без подключения отдельных колонок.
</p>
            
        <h2></h2>
            <p>Вы легко настроите положение экрана HUAWEI MateView GT ZQE-CAA благодаря наклонной подставке. На задней части корпуса имеется 4 разных видеоразъема для подключения к другому монитору. Также предусмотрен стандартный разъем для наушников.

</p>

        
    
  </div>
</div>

<?php
include 'footer.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['counter']['screen2']++;
    $_SESSION['screen2'] = array($name, $price, $_SESSION['counter']['screen2']);
    header('Location: http://localhost/GameUp/items/cart.php');
}
?>