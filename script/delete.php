<?php
  require_once "../script/link.php";
  require_once "../script/cookie.php";

  $taskid = $_GET['taskid'];

  $connect = mysqli_query($link, "DELETE FROM `tasks` WHERE `id` = $taskid AND `user` = $id");
  if($connect == false){
    echo 'Не удалось удалить данную задачу';
  }else{
    header("Location: /index.php");
  };
?>
