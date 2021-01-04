<?php
require("connect.php");

$account = $_POST['account'];
$password = $_POST['password'];

if ($account == '' || $password == '') {
    header("Location:login.php?refer=" . urlencode($_POST['refer']));
} else {
    $sql = "SELECT * FROM member WHERE Account =  '$account' AND Password = '$password'";
    $data = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($data);

    session_start();
    $_SESSION['id'] = $user['Id'];
    $_SESSION['name'] = $user['Name'];
    $_SESSION['account'] = $user['Account'];
    $_SESSION['password'] = $user['Password'];

    header('Location: check.php');
}
