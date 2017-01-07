<?php
/*
include($_SERVER["DOCUMENT_ROOT"] . "/blog.untitled/resources/init.php");

session_start();

function login($conn, $user, $password){
  $user = mysqli_real_escape_string($conn, $user);
  $password = mysqli_real_escape_string($conn, $password);
  $check_login = mysqli_query("SELECT * FROM users WHERE Username = '{$user}' AND Password = '{$password}'")
}

if($_POST['login']){
  $user = trim($_POST['user']);
  $password = trim($_POST['password']);

  if ((empty($user) && empty($password)){
    $error = "Sorry, either your password or username was incorrect. Try again.";
  }

  if (! isset($error)){
    login($conn, $user, $password);
  }
}
*/
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content = "IE = edge, chrome = 1">
    <title>blog.untitled: Login</title>
  </head>
  <body>
    <h3>Login Page</h3>
    <p><a href= "../../index.php">Home Page</a></p>
    <p><a href = "register.php">Register</a></p>
    <form action = "" method = "post">
      <div>
        <label name = "username">Username</label>
        <input type ="text" name = "username" value = ""/>
      </div>
      <div>
        <label name = "password">Password</label>
        <input type = "text" name = "password" value ""/>
      </div>
      <div>
        <input type = "submit" value = "login"/>
      </div>
    </form>

  </body>
</html>
