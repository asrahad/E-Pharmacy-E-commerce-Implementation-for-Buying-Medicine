<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicinemart";

$iname = $_POST["iname"];
$iquan = $_POST["iquan"];
$iprice = $_POST["iprice"];
$n = $_POST["n"];
$p = $_POST["p"];
$e = $_POST["e"];
$ad = $_POST["ad"];
$pm = $_POST["pm"];
//$crd = $_POST["crd"];
//$cvc = $_POST["cvc"];
//$c = $_POST["c"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



    $sql = "INSERT INTO orders (Item_Name,Item_Quantity,Item_Price,Customer_Name,Customer_Phone,Customer_Email,Customer_Address,Payment_Method)
    VALUES ('$iname','$iquan','$iprice','$n','$p','$e','$ad','$pm')";

    $sql2 ="UPDATE medicine SET Quantity=Quantity-'$iquan' WHERE Medicine_Name='$iname'";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Your order has been placed successfully')
                location.href='./medicines.php';
  </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

if($conn->query($sql2) === TRUE){
  
}

$conn->close();



?>