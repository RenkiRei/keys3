<?php

  if(isset($id) || isset($hash)){
    header('Location: index.php');
  }

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма авторизации</title>
    <link rel="stylesheet" href="/css/authorization.css">
</head>
<body>
    <div class="auth-container">
        <h2>Авторизация</h2>
        <form action="/function/auth.php" method="post">
            <label for="login">Логин</label>
            <input type="text" id="login" name="login" required>

            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Войти</button>
        </form>
        <div class="btn-reg"><a href="registration.php">Регистрация</a></div>
    </div>
</body>
</html>
