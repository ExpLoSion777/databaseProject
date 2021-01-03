<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname) or die("無法開啟sql資料庫");

if ($conn->connect_error) {
  die("連線錯誤： " . $conn->connect_error);
}
/*else{
  echo "資料庫 $dbname 連線成功";
}*/
