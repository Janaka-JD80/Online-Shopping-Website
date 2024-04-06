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
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.php">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
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


	  <h1 class="text-center mt-3">Add Products</h1>

<div class="container mb-5 mt-5">
<b>
<form method="post" action=""  enctype="multipart/form-data">
<fieldset>

	<div class="form-row">

	<div class="form-group col-md-2">
	<label for="">Item Code:</label>
	<input type="text" class="form-control" name="Icode" id="Icode">
	</div>

	<div class="form-group col-md-8">
	<label for="">Item Name:</label>
	<input type="text" class="form-control" name="Iname"  id="Iname">
	</div>

    
	<div class="form-group col-md-8">
  	<label for="">Description:</label>
  	<textarea class="form-control" rows="5" name="Idescription"></textarea>
	</div>

	<div class="form-group  col-md-6">
	<label for="">Stock:</label>
	<input type="number" class="form-control" name="Istock" id="Istock">
	</div>         

	<div class="form-group  col-md-6">
	<label for="">Price:</label>
	<input type="number" class="form-control" name="Iprice" id="Iprice">
	</div>

    <div class="form-group  col-md-6">
	<label for="">Category:</label>
    <select class="form-select" name="Icategory">
	<?php
	$sql_select="select Category_name from category";
	$result=mysqli_query($con,$sql_select);
	while($data=mysqli_fetch_array($result)){
	echo "<option>".$data['Category_name']."</option>";
	}
	?>	  
  </select>
	</div>

	<div class="form-group  col-md-6">
	<label for="">Brand:</label>
	<input type="text" class="form-control" name="Ibrand" id="Ibrand">
	</div>



    <div class="form-group  col-md-6">
	<label for="">Image:</label>
	<input type="file" class="form-control" name="Iimage" id="Iimage">
	</div>


	</div>
	</fieldset>
	<br>
	<input type="submit"  class="btn btn-primary" name="sub" value="Add" />
	<input type="reset" class="btn btn-primary " name="res" value="Cancel" />
	</form>
	
	</b>
	</div>

  </div>
  
</div>


	
	



<?php
    if(isset($_POST['sub'])){
        $Icode=$_POST['Icode'];
        $Iname=$_POST['Iname'];
        $Idescription=$_POST['Idescription'];
        $Istock=$_POST['Istock'];
        $Icategory=$_POST['Icategory'];
        $Iprice=$_POST['Iprice'];
		$Ibrand=$_POST['Ibrand'];
		$Iimage=addslashes(file_get_contents($_FILES['Iimage']['tmp_name']));

  /* 
        echo $Icode;
        echo $Iname;
        echo $Idescription;
        echo $Istock;
        echo $Iprice;
        echo $Icategory;
		echo $Ibrand;

 */


        $sql_insert="Insert into product values('$Icode','$Iname','$Idescription','$Istock','$Iprice','$Icategory','$Ibrand','$Iimage')";
        if($result=mysqli_query($con,$sql_insert)){
        echo "<script>alert('Data inserted successfully');</script>";


         } else{
            echo "Sorry, Data not added".mysqli_error($con);   
    }
	mysqli_close($con);    

	
       
	}

?>




      
  </body>
</html>

