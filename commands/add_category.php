<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include realpath(dirname(__FILE__)."/resources/config.php");

$conn =  new mysqli($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($conn, $_POST['name']);
$sql = "INSERT INTO `categories` (`ID`, `name`) VALUES (NULL, '{$name}')";

mysqli_query($conn, $sql);



?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content = "IE = edge, chrome = 1">
    <title>blog.untitled</title>
  </head>

  <body>
    <h1>Add Category</h1>
    <form action = "" method ="post">
      <div>
        <label for = "name"> Name </label>
        <input type = "text" name = "name" value = "">
      </div>
      <div>
        <input type = "submit" value = "Add Category">
      </div>
    </form>
  </body>
</html>
