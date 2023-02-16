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
  echo '<body style="background-image:linear-gradient(darkblue, skyblue);color:white; text-align: center;">';
  //echo "<table border=1><tr><th>ID</th><th>FullName</th><th>Username</th><th>Password</th></tr>";
  // output data of each row
  echo '<h1 style="border-bottom: 3px skyblue solid; display: block; margin: 0 auto; width: 400px;">Medicine Database</h1>';
  echo '<table style="border: 4px skyblue solid; padding: 10px; font-size:23px; margin: 0 auto;">';
  echo '<tr> <th style="border: 1px skyblue solid; padding: 15px;">Medicine ID</th> <th style="border: 1px skyblue solid; padding: 15px;">Medicine Name</th> <th style="border: 1px skyblue solid; padding: 15px;">Medicine Type</th> <th style="border: 1px skyblue solid; padding: 15px;">Medicine Price (TK)</th> <th style="border: 1px skyblue solid; padding: 15px;">Medicine Image</th> <th style="border: 1px skyblue solid; padding: 15px;">Quantity</th> </tr>';
  while($row = $result->fetch_assoc()) {
    echo '<tr> <td style="border: 1px skyblue solid; padding: 15px;">' . $row["Medicine_ID"]. "</td>" .'<td style="border: 1px skyblue solid; padding: 15px;">'. $row["Medicine_Name"]. "</td>". '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Medicine_Type"]. "</td>" . '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Medicine_Price"]. "</td>" . '<td style="border: 1px skyblue solid; padding: 15px;">' . '<img height="200px" width="300px" src="data:image/jpeg;base64,'.base64_encode($row['Medicine_Image']).'"/>'. "</td>" . '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Quantity"]. "</td>" . '</tr>'. "<br>";
    
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
    <link rel="stylesheet" href="managemedicine.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Manage Medicine</title>
</head>
<body>
    
    <div class="row mt-5">

        <div class="col-lg-4 bg-dark p-3">
            <h3>Add Medicine</h3>
            <form action="addmedicine.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group adminl-form1">
                        <label for="" class="mb-2">Medicine Name</label>
                        <input required class="form-control input-sm" id="n" name="n" type="text" placeholder="Medicine Name">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Medicine Type</label>
                        <input required class="form-control" id="type" name="type" type="text" placeholder="Medicine Type">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Medicine Price</label>
                        <input required class="form-control" id="price" name="price" type="number" placeholder="Medicine Price">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Quantity</label>
                        <input required class="form-control" id="quantity" name="quantity" type="number" placeholder="Medicine Quantity">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Medicine Image</label>
                        <input required id="image" name="image" type="file" class="btn btn-primary mt-1 form-control">
                    </div>
                    <div class="text-center">
                        <input class="btn btn-primary mt-4" type="reset" value="Reset">
                        <input class="btn btn-primary mt-4" type="submit" value="Add" name="submit">
                        <p style="visibility: hidden;">dgadsgadsga</p>
                    </div>
                </form>
        </div>

        <div class="col-lg-4 bg-success p-3">
            <h3>Edit Medicine</h3>
            <form action="editmedicine.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group adminl-form1">
                        <label for="" class="mb-2">Existing ID:</label>
                        <input required class="form-control input-sm" id="eid" name="eid" type="number" placeholder="Existing Medicine ID">
                    </div>
                    <div class="form-group adminl-form1">
                        <label for="" class="mb-2">Medicine Name</label>
                        <input required class="form-control input-sm" id="n" name="n" type="text" placeholder="Medicine Name">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Medicine Type</label>
                        <input required class="form-control" id="type" name="type" type="text" placeholder="Medicine Type">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Medicine Price</label>
                        <input required class="form-control" id="price" name="price" type="number" placeholder="Medicine Price">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Quantity</label>
                        <input required class="form-control" id="quantity" name="quantity" type="number" placeholder="Medicine Quantity">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Medicine Image</label>
                        <input required id="image" name="image" type="file" class="btn btn-primary mt-1 form-control">
                    </div>
                    <div class="text-center">
                        <input class="btn btn-primary mt-4" type="reset" value="Reset">
                        <input class="btn btn-primary mt-4" type="submit" value="Edit" name="submit">
                        <p style="visibility: hidden;">dgadsgadsga</p>
                    </div>
                </form>
        </div>

        <div class="col-lg-4 bg-danger p-3">
            <h3>Delete Medicine</h3>
            <form action="deletemedicine.php" method="POST">
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