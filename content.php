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
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">

        <div class="col-md-3 text-center" style="background-color:lightgray;">
        <h2 class="mt-3">Category</h2><br>
        <?php
        include "connection.php";
        $sql_sele="select * from product";
        $res=mysqli_query($con,$sql_sele);
        while($row=mysqli_fetch_array($res)){
         echo"<a href='' class='btn btn-outline-info' style='width:200px;color:black;font-weight:bold'; role='button'>".$row['Icategory']."</a>"."<br>";
        }
 

  
        ?>

        </div>


    <div class="col-md-9" style="background-color:silver;">
       
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade mt-2 " data-bs-ride="carousel"  >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="carousal/1.jpg" class="d-block w-100"   alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="carousal/2.jpg" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="carousal/3.jpg" class="d-block w-100" alt="..." >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 
    </div>
    </div>
</div>

<div class="container-fluid" style="background-color:lightgray;">
<div class="row row-cols-1 row-cols-md-4  g-4 mt-4 mb-3">
<?php

$sql_select="select * from product";
$result=mysqli_query($con,$sql_select);
while($data=mysqli_fetch_array($result)){
 
?>
  
  <div class="col">
    <div class="card h-100 text-center">
    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data['Iimage']); ?>" class="card-img-top"/> 
    <h5 class="card-title" style="font-family:Arial;font-size:15pt;font-weight:bold;"><?php echo $data['Iname'];?></h5>
    <div class="card-body">
      <p class="card-text">
        Price  :  Rs.<?php echo $data['Iprice'];?> <br>
        Brand  :  <?php echo $data['Ibrand'];?> <br>

      </p>
      </div>
      <div class="card-footer">
      <a class="btn btn-info btn-lg" style="color: white;" href="detail.php?pid=<?php echo $data['Icode']; ?>" role="button">View</a>
      </div>
    </div>
  </div>


<?php
}

?>
</div>

</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
