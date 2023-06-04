<?php 
session_start();
if (!isset($_COOKIE['email'])) {
    header("Location: http://localhost/GameUp/GameUpRegistration/index.php?");
}
?>
</div>
<footer>
  <div class="container">
    made by @KOPIBARIK & @axel_skl & @vsevolodbegletsov

  </div>
</footer>

</body>
</html>
