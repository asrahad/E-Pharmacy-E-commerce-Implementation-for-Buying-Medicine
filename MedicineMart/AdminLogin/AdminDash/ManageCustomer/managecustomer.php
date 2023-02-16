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

$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<body style="background-image:linear-gradient(darkblue, skyblue);color:white; text-align: center;">';
  //echo "<table border=1><tr><th>ID</th><th>FullName</th><th>Username</th><th>Password</th></tr>";
  // output data of each row
  echo '<h1 style="border-bottom: 3px skyblue solid; display: block; margin: 0 auto; width: 400px;">Customer Database</h1>';
  echo '<table style="border: 4px skyblue solid; padding: 10px; font-size:23px; margin: 0 auto;">';
  echo '<tr> <th style="border: 1px skyblue solid; padding: 15px;">Customer ID</th> <th style="border: 1px skyblue solid; padding: 15px;">Customer Name</th> <th style="border: 1px skyblue solid; padding: 15px;">Customer Password</th> <th style="border: 1px skyblue solid; padding: 15px;">Customer Address</th> <th style="border: 1px skyblue solid; padding: 15px;">Customer Email</th> <th style="border: 1px skyblue solid; padding: 15px;">Customer Phone</th> </tr>';
  while($row = $result->fetch_assoc()) {
    echo '<tr> <td style="border: 1px skyblue solid; padding: 15px;">' . $row["Cust_ID"]. "</td>" .'<td style="border: 1px skyblue solid; padding: 15px;">'. $row["Cust_Name"]. "</td>". '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Cust_Pass"]. "</td>". '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Cust_Address"]. "</td>" .'<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Cust_Email"]. "</td>" .'<td style="border: 1px skyblue solid;padding: 15px;">' . $row["Cust_Phone"]. "</td>" . '</tr>'. "<br>";
    
  }
  //echo "</table>";
  echo "</table>";
  echo '</body>';
} else {
  echo "0 results";
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="managecustomer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Manage Customer</title>
</head>
<body>
    
    <div class="row mt-5">

        <div class="col-lg-4 bg-dark p-3">
            <h3>Add Customer</h3>
            <form action="addcustomer.php" method="POST">
                    <div class="form-group adminl-form1">
                        <label for="" class="mb-2">Name</label>
                        <input required class="form-control input-sm" id="name" name="name" type="text" placeholder="Your Name">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Password</label>
                        <input required class="form-control" id="pw" name="pw" type="password" placeholder="Your Password">
                    </div>

                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Address</label>
                        <input required class="form-control" id="address" name="address" type="text" placeholder="Your Address">
                    </div>

                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Email</label>
                        <input required class="form-control" id="email" name="email" type="email" placeholder="Your Email">
                    </div>

                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Phone</label>
                        <input required class="form-control" id="phone" name="phone" type="text" placeholder="Your Phone">
                    </div>
                    
                    <div class="text-center">
                        <input class="btn btn-primary mt-4" type="reset" value="Reset">
                        <input class="btn btn-primary mt-4" type="submit" value="Add">
                        <p style="visibility: hidden;">dgadsgadsga</p>
                    </div>
                </form>
        </div>

        <div class="col-lg-4 bg-success p-3">
            <h3>Edit Customer</h3>
            <form action="editcustomer.php" method="POST">
                    <div class="form-group adminl-form1">
                        <label for="" class="mb-2">Existing ID</label>
                        <input required class="form-control input-sm" id="eid" name="eid" type="number" placeholder="Existing ID">
                    </div>
                    <div class="form-group adminl-form1">
                        <label for="" class="mb-2">Name</label>
                        <input required class="form-control input-sm" id="name" name="name" type="text" placeholder="Your Name">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Password</label>
                        <input required class="form-control" id="pw" name="pw" type="password" placeholder="Your Password">
                    </div>

                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Address</label>
                        <input required class="form-control" id="address" name="address" type="text" placeholder="Your Address">
                    </div>

                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Email</label>
                        <input required class="form-control" id="email" name="email" type="email" placeholder="Your Email">
                    </div>

                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Phone</label>
                        <input required class="form-control" id="phone" name="phone" type="text" placeholder="Your Phone">
                    </div>
                    
                    <div class="text-center">
                        <input class="btn btn-primary mt-4" type="reset" value="Reset">
                        <input class="btn btn-primary mt-4" type="submit" value="Edit">
                        <p style="visibility: hidden;">dgadsgadsga</p>
                    </div>
                </form>
        </div>

        <div class="col-lg-4 bg-danger p-3">
            <h3>Delete Customer</h3>
            <form action="deletecustomer.php" method="POST">
                    <div class="form-group adminl-form1">
                        <label for="" class="mb-2">Existing ID</label>
                        <input required class="form-control input-sm" id="eid" name="eid" type="number" placeholder="Existing ID">
                    </div>
                    <div class="text-center">
                        <input class="btn btn-primary mt-4" type="reset" value="Reset">
                        <input class="btn btn-primary mt-4" type="submit" value="Delete">
                        <p style="visibility: hidden;">dgadsgadsga</p>
                    </div>
                </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>