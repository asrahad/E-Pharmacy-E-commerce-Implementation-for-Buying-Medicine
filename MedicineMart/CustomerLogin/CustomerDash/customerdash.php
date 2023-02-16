
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customerdash.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="icon" href="./Images/pill.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Medicine Mart</title>
</head>
<body>
    <header id="hd">
    <nav class="navbar navbar-expand-lg navi-bar">
    <div class="container-fluid">
    <a href=""><img src="./Images/pill.png" alt="logo" width="60px" height="60px" class="ms-lg-5"></a> <strong style="color: black;">Medicine Mart</strong>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link ms-lg-5" aria-current="page" href="./customerdash.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Medicines/medicines.php">All Medicine</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#cont">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./vieworder.php">View Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../customerlogin.php" style="color: red;">Logout</a>
        </li>
        <li class="nav-item">
          <form action="./search.php" method="POST">
          <i class="fa-solid fa-magnifying-glass" style="margin-left: 20px; margin-top: 12px;"></i><input type="search" name="search" id="search" style="margin-left: 7px; width: 250px;" placeholder="Search By Medicine Name">
          <input type="submit" class="btn btn-primary">
          </form>
        </li>
      </ul>
    </div>
    </div>
    </nav>


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./Images/slide1.jpg" class="d-block w-100" alt="slide1" height="700px">
    </div>
    <div class="carousel-item">
      <img src="./Images/slide2.webp" class="d-block w-100" alt="slide2" height="700px">
    </div>
    <div class="carousel-item">
      <img src="./Images/slide3.jpg" class="d-block w-100" alt="slide3" height="700px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </header>


    <main>

        <div id="prd" class="mt-3">
            <h1 class="mt-4 text-center">List Of All Medicine</h1>
            <h1 style="border-bottom: 3px black solid; width: 100px; display: block; margin: 0 auto;"></h1>
            <br>
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
                  echo '<body>';
                  echo '<table style="border: 4px skyblue solid; padding: 10px; font-size:23px; margin: 0 auto;">';
                  echo '<tr> <th style="border: 1px skyblue solid; padding: 15px;">Medicine Name</th> <th style="border: 1px skyblue solid; padding: 15px;">Medicine Price (TK)</th> </tr>';
                   while($row = $result->fetch_assoc()) {
                    echo '<tr>' .'<td style="border: 1px skyblue solid; padding: 15px;">'. $row["Medicine_Name"]. "</td>". '<td style="border: 1px skyblue solid; padding: 15px;">' . $row["Medicine_Price"]. '<td style="border: 1px skyblue solid; padding: 15px;">' ."<a href='./Medicines/medicines.php'><button class='btn btn-primary'>View Details</button></a>". "</td>" . '</tr>';
                    
                  }
                  echo "</table>";
                  echo '</body>';
                } else {
                  echo "0 results";
                }
                $conn->close();
            ?>
    

        </div>


        <div id="cont">
        <h1 class="mt-4 text-center">Contact Us</h1>
            <h1 style="border-bottom: 3px black solid; width: 100px; display: block; margin: 0 auto;"></h1>

        <div class="row mt-3">

            <div class="col-lg-6 text-center">
                <h1 style="color: blue; margin-top: 35px;"><i class="fa-solid fa-envelope"></i></h1>
                <a href="mailto:anik@gmail.com" style="color: blue; text-decoration: none; font-weight:bold">anik@gmail.com</a>

                <h1 style="color: blue; margin-top: 35px;"><i class="fa-solid fa-phone"></i></h1>
                <a href="tel:+8801912345678" style="color: blue; text-decoration: none; font-weight:bold">+8801912345678</a>

                <h1 style="color: blue; margin-top: 35px;"><i class="fa-solid fa-location-dot"></i></h1>
                <a href="https://goo.gl/maps/HHdShcCMnP5EfibY9" target="_blank" style="color: blue; text-decoration: none; font-weight:bold">Khilgaon, Dhaka-1219</a>
            </div>

            <div class="col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29212.767279450723!2d90.43275812546503!3d23.76178519106463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b80e827f19df%3A0x9c7482b95bc6d57c!2sKhilgaon%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1673294950428!5m2!1sen!2sbd" width="90%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>


        </div>
    </main>


    <footer>
            <div class="row bg-dark text-white p-2 text-center">
                <div class="col-lg-4">

                </div>
                <div class="col-lg-4">
                    <p>Copyright &copy; 2022 by <a href="" style="color: aqua;">SouthEast University</a>. All Rights Reserved.</p>
                </div>
                <div class="col-lg-4">
                <a href="https://www.facebook.com/" style="color: white"><h1 style="font-size: 24px; text-align: center;"><i class="fa-brands fa-facebook"></i></h1></a>
                </div>
            </div>
    </footer>
    
    <script src="script.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>