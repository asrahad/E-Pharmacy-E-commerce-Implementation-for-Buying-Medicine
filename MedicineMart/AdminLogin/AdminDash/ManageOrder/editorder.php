<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicinemart";

$oid=$_POST["oid"];
$n=$_POST["n"];
$q=$_POST["q"];
$price=$_POST["price"];
$cn=$_POST["cn"];
$cp=$_POST["cp"];
$ce=$_POST["ce"];
$ca=$_POST["ca"];
$pm=$_POST["pm"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "UPDATE orders SET Item_Name='$n',Item_Quantity='$q',Item_Price='$price',Customer_Name='$cn',Customer_Phone='$cp',Customer_Email='$ce',Customer_Address='$ca',Payment_Method='$pm' WHERE Order_ID='$oid'";



if ($conn->query($sql) === TRUE) {
    echo "<h1>Order Edited</h1>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    //echo "<h3>Error!!! This username is already registered. Unique username required.</h3>";
}

$conn->close();
?>