<?php
session_start();
include "main.php";
include "nav.php";
include "connection.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="css/bootstrap.css" rel="Stylesheet" >
<link href="css/bootstrap.min.css" rel="Stylesheet" >
<link rel="stylesheet" href="css/all.min.css">
<script src="js/jquery.js"></script>
<script src="js/Jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<style>
	body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #B0BEC5;
    background-repeat: no-repeat;
}

.card0 {
    box-shadow: 0px 4px 8px 0px #757575;
    border-radius: 0px;
}

.card2 {
    margin: 0px 40px;
}

.logo {
    width: 200px;
    height: 100px;
    margin-top: 20px;
    margin-left: 35px;
}

.image {
    width: 360px;
    height: 280px;
}

.border-line {
    border-right: 1px solid #EEEEEE;
}

.facebook {
    background-color: #3b5998;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer;
}

.twitter {
    background-color: #1DA1F2;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer;
}

.linkedin {
    background-color: #2867B2;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer;
}

.line {
    height: 1px;
    width: 45%;
    background-color: #E0E0E0;
    margin-top: 10px;
}

.or {
    width: 10%;
    font-weight: bold;
}

.text-sm {
    font-size: 14px !important;
}

::placeholder {
    color: #BDBDBD;
    opacity: 1;
    font-weight: 300
}

:-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

::-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

input, textarea {
    padding: 10px 12px 10px 12px;
    border: 1px solid lightgrey;
    border-radius: 2px;
    margin-bottom: 5px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px;
}

input:focus, textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #304FFE;
    outline-width: 0;
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0;
}

a {
    color: inherit;
    cursor: pointer;
}

.btn-blue {
    background-color: #1A237E;
    width: 150px;
    color: #fff;
    border-radius: 2px;
}

.btn-blue:hover {
    background-color:#1A237E;
    cursor: pointer;
}

.bg-blue {
    color: #fff;
    background-color: #1A237E;
}

@media screen and (max-width: 991px) {
    .logo {
        margin-left: 0px;
    }

    .image {
        width: 300px;
        height: 220px;
    }

    .border-line {
        border-right: none;
    }

    .card2 {
        border-top: 1px solid #EEEEEE !important;
        margin: 0px 15px;
    }
}
</style>
</head>
<body>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row">
                        <img src="img/m.png" class="logo">
                    </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                        <img src="img/lg.png" class="image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h3 class="mb-0 mr-4 mt-2">Sign in to your account</h3>
                      
                    </div>
                    <br>
<form method="post" action="">
                    <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">User Name</h6></label>
                        <input class="mb-4" type="text" name="txtusername" placeholder="Enter the User Name">
                    </div>
                    <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">Password</h6></label>
                        <input type="password"  name="txtpassword" placeholder="Enter password">
                    </div>
                   <br>
                    <div class="row mb-3 px-3">
                        <button type="submit" name="sub" class="btn btn-blue text-center">Login</button>
                    </div>
</form>
					<br>
                    <div class="row mb-4 px-3">
                        <h6 class="font-weight-bold text-center">Don't have an account? <a class="text-danger" href="SignUp.php" style="text-decoration: none;">Register Here.....</a></h6>
                    </div>
                </div>
            </div>
        </div>
		
        <div class="bg-blue py-4">
            <div class="row px-3">
		
                <div class="social-contact ml-4 ml-sm-auto">
                    <span class="fa-brands fa-facebook"></span>&nbsp;
                    <span class="fa-brands fa-google"></span>&nbsp;
                    <span class="fa-brands fa-square-twitter"></span>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<?php

if(isset($_POST['sub'])){
$username=$_POST['txtusername'];
$password=$_POST['txtpassword'];
if(!($username=="" || $password=="")){

$decryption_iv = '1234567891011121';
$decryption_key = $username;  

$sql_select="select * from user where UserName='$username'";
$result=mysqli_query($con,$sql_select);
$data=mysqli_fetch_assoc($result);
$dUname=$data['UserName'];
$dPassword=$data['Password'];

$encryption=$dPassword;			
$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0; 
$encryption_iv = '1234567891011121';
$decryption=openssl_decrypt ($encryption, $ciphering, 
$decryption_key, $options, $decryption_iv);
$dPassword=$decryption;

if($password==$dPassword && $username==$dUname){
	$_SESSION["Uname"]=$dUname;
	$_SESSION["Upassword"]=$dPassword;
	echo "<script>window.location.href ='Home.php'</script>";
	

}else{
	echo "<p style='color:red;'>Incorect username or password!</p>";
}
}else{
	echo "<p style='color:red;'>Fields cannot be empty!</p>";
}

}

 if(isset($_POST['su'])){
	session_unset();
	session_destroy();
}

?>

