<?php
$title = '線上3C商城';
?>

<!doctype html>
<html lang="zh-TW">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="./css/index.css" rel="stylesheet">
  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

  <title><?php if (isset($title)) {
            echo $title;
          } ?></title>
</head>
<?php include "loginCheck.php"; ?>
<?php include 'header.php'; ?>
<div class="wrapper">
  <div class="menu">
    <div class="menu_bar">
      <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SSD
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">威剛</a>
          <a class="dropdown-item" href="#">三星</a>
          <a class="dropdown-item" href="#">美光</a>
        </div>
      </div>
      <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          顯示卡
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">Asus</a>
          <a class="dropdown-item" href="#">Gigabyte</a>
          <a class="dropdown-item" href="#">Msi</a>
        </div>
      </div>
      <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          記憶體
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">金士頓</a>
          <a class="dropdown-item" href="#">美光</a>
          <a class="dropdown-item" href="#">科賦</a>
        </div>
      </div>
      <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          主機板
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">Asus</a>
          <a class="dropdown-item" href="#">Gigabyte</a>
          <a class="dropdown-item" href="#">Msi</a>
        </div>
      </div>
    </div>

    <div class="layout">
      <div class="newest_photo">
        <!--改成最新上架的商品-->
        <a href="product.php"><img src="img/nvd_3080.png" alt="">
          <div class="intro">
            目前最新上架的商品，
          </div>
        </a>
      </div>
      <div class="hottest_photo">
        <!--改成最暢銷的商品,star-->
        <a href="product.php"><img src="img/keyboard.png" alt="">
          <div class="intro">
            目前最熱銷的商品，
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>