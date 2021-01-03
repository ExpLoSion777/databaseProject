<?php
  if(!isset($_POST['modify'])){
    exit('錯誤執行');
  }
  $Id = $_POST['Id'];
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  include 'connect.php';
  $sql = "UPDATE product SET Name = '$name',Description= '$description', Price=$price, Quantity=$quantity WHERE Id = $Id";
  if($conn->query($sql) === TRUE){
    echo "產品修改成功";
  }else{
    echo "產品修改失敗" . $conn->error;
  }
  $conn->close();
  header("Refresh:1 , url = manage_product.php");
 ?>
