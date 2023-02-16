<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="companydash.css">
    <title>Company Dashboard</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-12">
            <img src="medicineback.jpg" alt="admin" class="admindash-img">
            <div class="admind-div2">
                
                <h1 class="my-adh1" style="margin-top: 100px;">Welcome To <?php echo ucfirst($_SESSION["company_name"]); ?></h1>
                <!-- <button id="btn-dlt-user" class="btn my-adbtn2 mt-3">delete user</button> <br> -->
                <a href="./InsertMedicine/insertmedicine.php"><button id="" class="btn my-adbtn3 mt-3">Insert Medicine</button></a> <br>
                <form action="./ViewMedicine/viewmedicine.php" method="POST" enctype="multipart/form-data">
                    <input type="submit" value="View Medicine" class="btn my-adbtn4 mt-3">
                </form>
                <a href="./EditMedicine/editmedicine.php"><button id="" class="btn my-adbtn4 mt-3">Edit Medicine</button></a> <br>
                <!-- <a href=""><button id="" class="btn my-adbtn5 mt-3">Manage Company</button></a> <br> -->
                <button class="btn my-adbtn1 mt-3" id="my-btn-logout">Logout</button>
            </div>
        </div>

    </div>

    <script src="companydash.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
