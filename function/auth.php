<?php

  require_once "../script/link.php";
  if(isset($id) || isset($hash)){
    header('Location: index.php');
  }

  $login = $_POST["login"];
  $password = $_POST["password"];

  $passwordmd5 = md5($password."3434");

  $connect = mysqli_query($link,"SELECT `id`, `password` FROM `users` WHERE `login`='$login' AND `password`='$passwordmd5'");

  if(mysqli_num_rows($connect) == null){
    echo "неверный логин или пароль";
  }else{
    while($row = mysqli_fetch_assoc($connect)){
      $id = $row["id"];
      $password_user = $row["password"];
    }
    setcookie("id", $id, time()+60*60*24*30,"/");
    setcookie("hash", $password_user, time()+60*60*24*30,"/");
    header("Location:/index.php");
  }
?>
