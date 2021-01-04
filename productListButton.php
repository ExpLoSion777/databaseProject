<?php
include("connect.php");

session_start();

if (isset($_POST['ToOrderList'])) {
    //add to order list
    $sql ="INSERT INTO orderlist(Id, MemberId, ProductId, ProductQuantity) values (null, $_SESSION['memberId'], $_SESSION['productId'], null)";
} else {
    //move to one product
    header("Location: one_product.php");
}
