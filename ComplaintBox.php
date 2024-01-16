<?php

$conn=mysqli_connect('sql105.epizy.com','epiz_33014165','Nr1rcZ4xJBXynY','epiz_33014165_signup')or die(mysql_error());

$first_name=$_POST['first_name'];
$email=$_POST['email'];
$pincode=$_POST['pincode'];
$street=$_POST['street'];
$street1=$_POST['street1'];
$landmark=$_POST['landmark'];
$taluk=$_POST['taluk'];
$city=$_POST['city'];
$state_name=$_POST['state_name'];
$country=$_POST['country'];
$country_code=$_POST['country_code'];
$phone_number=$_POST['phone_number'];
$whatsapp_country_code=$_POST['whatsapp_country_code'];
$whatsapp_number=$_POST['whatsapp_number'];

$query="insert into yogx values('','$first_name','$email','$pincode','$street','$street1','$landmark','$taluk','$city','$state_name','$country','$country_code','$phone_number','$whatsapp_country_code','$whatsapp_number');";

mysqli_query($conn,$query)or die(mysql_error());
echo "<h1><center>Registration Successful</center></h1>";  
    
}
?>