<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicinemart";

$eid=$_POST["eid"];
$name=$_POST["name"];
$pw=$_POST["pw"];
$address=$_POST["address"];
$email=$_POST["email"];
$phone=$_POST["phone"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE customer SET Cust_Name='$name',Cust_Pass='$pw',Cust_Address='$address',Cust_Email='$email',Cust_Phone='$phone' WHERE Cust_ID='$eid'";

if ($conn->query($sql) === TRUE) {
  echo "<h1>Edit Successful</h1>";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>