
<?php
session_start();
include 'header.php'; ?>
 <img id="imageproduct" src="../showcase/Goodimage/Razer Basilisk V3.jpg">
 
        <div id="item"><?php echo $name = 'Razer Basilisk V3'; ?></div>

        <p id="price">Цена: <?php echo $price = 5100; ?> р.</p>

        <form id=buybutton method="post">
            <button class="buy-button">Купить</button>
        </form>

        <div id="description">Описание</div>

        <div id="text">

        <h2>ПОЛНЫЙ СПЕКТР НАСТРОЙКИ</h2>
            <p>Создавайте, контролируйте и отстаивайте свой стиль игры с новой Razer Basilisk V3 — идеальной эргономичной игровой мышью для индивидуальной настройки производительности. Благодаря 10+1 программируемым кнопкам, интеллектуальному колесу прокрутки и большой дозе Razer Chroma™ RGB пришло время зажечь конкурентов.</p>
        <h2>ИГРАЙТЕ ПО-СВОЕМУ. КАК НИКОГДА РАНЬШЕ.</h2>
            <p>10+1 ПРОГРАММИРУЕМЫЕ КНОПКИ</p>
            <p>Назначьте все свои макросы и второстепенные функции на 11 кнопок быстрого доступа, включая широко известный многофункциональный триггер, для выполнения важных действий, таких как «нажми и говори», «пинг» и т. д.</p>
        <h2>ВЫСОКАЯ ПРОФИЛЬНАЯ ПРОИЗВОДИТЕЛЬНОСТЬ.</h2>
            <p>Плавно переключайтесь между любыми пользовательскими профилями кнопок с помощью программируемой кнопки под мышью для оптимизации производительности в каждой игре и задаче.</p>
        <h2>СОВЕРШЕНСТВОВАНИЕ ПРОКРУТКИ.</h2>
            <p>КОЛЕСО НАКЛОНА RAZER™ HYPERSCROLL.
Наше последнее инновационное колесо прокрутки предлагает новый уровень функциональности, на который вы определенно можете положиться. Предлагая два типа прокрутки для большей гибкости, он также может автоматически переключаться между ними для действительно удобного использования благодаря передовой интеллектуальной функции.

</p>
        
    
  </div>
</div>

<?php include 'footer.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['counter']['mouse']++;
    $_SESSION['mouse'] = array($name, $price, $_SESSION['counter']['mouse']);
    header('Location: http://localhost/GameUp/items/cart.php');
}
?>