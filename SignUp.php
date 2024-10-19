<?php 
include "main.php";
include "nav.php";
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="css/bootstrap.css" rel="Stylesheet" >
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</head>

<body style="background-color:bisque">
<h1 class="text-center">Member Registartion</h1>

<div class="container mb-5 mt-5">
<b>
<form method="post" action="" >
<fieldset>
	<div class="form-row">
	<div class="form-group col-md-6">
	<label for="">Full Name:</label>
	<input type="text" class="form-control" name="FullName" id="FullName">
	<span id="uname"></span>
	</div>

	<div class="form-group col-md-8">
  	<label for="">Address:</label>
  	<textarea class="form-control" rows="5" name="Address"></textarea>
	<span id="uaddress"></span>
	</div>

	<div class="form-group col-md-4">
	<label for="">Telephone:</label>
	<input type="text" class="form-control" name="Telephone" id="Telephone" maxlength="10" >
	<span id="utelephone"></span>
	</div>

	<div class="form-group  col-md-6">
	<label for="">E-Mail:</label>
	<input type="email" class="form-control" name="Email" id="Email">
	<span id="uemail"></span>
	</div>

	<div class="form-group  col-md-6">
	<label for="">User Name:</label>
	<input type="text" class="form-control" name="UserName" id="UserName">
	<span id="uusername"></span>
	</div>

	<div class="form-group col-md-6">
	<label for="">Password:</label>
	<input type="password" class="form-control" name="Password" id="Password">
	<span class id="upassword"></span>
	</div>

	<div class="form-group col-md-6">
	<label for="">Confirm Password:</label>
	<input type="password" class="form-control"name="RePassword" id="RePassword">
	<span id="upassword"></span>
	</div>	
	</div>
	</fieldset>
	<br>
	<input type="submit"  class="btn btn-primary" name="sub" value="Submit" />
	<input type="reset" class="btn btn-primary " name="res" value="Reset" />
	</form>
	
	</b>
	</div>
	
	</body>
</html>

<?php
    if(isset($_POST['sub'])){
        $FullName=$_POST['FullName'];
        $Address=$_POST['Address'];
        $Telephone=$_POST['Telephone'];
        $Email=$_POST['Email'];
        $UserName=$_POST['UserName'];
        $Pasword=$_POST['Password'];
		$rePasword=$_POST['RePassword'];


  if($Pasword==$rePasword){
	$simple_string = $Pasword;  
	$ciphering = "AES-128-CTR";  
	$iv_length = openssl_cipher_iv_length($ciphering);
	$options = 0; 
	$encryption_iv = '1234567891011121';
	$encryption_key =$UserName; 
	$encryption = openssl_encrypt($simple_string, $ciphering,
            $encryption_key, $options, $encryption_iv);
			$Pasword=$encryption;



        $sql_insert="Insert into user values('$FullName','$Address','$Telephone','$Email','$UserName','$Pasword','User')";
        if($result=mysqli_query($con,$sql_insert)){
        echo "<script>alert('Data inserted successfully');</script>";




         } else{
            echo "Sorry, Data not added".mysqli_error($con);   
    }
	mysqli_close($con);    
}else{
	echo "Passwords Do not match";
}
       
 
    }
?>
