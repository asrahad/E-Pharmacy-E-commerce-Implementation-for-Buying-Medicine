<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "medicinemart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM medicine";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<body style="background-image:linear-gradient(aqua, aquamarine);color:black; text-align: center;">';
  //echo "<table border=1><tr><th>ID</th><th>FullName</th><th>Username</th><th>Password</th></tr>";
  // output data of each row
  echo '<h1 style="border-bottom: 3px darkblue solid; display: block; margin: 0 auto; width: 400px;">Medicine Database</h1>';
  echo '<table style="border: 4px darkblue solid; padding: 10px; font-size:23px; margin: 0 auto;">';
  echo '<tr> <th style="border: 1px darkblue solid; padding: 15px;">Medicine ID</th> <th style="border: 1px darkblue solid; padding: 15px;">Medicine Name</th> <th style="border: 1px darkblue solid; padding: 15px;">Medicine Type</th> <th style="border: 1px darkblue solid; padding: 15px;">Medicine Price (TK)</th> <th style="border: 1px darkblue solid; padding: 15px;">Medicine Image</th> <th style="border: 1px darkblue solid; padding: 15px;">Quantity</th> </tr>';
  while($row = $result->fetch_assoc()) {
    echo '<tr> <td style="border: 1px darkblue solid; padding: 15px;">' . $row["Medicine_ID"]. "</td>" .'<td style="border: 1px darkblue solid; padding: 15px;">'. $row["Medicine_Name"]. "</td>". '<td style="border: 1px darkblue solid; padding: 15px;">' . $row["Medicine_Type"]. "</td>" . '<td style="border: 1px darkblue solid; padding: 15px;">' . $row["Medicine_Price"]. "</td>" . '<td style="border: 1px darkblue solid; padding: 15px;">' . '<img height="200px" width="300px" src="data:image/jpeg;base64,'.base64_encode($row['Medicine_Image']).'"/>'. "</td>" . '<td style="border: 1px darkblue solid; padding: 15px;">' . $row["Quantity"]. "</td>" . '</tr>'. "<br>";
    
  }
  //echo "</table>";
  echo "</table>";
  echo '</body>';
} else {
  echo "0 results";
}
$conn->close();
?>