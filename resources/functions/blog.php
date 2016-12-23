<?php
require_once("../init.php");

function add_post($title, $contents, $category) {

}

function edit_posts($id, $title, $contents, $category){

}

function add_category($name){
  $name = mysqli_real_escape_string($name);

  mysqli_query("INSERT INTO `categories` (`ID`, `name`) VALUES (NULL, '{$name}'");

}

function delete($field, $id){

}

function get_posts($id = null, $cat_id = null){

}

function get_category($id = null){

}

function catgeory_exists($id){
  $name = mysqli_real_escape_string($name);

  $query = mysqli_query("SELECT COUNT(1) FROM 'categories' WHERE 'name' = '{$name}'");

  echo mysqli_error();

  return (mysqli_fetch_field($query, 0) == "0") ? false : true;
}
?>
