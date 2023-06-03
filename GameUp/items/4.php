
<?php 
 session_start();
 include 'header.php'; ?>
 <img id="imageproduct" src="../showcase/Goodimage/Razer Ornata V2.jpg">
 
        <div id="item"><?php echo $name = 'Razer Ornata V2'; ?></div>

        <p id="price">Цена:<?php echo $price = 6999; ?>р.</p>

        <form method="post">
            <button class="buy-button">Купить</button>
        </form>

        <div id="description">Описание</div>

        <div id="text">

        <h2>ГИБРИДНОЕ ПРЕИМУЩЕСТВО</h2>
            <p>Испытайте лучшее из обоих миров с Razer Ornata V2 - с гибридными переключателями, которые объединяют преимущества мембранных клавиш и механических переключателей в единую конструкцию.</p>
            
        <h2>ГИБРИДНЫЕ МЕХАНИЧЕСКО-МЕМБРАННЫЕ ПЕРЕКЛЮЧАТЕЛИ RAZER</h2>
            <p>Сочетая мгновенный щелкающий отклик механического переключателя с привычным, мягким ощущением обычной клавиатуры, каждое нажатие клавиши на Razer Ornata V2 принесет вам столько же удовольствия, как и точности.

</p>
<h2>ПОДДЕРЖКА RAZER CHROMA RGB</h2>
<p>С более чем 16,8 миллионами цветов и набором эффектов на выбор, игровая клавиатура Razer Ornata V2 не только обладает богатыми возможностями индивидуальной настройки, но и обеспечивает более полное погружение в игры со встроенной поддержкой Chroma подсветки с помощью динамических световых эффектов</p>
        
    
  </div>
</div>

<?php
include 'footer.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['counter']['keyboard']++;
    $_SESSION['keyboard'] = array($name, $price, $_SESSION['counter']['keyboard']);
    header('Location: http://localhost/GameUp/items/cart.php');
}
?>