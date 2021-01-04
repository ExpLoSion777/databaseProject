<?php
  session_start();
  if(!isset($_SESSION['account']) || !isset($_SESSION['password'])){
    header('Location: login.php');
  }
  header('Location: index.php');

 ?>
