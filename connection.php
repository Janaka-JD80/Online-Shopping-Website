<?php

$con=mysqli_connect("localhost","root","","dbshop");

/*
if($con){
    echo "Connected successfully!";
}else{
    echo "Sorry, not connected";
}
*/

if(!$con){
    die("conecction failed".mysqli_connect_error());
}

?>
