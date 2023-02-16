<?php      
    include('admincon.php');  
    $username = $_POST['name'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from admin where Name = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            //echo "<h1><center> Login successful </center></h1>";
            echo '<script>

                    alert("Login Successful!");

                    location.href="./AdminDash/admindash.php";

                 </script>';
        }  
        else{
            
            if(empty($username)){
                echo "<h1>Username is required</h1>";
            }

            else if(empty($password)){
                echo "<h1>Password is required</h1>";
            }

            else{
                echo "<h1> Login failed. Invalid username or password.</h1>";
            }  
        }     
?>  