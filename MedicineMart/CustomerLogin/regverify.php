<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicinemart";


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

if(!empty($name)&&!empty($pw)&&!empty($address)&&!empty($email)&&!empty($phone)){
$sql = "INSERT INTO customer (Cust_Name,Cust_Pass,Cust_Address,Cust_Email,Cust_Phone)
VALUES ('".$_POST["name"]."','".$_POST["pw"]."','".$_POST["address"]."','".$_POST["email"]."','".$_POST["phone"]."')";
}
else
{
	echo "Registration failed!!!All fields are required";
	die();
}



if ($conn->query($sql) === TRUE) {
    // echo "<h1>Registration successful</h1>";
    echo "
        <script>
            alert('Registration Successful')
            location.href='./customerlogin.php';
        </script>
    ";

} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<h3>Error!!! This username is already registered. Unique username required.</h3>";
}

$conn->close();
?>