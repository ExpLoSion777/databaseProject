<?php
  if(!isset($_POST['delete'])){
    exit('錯誤執行');
  }
  $Id = $_POST['Id'];
  include 'connect.php';
  $sql = "DELETE FROM product WHERE Id = $Id";
  if($conn->query($sql) === TRUE){
    echo "產品刪除成功";
  }else{
    echo "產品刪除失敗： " . $conn->error;
  }
  $conn->close();
  header("Refresh:1 , url = manage_product.php");
 ?>
