<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="customerregister.css">
    <title>Customer Registration</title>
</head>
<body>
    <div class="row">
        <!-- <div class="col-lg-7">
            <img src="header2.jpg" alt="header" class="adminlogin-img">
        </div> -->

        <div class="col-lg-12 adminlogin-header2">
            <h1 class="my-adminl-h1 mt-lg-1">Customer Registration</h1>

            <div class="mt-4">
                <form action="regverify.php" method="POST">
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
                        <a href="../index.php"><input class="btn btn-primary mt-4" type="button" value="Back"></a>
                        <input class="btn btn-primary mt-4" type="submit">
                        <p style="visibility: hidden;">dgadsgadsga</p>
                    </div>
                </form>
            </div>
            
        </div>

        <div class="adminlogin-header3">
            <h2 class="adminl-h2">Note: Your Password Should Be Strong</h2>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>