<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicinemart";

$eid=$_POST["eid"];
$type=$_POST["type"];
$desc=$_POST["desc"];
$name=$_POST["name"];
$pass=$_POST["pass"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE company SET Com_Type='$type',Com_Desc='$desc',Emp_Name='$name',Emp_Pass='$pass' WHERE Com_ID='$eid'";

if ($conn->query($sql) === TRUE) {
  echo "<h1>Edit Successful</h1>";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>