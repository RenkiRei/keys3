<?php

if(isset($id) || isset($hash)){
  $profile = '
  <a href="function/exit.php"><div>Выйти</div></a>
  ';
}else{
  $profile = '
  <a href="/authorization.php"><div>Войти</div></a>
  <a href="/registration.php"><div>Регистрация</div></a>
  ';
}

echo'
<div class="header">
  <div class="site-name"><a href="/index.php">Главная</a></div>
  <div class="auth">
    '.$profile.'
  </div>
</div>';
?>
