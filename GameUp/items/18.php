
<?php
session_start();
 include 'header.php'; ?>
 <img id="imageproduct" src="../showcase/Goodimage/Defender Pilot.jpg">
 
        <div id="item"><?php echo $name = 'Defender Pilot'; ?></div>

        <p id="price">Цена:<?php echo $price = 10960 ?>р.</p>

        <form method="post">
            <button class="buy-button">Купить</button>
        </form>

        <div id="description">Описание</div>

        <div id="text">

        <h2></h2>
            <p>Кресло игровое Defender Pilot создано специально для того, чтобы вы погрузились в оазис непревзойденного комфорта и повышенного удобства при прохождении насыщенной баталии или выполнении наиболее трудоемкой задачи. Его конструкцией предусмотрены подлокотники, снижающие нагрузку на кисти рук, поддерживающие область поясницы и шеи подушки, а также эргономичный подголовник.
</p>
            
        <h2></h2>
            <p>Легкость во время ухода, устойчивость к выгоранию и появлению потертостей – основные достоинства экокожи, использованной в качестве обивки кресла игрового Defender Pilot. Главным звеном аксессуара является массивная металлическая крестовина, которая не боится ежедневных нагрузок до 120 кг. Под ней производитель расположил 5 роликов, которые стоят на страже быстрого перемещения верного помощника без ущерба для напольного покрытия. Представленный высокоплотной пеной наполнитель не даст усадку на протяжении всего эксплуатационного периода, а специальный рычажок гарантирует быстрый выбор наиболее подходящей высоты сиденья и угла наклона спинки.

</p>

        
    
  </div>
</div>

<?php
include 'footer.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['counter']['chair2']++;
    $_SESSION['chair2'] = array($name, $price, $_SESSION['counter']['chair2']);
    header('Location: http://localhost/GameUp/items/cart.php');
}
?>