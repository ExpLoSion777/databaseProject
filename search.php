<?php
  if(!isset($_POST['productname'])){
    echo "錯誤執行";
  }
  $name = $_POST['productname'];
  include 'connect.php';
  $sql = "SELECT * FROM product WHERE Name = '$name'";
  if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
      echo "<table>";
            echo "<tr>";
                echo "<th>產品ID</th>";
                echo "<th>產品名稱</th>";
                echo "<th>產品描述</th>";
                echo "<th>產品價格</th>";
                echo "<th>產品數量</th>";
            echo "</tr>";
      while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Id'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Description'] . "</td>";
                echo "<td>" . $row['Price'] . "</td>";
                echo "<td>" . $row['Quantity'] . "</td>";
            echo "</tr>";
      }
    }
  }else{
    echo "目前沒有這個產品";
  }
  $conn->close();
  header("Refresh:3, url = index.php");
 ?>
