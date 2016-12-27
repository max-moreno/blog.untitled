<?php

include($_SERVER["DOCUMENT_ROOT"] . "/blog.untitled/resources/init.php");

session_start();


function login($conn, $user, $password){
  $user = mysqli_real_escape_string($conn, $user);
  $password = mysqli_real_escape_string($conn, $password);

}

if($_POST['login_button']){
  $user = trim($_POST['user']);
  $password = trim($_POST['password']);

  if ((empty($user) or empty($password)){
    $error = "Sorry, either your password or username was incorrect. Try again.";
  }

  if (! isset($error)){
    login($conn, $user, $password);
  }
}


?>
