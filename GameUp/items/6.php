
<?php 
 session_start();
 include 'header.php'; ?>
 <img id="imageproduct" src="../showcase/Goodimage/HyperX Alloy Origins Core.jpg">
 
        <div id="item"><?php echo $name = 'HyperX Alloy Origins Core'; ?></div>

        <p id="price">Цена: <?php echo $price = 11999; ?> р.</p>

        <form id=buybutton method="post">
            <button class="buy-button">Купить</button>
        </form>

        <div id="description">Описание</div>

        <div id="text">

        <h2></h2>
            <p></p>
            
        <h2></h2>
            <p></p>
            <ul>
                <li>Механические переключатели HyperX рассчитаны на 80 миллионов нажатий клавиш</li>
                <li>Полностью авиационный алюминиевый корпус</li>
                <li>Ультракомпактный портативный дизайн со съемным кабелем</li>
                <li>Ослепительная RGB-подсветка с динамическими эффектами</li>
                <li>Расширенная настройка с помощью программного обеспечения HyperX Ngenuity
</li>
            </ul>

        
    
  </div>
</div>

<?php
include 'footer.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['counter']['keyboard2']++;
    $_SESSION['keyboard2'] = array($name, $price, $_SESSION['counter']['keyboard2']);
    header('Location: http://localhost/GameUp/items/cart.php');
}
?>