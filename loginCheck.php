<?php
require('connect.php');
/*
// Check for a cookie, if none go to login page
if (!isset($_COOKIE['session_id'])) {
    header('Location: login.php?refer=' . urlencode(getenv('REQUEST_URI')));
}
*/
// Try to find a match in the database
$guid = $_COOKIE['session_id'];
$con = mysqli_connect($servername, $username, $password);
mysqli_select_db($dbname, $con);

$query = "SELECT Id FROM member WHERE SessionId = '$guid'";
$result = mysqli_query($query, $con);

if (!mysqli_num_rows($result)) {
    // No match for guid
    header('Location: login.php?refer=' . urlencode(getenv('REQUEST_URI')));
}
