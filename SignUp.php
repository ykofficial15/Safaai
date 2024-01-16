<?php

$conn=mysqli_connect('sql105.epizy.com','epiz_33014165','Nr1rcZ4xJBXynY','epiz_33014165_signup')or die(mysql_error());
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="select * from signup where (email='$email');";

      $res=mysqli_query($conn,$sql);

      if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
        if($email==isset($row['email']))
        {
            echo "<h1><center>Someone Already Registered With This Email</center></h1>";  
    
        }
		}
else{
$query="insert into signup values('','$name','$email','$password');";
mysqli_query($conn,$query)or die(mysql_error());
echo "<h1><center>Registration Successful</center></h1>";  
    
}

?>