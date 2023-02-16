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
          <a class="nav-link" href="../vieworder.php" style="font-weight: bold; color: black;">View Order</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>






<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "medicinemart");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="medicines.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="medicines.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Medicines</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>      
      </head>  
      <body>

           <br />  
           <div class="container" style="width:700px;">  
                <h1 align="center">Medicines</h1><br />  
                <?php  
                $query = "SELECT * FROM medicine ORDER BY Medicine_ID ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="medicines.php?action=add&id=<?php echo $row["Medicine_ID"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               
                               <?php 
                                   echo '<img height="100px" src="data:image/jpeg;base64,'.base64_encode($row['Medicine_Image']).'"/>';
                               ?>  
                               <h4 class="text-success"><?php echo $row["Medicine_Name"]; ?></h4>  
                               <h4 class="text-danger">TK <?php echo $row["Medicine_Price"]; ?></h4>  
                               <input type="number" name="quantity" class="form-control" value="1" min="1"/>  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["Medicine_Name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["Medicine_Price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />
                <h3 id="od">Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>TK <?php echo $values["item_price"]; ?></td>  
                               <td>TK <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="medicines.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                              
                               <td>
                                   <?php
                                        foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                        {
                                             echo $values["item_name"]." ";
                                        }
                                   
                                   ?>
                              </td>

                              <td>
                              <?php
                                        foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                        {
                                             echo $values["item_quantity"]." ";
                                        }
                                   
                                   ?>
                              </td>

                              <td></td>

                               <td>TK <?php echo number_format($total, 2); ?></td>
                         
                               <td><a href="./checkout.php"><button class="btn btn-success">Go To Checkout</button></a></td> 
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table> 
                </div>  
           </div>  
           <br />
      </body>  
 </html>