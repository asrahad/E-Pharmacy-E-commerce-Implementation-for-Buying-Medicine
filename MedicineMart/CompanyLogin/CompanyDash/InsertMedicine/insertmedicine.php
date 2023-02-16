<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="insertmedicine.css">
    <title>Insert Medicine</title>
</head>
<body>
    <div class="row">
        <!-- <div class="col-lg-7">
            <img src="header2.jpg" alt="header" class="adminlogin-img">
        </div> -->

        <div class="col-lg-12 adminlogin-header2">
            <h1 class="my-adminl-h1 mt-lg-1">Insert Medicine</h1>

            <div class="mt-4">
                <form action="insertverify.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group adminl-form1">
                        <label for="" class="mb-2">Medicine Name</label>
                        <input required class="form-control input-sm" id="name" name="name" type="text" placeholder="Medicine Name">
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
                        <input class="btn btn-primary mt-4" type="reset">
                        <input class="btn btn-primary mt-4" type="submit" name="submit" value="Add">
                        <p style="visibility: hidden;">dgadsgadsga</p>
                    </div>
                </form>
            </div>
            
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>