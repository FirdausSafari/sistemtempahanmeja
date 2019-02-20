<?php
include 'config.php';

$refcode=$_POST['refcode'];
$name=$_POST['name'];
$email=$_POST['email'];
$notel=$_POST['notel'];
$bilpel=$_POST['bilpel'];
$masa=$_POST['masa'];
$tarikh=$_POST['tarikh'];

$query="insert into list (refcode,name,email,notel,bilpel,masa,tarikh) values('$refcode','$name','$email','$notel','$bilpel','$masa','$tarikh')";

if (mysqli_query($con,$query)) {
    
echo"Data berjaya direkod";
header('location:homepage.php');
}
else{
	echo"data tidak berjaya direkod";
}
?>







