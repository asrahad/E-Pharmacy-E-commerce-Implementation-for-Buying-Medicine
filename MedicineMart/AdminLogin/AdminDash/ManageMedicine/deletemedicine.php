<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicinemart";

$eid=$_POST["eid"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM medicine WHERE Medicine_ID='$eid'";

if ($conn->query($sql) === TRUE) {
  echo "<h1>Delete Successful</h1>";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>