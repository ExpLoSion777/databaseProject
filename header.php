<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="./css/header.css" rel="stylesheet">
  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <title><?php if (isset($title)) {
            echo $title;
          } ?></title>


</head>

<div class="header_side">
  <div class="logo">
    <a href="./index.php">
      <img src="./img/logo.png" alt="" width="250px" height="40px">
    </a>
  </div>
  <form class="search" action="search.php" method="post">
    <input type="text" placeholder="Search" name="productname">
    <button type="submit">搜尋</button>
  </form>
  <div class="productlist"><a class="btn btn-primary" href="./orderlist.php" role="button">查看目前訂單</a></div>
  <div class="productlist"><a class="btn btn-primary" href="./product.php" role="button">商品列表</a></div>
  <div class="shopping_cart"><a href="./shopping_cart.php">購物車<img src="./img/shopping_cart.png" width="40px" height="40px"></div>
  <div class="manageproduct"><a class="btn btn-primary" href="./manage_product.php" role="button">管理商品</a></div>
  <div class="register"><a class="btn btn-primary" href="./register.php" role="button">註冊</a></div>
  <div class="login"><a class="btn btn-primary" href="./login.php" role="button">登入</a></div>
</div>
