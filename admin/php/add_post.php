<?php
/*error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once($_SERVER["DOCUMENT_ROOT"] . "/blog.untitled/resources/init.php");



function add_post($conn, $title, $body){
  $title = mysqli_real_escape_string($conn, $title);
  $body = mysqli_real_escape_string($conn, $title);

  $sql = "INSERT INTO "

  mysqli_query($conn, $sql);
}

if isset($_POST['title'] && $_POST['body'])
  $title = trim($_POST["title"]);
  $body = trim($POST["body"]);

  if

*/
?>




<!DOCTYPE html>
<html>
<head>
  <title>blog.untitled: add_post </title>
</head>
<body>
  <h3>Add Post</h3>
  <form method = "post">
    <table>
      <tr>
        <td><label for = "title">Title</label></td>
        <td><input name = "title" id = "title"/></td>
      </tr>
      <tr>
        <td><label for = "body">Body</label></td>
        <td><input name = "body" id = "body"/></td>
      </tr>
      <tr>
        <td></td>
        <td><input type = "submit" value = "post"/></td>
      </tr>
    </table>
  </form>
</body>
</html>
