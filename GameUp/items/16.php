
<?php
session_start();
 include 'header.php'; ?>
 <img id="imageproduct" src="../showcase/Goodimage/DXRacer OH_KS06_NO.jpg">
 
        <div id="item"><?php echo $name = 'DXRacer OH_KS06_NO'; ?></div>

        <p id="price">Цена:<?php echo $price = 31192 ?>р.</p>

        <form id=buybutton method="post">
            <button class="buy-button">Купить</button>
        </form>

        <div id="description">Описание</div>

        <div id="text">

        <h2></h2>
            <p>Кресло игровое DxRacer OH/KS06/NE представлено в элегантном черном дизайне с контрастными зелеными элементами. Обивка из PU кожи не растягивается и длительное время не изнашивается, а мягкий пенополиуретановый наполнитель способствует комфортному сидению. Система дополнена небольшими колесиками, защищающими пол от повреждения.
</p>
            
        <h2></h2>
            <p>Устройство DxRacer OH/KS06/NE оснащено высокопрочной металлической крестовиной, способной выдержать вес до 160 кг. Кресло дополнено подголовником и подлокотниками, мультиблоком и возможностью быстрого изменения наклона спинки или высоты сиденья. Изделие поставляется с двумя удобными подушечками и подробной инструкцией по сборке.

</p>

        
    
  </div>
</div>

<?php
include 'footer.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['counter']['chair']++;
    $_SESSION['chair'] = array($name, $price, $_SESSION['counter']['chair']);
    header('Location: http://localhost/GameUp/items/cart.php');
}
?>