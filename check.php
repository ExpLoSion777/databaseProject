<?php
  session_start();
  if(!isset($_SESSION['account']) || !isset($_SESSION['password'])){
    echo "帳號密碼錯誤，請重新輸入";
    header('Refresh:2, url=login.php');
  }else{
    echo "帳號登入成功，兩秒後回到首頁";
    header('Refresh:2, url=index.php');
  }
 ?>
