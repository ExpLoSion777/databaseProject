<?php
  if(!isset($_POST['go_orderlist'])){
    exit('錯誤執行');
  }
  $mid = $_POST['Id'];
  $pid = $_POST['Id'];
  include 'connect.php';
  $sql = "INSERT INTO orderlist(Id, MemberId, ProductId) VALUES (null, '$mid', '$pid')";
  if($conn->query($sql) === TRUE){
    echo "訂單新增成功";
  }else{
    echo "訂單新增失敗";
  }
 ?>
