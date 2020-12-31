<?php
  if(!isset($_POST['submit'])){
    exit('錯誤執行');
  }
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  include 'connect.php';
  $in = "INSERT INTO 'product' ('Id', 'ClickCount','Description', 'Price', 'Quantity') VALUES ('$name',0 ,'$description', '$price', '$quantity')";
  mysql_query($link, 'SET NAMES utf8');
  $result = mysql_query($link, $in);
  if(!$result){
    die('Error: ' . mysql_error());
  }else{
    echo "新增成功";
  }
  mysql_close($link);
 ?>
