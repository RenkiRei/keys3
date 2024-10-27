<?php

require_once "../script/link.php";
require_once "../script/cookie.php";

$taskID = $_POST["task-id"];
$taskName = $_POST["task-name"];
$taskDate = $_POST["due-date"];
$arr_date = explode("-", $taskDate);
$newTaskDate = $arr_date[2]."-".$arr_date[1]."-".$arr_date[0];

$connect = mysqli_query($link, "UPDATE `tasks` SET `title`='$taskName',`date` = '$newTaskDate' WHERE `id` = $taskID AND `user` = $id");
if($connect == false){
  echo "Задача не обновилась.";
}else{
  header('Location: /index.php');
}

?>
