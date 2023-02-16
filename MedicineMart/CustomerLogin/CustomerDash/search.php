<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="icon" href="./Images/pill.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Search</title>
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
          <a class="nav-link" href="./vieworder.php" style="font-weight: bold; color: black;">View Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./customerdash.php#cont" style="font-weight: bold; color: black;">Contact Us</a>
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
</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicinemart";

$search = $_POST["search"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM medicine WHERE Medicine_Name='$search'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<body>';
  echo '<table style="border: 4px skyblue solid; padding: 10px; font-size:23px; margin: 0 auto; margin-top: 50px;">';
  echo '<tr> <th style="border: 1px skyblue solid; padding: 15px;">Medicine Name</th> <th style="border: 1px skyblue solid; padding: 15px;">Medicine Price (TK)</th> </tr>';
  while($row = $result->fetch_assoc()) {
    echo '<tr>' .'<td style="border: 1px skyblue solid; padding: 15px;">'. $row["Medicine_Name"]. "</td>". '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Medicine_Price"]. '<td style="border: 1px skyblue solid; padding: 15px;">' ."<a href='./Medicines/medicines.php'><button class='btn btn-primary'>View Details</button></a>". "</td>" . '</tr>';
    
  }
  echo "</table>";
  echo '</body>';
} else {
  echo "<h1>Nothing Found. Please search by correct medicine name</h1>";
}
$conn->close();
?>