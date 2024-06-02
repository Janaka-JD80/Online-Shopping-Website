<?php 
include "../connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="../css/bootstrap.css" rel="Stylesheet" >

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/Jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/all.min.css">
<script src=js/dashboard.js></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
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
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Log out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
      
          <li class="nav-item">
            <a class="nav-link" href="product.php">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="brand.php">
              <span data-feather="users"></span>
              Brand
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.php">
              <span data-feather="bar-chart-2"></span>
              Category
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adlog.php">
              <span data-feather="layers"></span>
              User Account
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>
	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">


    <h1 class="text-center">Add Brand</h1>

<div class="container mb-5 mt-5" style="background-color: #BAE8E8;padding: 35px;">
<b>
<form method="post" action="" >
<fieldset>


	<div class="form-group col-md-6 col-sm-6 col-12 mx-auto d-grid gap-2 ">
	<label for="">Brand Name:</label>
	<input type="text" class="form-control" name="BName" id="BName">

	</div>

	<div class="form-group col-md-6 col-sm-6 col-12 mx-auto d-grid gap-2 ">
	<label for="">Brand No:</label>
	<input type="text" class="form-control" name="BNo" id="BNo">

	</div>
<Br></Br>
    <div class="form-group col-md-6 col-sm-6 col-12 mx-auto d-grid gap-2 ">
    <input type="submit"  class="btn btn-primary" name="sub" value="Submit" />
	</div>	

	</div>
	</fieldset>
	<br>
 
	
	</form>
	
	</b>
	</div>
	
	</body>
</html>

<?php
    if(isset($_POST['sub'])){
 
       
        $bname=$_POST['BName'];
        $bno=$_POST['BNo'];
		

        $sql_insert="Insert into brand values(' $bname', $bno)";
        if($result=mysqli_query($con,$sql_insert)){
        echo "<script>alert('Data inserted successfully');</script>";

         } else{
         echo "Sorry, Data not added".mysqli_error($con);   
    }
	mysqli_close($con);    
    }
    
   
?>




<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="js/dashboard.js"></script>  
  </body>
</html>

