<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customerdash.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="icon" href="./Images/pill.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>View Order</title>
</head>
<body>
<header id="hd">
    <nav class="navbar navbar-expand-lg navi-bar" style="background-image: linear-gradient(aqua,aquamarine);">
    <div class="container-fluid">
    <a href=""><img src="./Images/pill.png" alt="logo" width="60px" height="60px" class="ms-lg-5"></a> <strong style="color: black;">Medicine Mart</strong>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link ms-lg-5" aria-current="page" href="./customerdash.php" style="font-weight: bold; color: black;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./customerdash.php#prd" style="font-weight: bold; color: black;">All Medicine</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./customerdash.php#cont" style="font-weight: bold; color: black;">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./vieworder.php" style="font-weight: bold; color: black;">View Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../customerlogin.php" style="color: red; font-weight: bold;">Logout</a>
        </li>
        <li class="nav-item">
          <form action="./search.php" method="POST">
          <i class="fa-solid fa-magnifying-glass" style="margin-left: 20px; margin-top: 12px;"></i><input type="search" name="search" id="search" style="margin-left: 7px; width: 250px;" placeholder="Search By Medicine Name">
          <input type="submit" class="btn btn-primary">
          </form>
        </li>
      </ul>
    </div>
    </div>
    </nav>

    <h2 class="text-center mt-3">Search Order By Your Email</h2>
    <form action="" method="post" class="text-center mt-4">
        <label style="font-weight: bold;">Email:</label> <input type="email" required placeholder="Your Order Email" name="email">
        <input type="submit" name="submit" id="submit" style="background-color: darkgreen; color: white; border: none; padding: 5px; border-radius: 6px; width: 70px;">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

<?php

if(isset($_POST["submit"]))
{
    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = "medicinemart";

    $email = $_POST["email"];
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM orders WHERE Customer_Email='$email'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      echo '<body>';
      //echo "<table border=1><tr><th>ID</th><th>FullName</th><th>Username</th><th>Password</th></tr>";
      // output data of each row
      echo '<table style="border: 4px skyblue solid; padding: 10px; font-size:23px; margin: 0 auto;">';
      echo '<tr> <th style="border: 1px skyblue solid; padding: 15px;">Order ID</th> <th style="border: 1px skyblue solid; padding: 15px;">Item Name</th> <th style="border: 1px skyblue solid; padding: 15px;">Item Quantity</th> <th style="border: 1px skyblue solid; padding: 15px;">Item Price (TK)</th> <th style="border: 1px skyblue solid; padding: 15px;">Customer Name</th> <th style="border: 1px skyblue solid; padding: 15px;">Customer Phone</th> <th style="border: 1px skyblue solid; padding: 15px;">Customer Email</th> <th style="border: 1px skyblue solid; padding: 15px;">Customer Address</th> <th style="border: 1px skyblue solid; padding: 15px;">Payment Method</th> </tr>';
      while($row = $result->fetch_assoc()) {
        echo '<tr> <td style="border: 1px skyblue solid; padding: 15px;">' . $row["Order_ID"]. "</td>" .'<td style="border: 1px skyblue solid; padding: 15px;">'. $row["Item_Name"]. "</td>". '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Item_Quantity"] . '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Item_Price"]. "</td>" . '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Customer_Name"]. "</td>" . '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Customer_Phone"]. "</td>" . '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Customer_Email"]. "</td>" . '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Customer_Address"]. "</td>" . '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Payment_Method"]. "</td>" .'</tr>'. "<br>";
        
      }
      //echo "</table>";
      echo "</table>";
      echo '</body>';
    } else {
      echo "<h2 class='text-center mt-5'>No Order Found</h2>";
    }
    $conn->close();
}

?>