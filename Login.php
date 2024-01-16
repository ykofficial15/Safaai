<?php      

      
$con=mysqli_connect('sql105.epizy.com','epiz_33014165','Nr1rcZ4xJBXynY','epiz_33014165_signup')or die(mysql_error());
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

    $username = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from signup where email = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("Location:Index.html") ;
            exit();
        }  
        else{  
            echo "<h1><center> Login Failed Due To Invalid Email or Password</center></h1>";  
        }     
?>  