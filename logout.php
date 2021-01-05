<?php session_start();
  echo "帳號".$_SESSION['name']."登出成功";
  unset($_SESSION['$memberId']);
  unset($_SESSION['$name']);
  unset($_SESSION['$account']);
  unset($_SESSION['$password']);
  session_destroy();
  header("Refresh:2, url=index.php");
?>
