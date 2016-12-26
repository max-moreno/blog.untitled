<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

include($_SERVER["DOCUMENT_ROOT"] . "/blog.untitled/resources/init.php");

function add_category($conn, $name){
  $name = mysqli_real_escape_string($conn, $name);
  $sql = "INSERT INTO `categories` (`ID`, `name`) VALUES (NULL, '{$name}')";
  mysqli_query($conn, $sql);
}

function category_exists($conn, $name){
  $name = mysqli_real_escape_string($conn, $name);
  $sql = "SELECT * FROM `categories` WHERE name = '{$name}'";
  $query = mysqli_query($conn, $sql);
  if ($name = mysqli_fetch_assoc($query)){
    return $name;
  } else {
    return null;
  }
}

if (isset($_POST['name'])){
  $name = trim($_POST['name']);

  if(empty($name)){
    $error = "You must enter a category name";
  } else if ((category_exists($conn, $name)) == true){
    $error = "The category already exists";
  } else if (strlen($name) > 24){
    $error = "The category name is too long.";
  }

  if (! isset($error)){
    add_category($conn, $name);
  }
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content = "IE = edge, chrome = 1">
    <title>blog.untitled</title>
  </head>

  <body>

    <?php
      if (isset($error)){
        echo $error;
      }
    ?>

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
