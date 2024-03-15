<?php 
include "../connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="../css/bootstrap.css" rel="Stylesheet">
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
</head>

<body style="background-color:bisque">
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
	
	</body>
</html>

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
