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
    <div class="row" style='height: auto;'>

        <!-- Category Sidebar -->
        <div class="col-md-3 text-center" style="background-color:lightgray;">
            <h2 class="mt-3">Category</h2><br>
            <?php
            include "connection.php";
            
            // Fetch categories from the product table
            $sql_sele = "SELECT DISTINCT Icategory FROM product";
            $res = mysqli_query($con, $sql_sele);
            echo "<a href='?category=" . urlencode("all") . "' class='btn btn-outline-info' style='width:200px;color:black;font-weight:bold;' role='button'>" . "All" . "</a><br>";
            while ($row = mysqli_fetch_array($res)) {
                // Create category buttons with links that pass the category as a query parameter
                echo "<a href='?category=" . urlencode($row['Icategory']) . "' class='btn btn-outline-info' style='width:200px;color:black;font-weight:bold;margin-top:5px' role='button'>" . $row['Icategory'] . "</a><br>";
            }
            ?>
        </div>

        <!-- Carousel Section -->
        <div class="col-md-9" style="background-color:silver;">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade mt-2" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="carousal/1.jpg" class="d-block w-100" alt="...">
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

<!-- Product Display Section -->
<div class="container-fluid" style="background-color:lightgray;">
    <div class="row row-cols-1 row-cols-md-4 g-4 mt-4 mb-3">
    <?php
    include "connection.php";
    
    // Initialize the SQL query to get all products
    $sql_select = "SELECT * FROM product";
    
    // Check if a category is selected
    if (isset($_GET['category'])) {
        $category = mysqli_real_escape_string($con, $_GET['category']);

        if($category == "all"){
          $sql_select = "SELECT * FROM product";
        }else{
          $sql_select = "SELECT * FROM product WHERE Icategory = '$category'";
        }
     
       
    }
    
    // Check if a search query is present
    if (isset($_GET['search']) && !empty($_GET['search'])) {
        $search = mysqli_real_escape_string($con, $_GET['search']);
        $sql_select = "SELECT * FROM product WHERE Iname LIKE '%$search%'";
    
        // If category is also selected, filter by both category and search term
        if (isset($_GET['category'])) {
            $sql_select = "SELECT * FROM product WHERE Icategory = '$category' AND Iname LIKE '%$search%'";
        }

    }
    
    // Execute the query and display the products
    $result = mysqli_query($con, $sql_select);

    
    if (mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_array($result)) {
    ?>
        <!-- Display each product -->
        <div class="col">
            <div class="card h-100 text-center">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data['Iimage']); ?>" class="card-img-top"/>
                <h5 class="card-title" style="font-family:Arial;font-size:15pt;font-weight:bold;"><?php echo $data['Iname']; ?></h5>
                <div class="card-body">
                    <p class="card-text">
                        Price  :  Rs.<?php echo $data['Iprice']; ?><br>
                        Brand  :  <?php echo $data['Ibrand']; ?><br>
                    </p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-info btn-lg" style="color: white;" href="detail.php?pid=<?php echo $data['Icode']; ?>" role="button">View</a>
                </div>
            </div>
        </div>
    <?php
        }
    } else {
        echo "<script>window.location.href ='Home.php';</script>";
    }
    ?>
    
    </div>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
 