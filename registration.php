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
    <title>Регистрация</title>
    <link rel="stylesheet" href="/css/registration.css">
</head>
<body>
    <div class="registration-container">
        <h2>Регистрация</h2>
        <form action="/function/register.php" method="post">
            <div class="form-group">
                <label for="login">Логин:</label>
                <input type="text" id="login" name="login" placeholder="Введите логин" required>
            </div>
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" placeholder="Введите пароль" required>
            </div>
            <button type="submit">Зарегистрироваться</button>
        </form>
        <div class="btn-auth"><a href="authorization.php">Авторизация</a></div>
    </div>
</body>
</html>
