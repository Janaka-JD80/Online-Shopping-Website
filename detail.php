<?php
session_start();
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
<script>
  
function VaCart() {

const x= document.getElementById("QTY").value;
const y= document.getElementById("hid").value;
const z=document.getElementById("hidd").value;


if(window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		}
		else
		{
			xmlhttp=new ActiveXObject("Microsoft.XMLHttp");
		}

  xmlhttp.open("GET", "ajx.php?q=" + encodeURIComponent(x)+"&p="+encodeURIComponent(y), true);

	xmlhttp.send();
	xmlhttp.onreadystatechange=function()
	{
  
	if(xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("val").innerHTML=xmlhttp.responseText;
    document.getElementById("QTY").value="";

  if(xmlhttp.responseText==""){
   window.location.href ='login.php';
     
    }
  }

}  
}
</script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-4 mt-5">

<?php

if(isset($_GET['pid'])){
$pid=$_GET['pid'];

$sql_select="select * from product where Icode='$pid'";
$result=mysqli_query($con,$sql_select);

while($data=mysqli_fetch_array($result)){ 

?> 

<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data['Iimage']); ?>" style="width:400px;height:400px;" class="mx-auto d-block img-fluid img-thumbnail"/> 
</div> 

<div class="col-md-8 mt-5" style="font-size: 18pt;">
    <h1 class="text-md-center" style="color:crimson;"><?php echo $data['Iname'];?></h1>
    <br>
 <div class="row text-md-center ">
 

  <p class="text-middle">Price  :  <span class="" style="color:crimson">Rs.<?php echo $data['Iprice'];?> </span> </p> 
      <p class="text-middle">Brand  : <span class="" style="color:crimson"><?php echo $data['Ibrand'];?> </span> </p>
      <p class="text-middle">Category  :  <span class="" style="color:crimson"><?php echo $data['Icategory'];?> </span> </p>
    
      <span class="">
      
      <form class="form-group"  method="post" action="" >
<div class="form-row ">
<div class="form-group">
<p class="" style="font-weight: bold;">Quantity  :
        <input class="form-control align-content-center" type="number" id="QTY" name="QTY" style="border-radius:20px;border-color:darkgreen;">
        <input class="form-control" type="hidden" id="hid" name="hid" value="<?php echo $data['Icode']; ?>">
        <input class="form-control" type="hidden" id="hidd" name="hidd" value="<?php echo $data['Istock']; ?>">
      
</div>
</div>
<label for=""  id="val" name="va" style="color:tomato;font-size:12pt;font-weight: bold;"></label> 
     </p>
</span>
 
      
    
  

   
     
    <button class="btn bg-success btn-lg me-2"  type="button"  name="sub" style="color:white;font-weight: bold;" onclick="VaCart()">ADD TO CART</button>
   
    
   
    </form>  
 <!-- </div>  -->
    
</div>
</div>
 

<div class="row mb-4">
<br><br>
  <div class="col-md-12 "></div>
    <h1 class="text-center mt-1" style="background-color:cornflowerblue;color:blueviolet;font-weight: bold;border-radius:25px;">Description</h1>

   <p class="mt-" style="font-family: Arial, Helvetica, sans-serif;font-weight:500;"> <?php echo nl2br($data['Idescription']);?></p>
</div>

<?php

  }
}

?>
</div>
</div>
</body>
</html>

<?php
include "footer.php";
?>

    