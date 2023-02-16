<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicinemart";

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

if(!empty($type)&&!empty($desc)&&!empty($name)&&!empty($pass)){
$sql = "INSERT INTO company (Com_Type,Com_Desc,Emp_Name,Emp_Pass)
VALUES ('$type','$desc','$name','$pass')";
}
else
{
	echo "Registration failed!!!All fields are required";
	die();
}



if ($conn->query($sql) === TRUE) {
    echo "<h1>Add Successful</h1>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    //echo "<h3>Error!!! This username is already registered. Unique username required.</h3>";
}

$conn->close();
?>