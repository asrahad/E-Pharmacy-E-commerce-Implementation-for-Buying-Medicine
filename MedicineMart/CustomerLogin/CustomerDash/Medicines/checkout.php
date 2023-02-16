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
    <nav class="navbar navbar-expand-lg navi-bar" style="background-image: linear-gradient(aqua,aquamarine);">
    <div class="container-fluid">
    <a href=""><img src="../Images/pill.png" alt="logo" width="60px" height="60px" class="ms-lg-5"></a> <strong style="color: black;">Medicine Mart</strong>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link ms-lg-5" aria-current="page" href="../customerdash.php" style="font-weight: bold; color: black;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./medicines.php" style="font-weight: bold; color: black;">All Medicine</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../customerdash.php#cont" style="font-weight: bold; color: black;">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../customerlogin.php" style="color: red; font-weight: bold;">Logout</a>
        </li>
        <li class="nav-item">
          <form action="../search.php" method="POST">
          <i class="fa-solid fa-magnifying-glass" style="margin-left: 20px; margin-top: 12px;"></i><input type="search" name="search" id="search" style="margin-left: 7px; width: 250px;" placeholder="Search By Medicine Name">
          <input type="submit" class="btn btn-primary">
          </form>
        </li>
        <li class="nav-item">
          <a href="./medicines.php#od"><img src="../Images/cart.png" alt="Cart" height="40px" width="40px" style="margin-left: 50px;"></a>
        </li>
      </ul>
    </div>
    </div>
    </nav>


    <h1 class="text-center">Checkout Page</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>




<?php

session_start();

?>

<form action="./placeorder.php" method="POST">
    <table class="table table-striped w-50 m-auto text-center" style="box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2), 0px 6px 12px 0px rgba(0, 0, 0, 0.19); border-radius: 5px;">
        <tr>
            <td>Item Names</td>
            <td>
            
                <input type="text" required name="iname" value="<?php  foreach($_SESSION["shopping_cart"] as $keys => $values) { echo $values["item_name"]. " " ; } ?>">
                
            </td>
            <td> </td>
        </tr>
        <tr>
            <td>Item Quantity</td>
            <td>
                 
                <input type="text" required name="iquan" value="<?php foreach($_SESSION["shopping_cart"] as $keys => $values) { echo $values["item_quantity"]." " ; } ?>">
               
            </td>
            <td> </td>
        </tr>
        <tr>
            <td>Item Price</td>
            <td>
                 
                <input type="text" required name="iprice" value="<?php foreach($_SESSION["shopping_cart"] as $keys => $values) { echo $values["item_price"]." " ; } ?>">
               
            </td>
            <td> </td>
        </tr>
        <tr>
          <td>Your Name</td>
          <td><input type="text" name="n" placeholder="Name" required></td>
          <td> </td>
        </tr>
        <tr>
          <td>Your Phone</td>
          <td><input type="number" name="p" placeholder="Phone" required></td>
          <td> </td>
        </tr>
        <tr>
          <td>Your Email</td>
          <td><input type="email" name="e" placeholder="Email" required></td>
          <td> </td>
        </tr>
        <tr>
          <td>Your Address</td>
          <td><textarea name="ad" cols="22" rows="1" placeholder="Address" required></textarea></td>
          <td> </td>
        </tr>
        <tr>
          <td>Payment Method</td>
          <td><input type="radio" name="pm" id="cod" checked value="Cash On Delivery">Cash On Delivery <input type="radio" id="c" name="pm" value="Card">Card</td>
          <td> </td>
        </tr>
        <tr>
          <td>(If Card)</td>
          <td><input type="number" name="crd" id="crd" required placeholder="Card Number"> <input type="number" name="cvc" id="cvc" required placeholder="CVC" ></td>
          <td><input id="po" type="submit" value="Place Order" style="background-color: black; color: white; border-radius: 4px;"></td>
        </tr>
    </table>
    <p class="text-center mt-3" id="error"></p>
    <p class="text-center mt-3" id="error2"></p>
</form>

<script>

  var crd = document.querySelector("#crd")
  var cvc = document.querySelector("#cvc")
  crd.disabled=true
  cvc.disabled=true


  document.querySelector("#c").addEventListener("click",function(){
    if(crd.disabled==true && cvc.disabled==true){
      crd.disabled=false
      cvc.disabled=false
    }
  })


                                                                                                                               
  var po = document.querySelector("#po")
  po.disabled=false
  var error = document.querySelector("#error")

  crd.addEventListener("keyup",function(){
    if(crd.value.length==16)
    {
      error.innerHTML="Card Number Ok"
      error.style.color="green"
      po.disabled=false
      po.style.backgroundColor="black"
    }
    else{
      error.innerHTML="Please provide a valid Card Number"
      error.style.color="red"
      po.disabled=true
      po.style.backgroundColor="red"
    }
  })



  var error2 = document.querySelector("#error2")
  cvc.addEventListener("keyup",function(){
    if(cvc.value.length==3)
    {
      error2.innerHTML="CVC Ok"
      error2.style.color="green"
      po.disabled=false
      po.style.backgroundColor="black"
    }
    else{
      error2.innerHTML="Please provide a valid CVC"
      error2.style.color="red"
      po.disabled=true
      po.style.backgroundColor="red"
    }
  })



  document.querySelector("#cod").addEventListener("click",function(){

    crd.disabled=true
    cvc.disabled=true
    po.disabled=false
    po.style.backgroundColor="black"

  })



</script>