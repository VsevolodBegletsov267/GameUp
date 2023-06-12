<?php 
 session_start();
 include 'header.php'; ?>
 <img id="imageproduct" src="../showcase/Goodimage/Microsoft Xbox Elite Wireless Controller Series 2.jpg">
 
        <div id="item"><?php echo $name = 'Microsoft Xbox Elite Wireless Controller Series 2'; ?></div>

        <p id="price">Цена:<?php echo $price = 12889; ?>р.</p>
        <form id=buybutton method="post">
        <button class="buy-button">Купить</button>
        </form>
        <div id="description">Описание</div>

        <div id="text">

        <h2></h2>
            <p>Геймпад Microsoft Xbox Elite Series 2 – фирменный контроллер, который предлагает геймеру высокий уровень эргономичности и точность управления над игровым процессом. Возможность настройки более 30 параметров делает его контроллером профессионального уровня. В конструкции данной модели предусмотрены джойстики с регулировкой упругости хода, фиксаторы хода курков, сменные джойстики, лепестки разной формы. Прорезиненные вставки повышают удобно удержания контроллера. Аккумулятор гарантирует до 40 часов автономности Microsoft Xbox Elite Series 2. Процесс подзарядки может выполняться от кабеля или на зарядной станции.

</p>
            
        <h2></h2>
            <p></p>

        
    
  </div>
</div>

<?php
include 'footer.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['counter']['gamepad']++;
    $_SESSION['gamepad'] = array($name, $price, $_SESSION['counter']['gamepad']);
    header('Location: http://localhost/GameUp/items/cart.php');
}
?>
