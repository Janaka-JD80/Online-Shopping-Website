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
<script src="js/Jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/all.min.css">

<style>
  .form-inputs{
    position:relative;
}
.form-inputs .form-control{
    height:45px; 
}

.form-inputs .form-control:focus{
    box-shadow:none;
    border:1px solid #000;
}

.form-inputs i{
    position:absolute;
    right:10px;
    top:15px;
}
</style>


</head>
<body>
<div class="container-fluid  bg-secondary">
  <div class="row">
    <div class="col-md-2"></div>

    <div class="col-md-8 mt-3 text-end">
    <form class="d-flex" role="search" action="home.php" method="GET">
  <div class="input-group mb-3">
    <input type="text" name="search" class="form-control" placeholder="Enter the product name...." aria-describedby="button-addon2">
    <button class="btn btn-primary" type="submit" id="button-addon2">
      <i class="fa-solid fa-magnifying-glass"></i>
    </button>
  </div>
</form>

     </div>

     
    <div class="col-md-2 text-end gap-3 mt-3">
    <a href="login.php">
    <span id="cartIcon" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Login">
      <i class="fas fa-sign-in" style="font-size:30px;color:#000"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="cart.php">
   <span id="cartIcon" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cart">
    <i class="fa-solid fa-cart-shopping"style="font-size:30px;color:#000"></i></a>
   

     </div>
 
 
  
 

  </div>  
  </div>  

  

</div>
	
</body>
</html>
