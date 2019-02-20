<?php

$host= localhost;
$user= root;
$password=;
$dbname= tmb1;

$con=  mysqli_connect($host, $user, $password, $dbname);

if(!$con){
    echo 'failed';
}
else{
    echo 'connected';
}
?>

