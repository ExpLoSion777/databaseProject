<!DOCTYPE html>
<html lang="zh-tw">

<head>
  <meta charset="utf-8">
  <title>商品上下架</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <link href="./css/product.css" rel="stylesheet">
</head>
<?php include 'header.php'; ?>

<body>
  <div class="wrapper">
    <div class="container">
      <form class="new_product" action="newproduct.php" method="post">
        <p>新增產品的名稱：<input type="text" name="name"></p>
        <p>新增產品的描述：<input type="text" name="description"></p>
        <p>新增產品的價格：<input type="text" name="price"></p>
        <p>新增產品的數量：<input type="text" name="quantity"></p>
        <p><input type="submit" name="insert" value="新增"></p>
      </form>
      <form class="delete_product" action="deleteproduct.php" method="post">
        <p>要刪除的產品ID為：<input type="text" name = "Id"></p>
        <p><input type="submit" name="delete" value="刪除"></p>
      </form>
      <form class="modify_product" action="modifyproduct.php" method="post">
        <p>目前修改的產品ID為：<input type="text" name = "Id"></p>
        <p>要修改的名字為：<input type="text" name = "name"></p>
        <p>要修改的描述為：<input type="text" name="description"></p>
        <p>要修改的價格為：<input type="text" name="price"></p>
        <p>要修改的數量為：<input type="text" name="quantity"></p>
        <p><input type="submit" name="modify" value="修改"></p>
      </form>
    </div>
  </div>
</body>
<?php include 'footer.php'; ?>

</html>
