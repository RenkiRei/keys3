<?php
require_once "script/link.php";
require_once "script/cookie.php";
$connect = mysqli_query($link, "SELECT `id`, `title`, `time`, `date` FROM `tasks` WHERE `user` = $id");
if(mysqli_num_rows($connect) == null){

}else{
  $result;
  while($row = mysqli_fetch_assoc($connect)){
    $taskId = $row['id'];
    $taskTitle = $row['title'];
    $taskTime = date("d-m-Y", $row['time']);
    $taskDate = $row['date'];

    $result = $result.'
    <div class="task">
        <h2 class="task-title">'.$taskTitle.'</h2>
        <p class="task-info"><strong>Дата создания:</strong>'.$taskTime.'</p>
        <p class="task-info"><strong>Срок выполнения:</strong>'.$taskDate.'</p>
        <div class="task-buttons">
            <a href = "update.php?taskid='.$taskId.'"><button class="btn-edit">Изменить</button></a>
            <a href = "script/delete.php?taskid='.$taskId.'"><button class="btn-delete">Удалить</button></a>
        </div>
    </div>';
  }
};
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задачи</title>
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/header.css">
</head>
<body>';

    require_once "script/header.php";

    echo '
    <div class = "container">
      <div class = "container-center">
        <div class = "container-page">
          <a href = "create.php"><div class = "btn-page">Создать задачу</div></a>
        </div>
        <div class="task-container">
          '.$result.'
        </div>
      </div>
    </div>
</body>
</html>';
?>
