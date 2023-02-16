<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./companylogin.css">
    <title>Company Login</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-7">
            <img src="../medicine2.jpg" alt="header" class="adminlogin-img">
        </div>

        <div class="col-lg-5 adminlogin-header2">
            <h1 class="my-adminl-h1 mt-lg-4">Company Login</h1>

            <div class="text-center mt-4">
                <form action="./companyverify.php" method="POST">
                    <div class="form-group adminl-form1">
                        <label for="user" class="mb-2">Name</label>
                        <input required class="form-control input-sm" id="n" name="n" type="text" placeholder="Name">
                    </div>
                    <div class="form-group adminl-form2">
                        <label for="pass" class="mb-2">Password</label>
                        <input required class="form-control" id="p" name="p" type="password" placeholder="Password">
                    </div>
                    
                    <a href="../index.php"><input class="btn btn-primary mt-4" type="button" value="Back"></a>
                    <input class="btn btn-primary mt-4" type="submit" value="Login">
                    <p class="mt-4"><b>To get your login details, please contact admin</b></p>
                </form>
            </div>
            
        </div>

        <div class="adminlogin-header3">
            <h2 class="adminl-h2">Note: If you are not an employee of company, please click back</h2>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

