<?php
  require_once "../script/link.php";
  require_once "../script/cookie.php";

  $taskName = $_POST["task-name"];
  $taskDate = $_POST["due-date"];
  $arr_date = explode("-", $taskDate);
  $newTaskDate = $arr_date[2]."-".$arr_date[1]."-".$arr_date[0];


  $connect = mysqli_query($link, "INSERT INTO `tasks`(`user`, `title`, `time`, `date`) VALUES ($id, '$taskName', ".time().", '$newTaskDate')");
  if($connect == false){
    echo "Задача не создалась";
  }else{
    header('Location: /index.php');
  }
?>
