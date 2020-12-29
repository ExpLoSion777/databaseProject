<?php
  $title = '線上3C商城';
 ?>

<!doctype html>
<html lang ="en">
<meta charset="utf-8">
<head>
    <!---<link href="style.css" rel="stylesheet" type="text/css">---> <!-- test-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title><?php echo $title ?></title>
    <style>
        .header_side{
          font-family: "Microsoft JhengHei", sans-serif;
          font-size: 16px;
          height: 40px;
          position: absolute;
          top: 0;
          z-index: 999;
          width: 100%;
          display: flex;
          justify-content: space-between;
        }
    </style>
</head>

<header>
  <div class="header_side">
    <div class = "logo"><a href = "./index.php"><img src="./src/logo.png" alt="" width = "250px" height="40px"></div>
    <div class = "search_bar"> </div>
    <div class = "shopping_cart"><a href = "./shopping_cart.php"><img src="./src/shopping_cart.png" width = "40px" height="40px"></div>
    <div class = "signup"><a class="btn btn-primary" href="./signup.html" role="button">Signup</a></div>
    <div class = "login"><a class="btn btn-primary" href="./login.html" role="button">Login</a></div>
  </div>

  <div class="drop_side">

  </div>
</header>

<body>
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="src/test_picture1" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
    </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
  </div>
</body>
