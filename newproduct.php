<?php
  if(!isset($_POST['submit'])){
    exit('錯誤執行');
  }
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  $clickcount = 0;
  include 'connect.php';
  $sql = "INSERT INTO product(Id, Name , ClickCount,Description, Price, Quantity) VALUES (null,'$name',$clickcount ,'$description', $price, $quantity)";
  if($conn->query($sql) === TRUE){
    echo "產品加入成功";
  }else{
    echo "產品新增失敗";
  }
  $conn->close();
  header("Refresh:3 , url = product.php");
 ?>
