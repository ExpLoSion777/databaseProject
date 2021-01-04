<?php
include("connect.php");

$name = $_POST['username'];
$email = $_POST['email'];
$account = $_POST['account'];
$pw = $_POST['password'];
$pw2 = $_POST['passwordConfirm'];
$address = $_POST['address'];
$phoneNumber = $_POST['phoneNumber'];
$birthday = $_POST['birthday'];
$sex = $_POST['sex'];
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if ($name != null && $pw != null && $pw2 != null && $pw == $pw2) {
    //新增資料進資料庫語法
    $sql = "INSERT INTO member(Id, Name, Account, Password, PhoneNumber, Address, Sex,Birthday ,Email) values (null, '$name', '$account', '$pw', $phoneNumber, '$address', '$sex','$birthday','$email')";
    if ($conn->query($sql)) {
        echo '新增成功!';
        echo '
<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    } else {
        echo '新增失敗!';
        echo '
<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    }
} else {
    echo '您無權限觀看此頁面!';
    echo '
<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
