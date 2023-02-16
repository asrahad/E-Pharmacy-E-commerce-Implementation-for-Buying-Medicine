<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicinemart";


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


$sql = "INSERT INTO orders(Item_Name,Item_Quantity,Item_Price,Customer_Name,Customer_Phone,Customer_Email,Customer_Address,Payment_Method) VALUES ('$n','$q','$price','$cn','$cp','$ce','$ca','$pm')";



if ($conn->query($sql) === TRUE) {
    echo "<h1>Order Added</h1>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    //echo "<h3>Error!!! This username is already registered. Unique username required.</h3>";
}

$conn->close();
?>