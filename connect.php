<?php
$link = mysqli_connect('localhost', 'root', '123456') or die("無法開啟sql資料庫");

$dbname = "project";

if (!mysqli_select_db($link, $dbname)){
  die("無法開啟 $dbname 資料庫連結!<br/>");
}
else{
  echo "資料庫: $dbname 開啟成功!<br/>";
}
mysqli_close($link);
?>
