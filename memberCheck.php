<?php
require("connect.php");

$account = $_POST['account'];
$password = $_POST['password'];

if ($account == '' || $password == '') {
    header("Location:login.php?refer=" . urlencode($_POST['refer']));
} else {
    // Authenticate user
    $con = mysqli_connect($servername, $username, $password);
    mysqli_select_db($dbname, $con);

    $query = "SELECT Id, MD5(UNIX_TIMESTAMP() + Id + RAND(UNIX_TIMESTAMP()))
        guid FROM member WHERE Account = '$account' AND Password = password('$password')";

    $result = mysqli_query($query, $con)
        or die('Error in query');

    if (mysqli_num_rows($result)) {
        $row = mysqli_fetch_row($result);
        // Update the user record
        $query = "UPDATE member SET guid = '$row[1]' WHERE Id = $row[0]";

        mysqli_query($query, $con)
            or die('Error in query');

        // Set the cookie and redirect
        // setcookie( string name [, string value [, int expire [, string path
        // [, string domain [, bool secure]]]]])
        // Setting cookie expire date, 6 hours from now
        $cookieexpiry = (time() + 21600);
        setcookie("session_id", $row[1], $cookieexpiry);

        if (empty($refer) || !$refer) {
            $refer = 'index.php';
        }

        header('Location: ' . $refer);
    } else {
        // Not authenticated
        header('Location: login.php?refer=' . urlencode($refer));
    }
}
