<?php

require_once "script/link.php";
require_once "script/cookie.php";

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создать задачу</title>
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/create.css">
</head>
<body>
  <?php
    require_once "script/header.php";
  ?>
  <div class="task-form">
        <h2>Создать задачу</h2>
        <form action="function/taskCreate.php" method="post">
            <label for="task-name">Название задачи:</label>
            <input type="text" id="task-name" name="task-name" placeholder="Введите название задачи" required>

            <label for="due-date">Выберите дату завершения:</label>
            <input type="date" id="due-date" name="due-date" required>

            <button type="submit">Создать задачу</button>
        </form>
    </div>
</body>
</html>
