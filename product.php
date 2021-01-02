<!DOCTYPE html>
<html lang="zh-tw">

<head>
  <meta charset="utf-8">
  <title>商品上下架</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="./css/style.css" rel="stylesheet">
  <link href="./css/product.css" rel="stylesheet">
  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<?php include 'header.php'; ?>

<body>
  <div class="wrapper">
    <div class="container">
      <form class="new_product" action="newproduct.php" method="post">
        <p>Name<input type="text" name="name"></p>
        <p>Description<input type="text" name="description"></p>
        <p>Price<input type="text" name="price"></p>
        <p>Quantity<input type="text" name="quantity"></p>
        <p><input type="submit" name="submit" value="上傳"></p>
      </form>
    </div>
  </div>
</body>
<?php include 'footer.php'; ?>

</html>