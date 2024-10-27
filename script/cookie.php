<?php

$id = $_COOKIE['id'];
$hash = $_COOKIE['hash'];

$connect = mysqli_query($link,"SELECT `id` FROM `users` WHERE `id` = $id AND `password` = '$hash'");
if(mysqli_num_rows($connect) == null){
  setcookie("id", "", time()-3600, "/");
  setcookie("hash", "", time()-3600, "/");
  header('Location:/authorization.php');
}else{}

?>
