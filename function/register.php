<?php
  require_once "../script/link.php";

  if(isset($id) || isset($hash)){
    header('Location: index.php');
  }

  $login = $_POST["login"];
  $password = $_POST["password"];

  $passwordmd5 = md5($password."3434");

  $connect = mysqli_query($link,"SELECT `id` FROM `users` WHERE `login`='$login'");

  if(mysqli_num_rows($connect) != null){
    echo "такой пользователь уже существует.";
  }else{
    $connect_insert = mysqli_query($link,"INSERT INTO `users`(`login`, `password`, `date`) VALUES ('$login','$passwordmd5',".time().")");
    if($connect_insert != false){
      $connectID = mysqli_query($link, "SELECT `id`, `password` FROM `users` WHERE `login` = '$login' AND `password` = '$passwordmd5'");
      if(mysqli_num_rows($connectID) == null){
        header("Location:/authorization.php");
      }else{
        while($row = mysqli_fetch_assoc($connectID)){
          $id = $row["id"];
          $password_user = $row["password"];
        }
        setcookie("id", $id, time()+60*60*24*30,"/");
        setcookie("hash", $password_user, time()+60*60*24*30,"/");
        header("Location:/index.php");
      }
    }
  }
?>
