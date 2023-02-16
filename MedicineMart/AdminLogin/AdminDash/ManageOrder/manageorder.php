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

$sql = "SELECT * FROM orders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<body style="background-image:linear-gradient(darkblue, skyblue);color:white; text-align: center;">';
  //echo "<table border=1><tr><th>ID</th><th>FullName</th><th>Username</th><th>Password</th></tr>";
  // output data of each row
  echo '<h1 style="border-bottom: 3px skyblue solid; display: block; margin: 0 auto; width: 400px;">Order Database</h1>';
  echo '<table style="border: 4px skyblue solid; padding: 10px; font-size:23px; margin: 0 auto;">';
  echo '<tr> <th style="border: 1px skyblue solid; padding: 15px;">Order ID</th> <th style="border: 1px skyblue solid; padding: 15px;">Item Name</th> <th style="border: 1px skyblue solid; padding: 15px;">Item Quantity</th> <th style="border: 1px skyblue solid; padding: 15px;">Item Price (TK)</th> <th style="border: 1px skyblue solid; padding: 15px;">Customer Name</th> <th style="border: 1px skyblue solid; padding: 15px;">Customer Phone</th> <th style="border: 1px skyblue solid; padding: 15px;">Customer Email</th> <th style="border: 1px skyblue solid; padding: 15px;">Customer Address</th> <th style="border: 1px skyblue solid; padding: 15px;">Payment Method</th> </tr>';
  while($row = $result->fetch_assoc()) {
    echo '<tr> <td style="border: 1px skyblue solid; padding: 15px;">' . $row["Order_ID"]. "</td>" .'<td style="border: 1px skyblue solid; padding: 15px;">'. $row["Item_Name"]. "</td>". '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Item_Quantity"] . '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Item_Price"]. "</td>" . '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Customer_Name"]. "</td>" . '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Customer_Phone"]. "</td>" . '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Customer_Email"]. "</td>" . '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Customer_Address"]. "</td>" . '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Payment_Method"]. "</td>" .'</tr>'. "<br>";
    
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
    <title>Manage Order</title>
</head>
<body>
    
    <div class="row mt-5">

        <div class="col-lg-4 bg-dark p-3">
            <h3>Add Order</h3>
            <form action="./addorder.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group adminl-form1">
                        <label for="" class="mb-2">Item Name</label>
                        <input required class="form-control input-sm" id="n" name="n" type="text" placeholder="Item Name">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Item Quantity</label>
                        <input required class="form-control" id="q" name="q" type="text" placeholder="Item Quantity">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Item Price</label>
                        <input required class="form-control" id="price" name="price" type="text" placeholder="Item Price">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Customer Name</label>
                        <input required class="form-control" id="cn" name="cn" type="text" placeholder="Customer Name">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Customer Phone</label>
                        <input required class="form-control" id="cp" name="cp" type="text" placeholder="Customer Phone">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Customer Email</label>
                        <input required class="form-control" id="ce" name="ce" type="email" placeholder="Customer Email">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Customer Address</label>
                        <input required class="form-control" id="ca" name="ca" type="text" placeholder="Customer Address">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Payment Method</label>
                        <input required class="form-control" id="pm" name="pm" type="text" placeholder="Payment Method">
                    </div>
                    <!-- <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Medicine Image</label>
                        <input required id="image" name="image" type="file" class="btn btn-primary mt-1 form-control">
                    </div> -->
                    <div class="text-center">
                        <input class="btn btn-primary mt-4" type="reset" value="Reset">
                        <input class="btn btn-primary mt-4" type="submit" value="Add" name="submit">
                        <p style="visibility: hidden;">dgadsgadsga</p>
                    </div>
                </form>
        </div>

        <div class="col-lg-4 bg-success p-3">
            <h3>Edit Order</h3>
            <form action="./editorder.php" method="POST" enctype="multipart/form-data">
            <div class="form-group adminl-form1">
                        <label for="" class="mb-2">Existing Order ID</label>
                        <input required class="form-control input-sm" id="oid" name="oid" type="number" placeholder="Order ID">
                    </div>
                    <div class="form-group adminl-form1">
                        <label for="" class="mb-2">Item Name</label>
                        <input required class="form-control input-sm" id="n" name="n" type="text" placeholder="Item Name">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Item Quantity</label>
                        <input required class="form-control" id="q" name="q" type="text" placeholder="Item Quantity">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Item Price</label>
                        <input required class="form-control" id="price" name="price" type="text" placeholder="Item Price">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Customer Name</label>
                        <input required class="form-control" id="cn" name="cn" type="text" placeholder="Customer Name">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Customer Phone</label>
                        <input required class="form-control" id="cp" name="cp" type="text" placeholder="Customer Phone">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Customer Email</label>
                        <input required class="form-control" id="ce" name="ce" type="email" placeholder="Customer Email">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Customer Address</label>
                        <input required class="form-control" id="ca" name="ca" type="text" placeholder="Customer Address">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Payment Method</label>
                        <input required class="form-control" id="pm" name="pm" type="text" placeholder="Payment Method">
                    </div>
                    <!-- <div class="form-group adminl-form2">
                        <label for="" class="mb-2">Medicine Image</label>
                        <input required id="image" name="image" type="file" class="btn btn-primary mt-1 form-control">
                    </div> -->
                    <div class="text-center">
                        <input class="btn btn-primary mt-4" type="reset" value="Reset">
                        <input class="btn btn-primary mt-4" type="submit" value="Edit" name="submit">
                        <p style="visibility: hidden;">dgadsgadsga</p>
                    </div>
                </form>
        </div>

        <div class="col-lg-4 bg-danger p-3">
            <h3>Cancel Order</h3>
            <form action="deleteorder.php" method="POST">
                    <div class="form-group adminl-form1">
                        <label for="" class="mb-2">Existing Order ID</label>
                        <input required class="form-control input-sm" id="eid" name="eid" type="number" placeholder="Order ID">
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