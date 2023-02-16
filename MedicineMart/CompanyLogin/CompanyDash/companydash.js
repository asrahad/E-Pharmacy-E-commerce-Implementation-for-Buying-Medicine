$("#my-btn-logout").on("click",function(){
    var lgout=confirm("Want To Logout?")
    if(lgout==true){
        location.href="../companylogin.php"
    }

    else{
        
    }
})