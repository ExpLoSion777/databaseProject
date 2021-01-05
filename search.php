<!DOCTYPE html>
<html lang="zh-tw">

<head>
  <meta charset="utf-8">
  <title>商品搜尋結果</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <link href="./css/style.css" rel="stylesheet">
  <link href="./css/search.css" rel="stylesheet">
</head>
<?php include 'header.php'; ?>
  <body>
    <div class="wrapper">
      <div class="container">
        <div class="searchproduct">
          <?php
            $name = $_POST['productname'];
            if($name == ''){
              echo "請輸入商品名稱";
              header("Location: index.php");
            }
            include 'connect.php';
            $sql = "SELECT * FROM product Where Name LIKE '$name%'";
            if($result = mysqli_query($conn, $sql)){
              if(mysqli_num_rows($result) > 0){
                echo "<table>";
                      echo "<tr>";
                          echo "<th>賣家ID</th>";
                          echo "<th>產品ID</th>";
                          echo "<th>產品名稱</th>";
                          echo "<th>產品描述</th>";
                          echo "<th>產品價格</th>";
                          echo "<th>產品數量</th>";
                      echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                      echo "<form action='new_orderlist.php' method = 'post'><tr>";
                          echo "<td>" . $row['MemberId'] . "</td>";
                          echo "<td>" . $row['Id'] . "</td>";
                          echo "<td>" . $row['Name'] . "</td>";
                          echo "<td>" . $row['Description'] . "</td>";
                          echo "<td>" . $row['Price'] . "</td>";
                          echo "<td>" . $row['Quantity'] . "</td>";
                          echo "<td>
                                  <input type='button' value='加入訂單' name='go_orderlist'>
                                </td>";
                      echo "</form></tr>";
                }
              }
              else{
                echo "無此名稱相似的產品";
                header("Refresh:1 url=index.php");
              }
            }else{
              echo "query錯誤";
            }
            $conn->close();
            exit();
          ?>
        </div>
      </div>
    </div>
  </body>

<?php include 'footer.php'; ?>
