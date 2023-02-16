
//This function starts

$("#my-btn-logout").on("click",function(){
    var lgout=confirm("Want To Logout?")
    if(lgout==true){
        location.href="../adminlogin.php"
    }

    else{
        
    }
})

//This functions ends