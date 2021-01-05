<?php
  session_start();
  if(!isset($_POST['insert'])){
    exit('錯誤執行');
  }
  $mid = $_SESSION['memberId'];
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  $clickcount = 0;
  include 'connect.php';
  $sql = "INSERT INTO product(Id, MemberId, Name, Description, Price, Quantity) VALUES (null, $mid,'$name','$description', $price, $quantity)";
  if($conn->query($sql) === TRUE){
    echo "產品新增成功";
  }else{
    echo "產品新增失敗" . $conn->error;
  }
  $conn->close();
  header("Refresh:1 , url = manage_product.php");
 ?>
