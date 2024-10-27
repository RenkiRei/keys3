<?php

  require_once "script/link.php";
  require_once "script/cookie.php";

  $taskid = $_GET['taskid'];

  $connect = mysqli_query($link, "SELECT `title`, `date` FROM `tasks` WHERE `user` = $id AND `id` = $taskid");
  if(mysqli_num_rows($connect) == null){
    header('Location:index.php');
  }else{
    while($row = mysqli_fetch_assoc($connect)){
      $taskTitle = $row['title'];
      $taskDate = $row['date'];
    }
  }
echo'
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменить задачу</title>
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/create.css">
</head>
<body>';

  require_once "script/header.php";
  echo'
  <div class="task-form">
        <h2>Изменить задачу</h2>
        <form action="function/taskUpdate.php" method="post">
            <input type = "text" name="task-id" style = "display: none" value = "'.$taskid.'">
            <label for="task-name">Название задачи:</label>
            <input type="text" id="task-name" name="task-name" value="'.$taskTitle.'" placeholder="Введите название задачи" required>

            <label for="due-date">Выберите дату завершения:</label>
            <input type="date" id="due-date" name="due-date" value="'.$taskDate.'" required>

            <button type="submit">Изменить</button>
        </form>
    </div>
</body>
</html>';
?>
