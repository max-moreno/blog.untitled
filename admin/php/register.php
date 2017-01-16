<?php

  error_reporting(E_ALL);
  ini_set('display_errors', '1');

  include($_SERVER["DOCUMENT_ROOT"] . "/blog.untitled/resources/init.php");

  fucntion register($conn, $email, $username, $password){
      $email = mysqli_real_escape_string($conn, $email);
      $username = mysqli_real_escape_string($conn, $username);
      $password = mysqli_real_escape_string($conn, $password);

      $sql = "INSERT INTO 'blog'.'users' ('ID', 'email', 'username', 'password') VALUES (NULL, '{$email}', '{$username}', '{$password}')";
      mysqli_query($conn, $sql);
  }
/*
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  register($conn, $email, $username, $password);
*/
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content = "IE = edge, chrome = 1">
    <title>blog.untitled: Register</title>
  </head>
  </body>
    <h3>Register</h3>
    <p><a href = "../../index.php">Home Page</a></p>
    <p><a href = "login.php">Login</a></p>
    <form action = "" method = "Post">
      <div>
        <label name = "email">Email</label>
        <input action = "" type = "text"/>
      </div>
      <div>
        <lable name = "username">Username</label>
        <input action= "" type = "text"/>
      </div>
      <div>
        <label name = "password">Password</label>
        <input action = "" type = "text"/>
      </div>
      <div>
        <input action = "" type = "submit"/>
      </div>
    </form>
  </body>
</html>
