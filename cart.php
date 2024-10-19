<?php
session_start();
include "main.php";
include "nav.php";
include "connection.php";
if(!empty($_SESSION['Uname']) && !empty($_SESSION['Upassword']) ){
$username=$_SESSION['Uname'];

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
<script src="js/Jquery.min.js"></script>


<script>
    $(document).ready(function () {
        $(".update-form").submit(function (event) {
            event.preventDefault();

            var $form = $(this);

            var pid = $form.find("[name='pid']").val();
            var qty = $form.find("[name='qty']").val();
          

            $.ajax({
                url: 'ajx.php',
                method: 'POST',
                data: {
                    cpid:pid,
                    cqty:qty
        
                },
                success: function (response) {

                 if(response.message=="Item is Out of Stock"){
                  alert(response.message);
                  $form.find("[name='qty']").val(response.cus);
                 
                 }

                 else if(response.message=="ok"){
                  const x=response.cu;
                  document.getElementById(pid).value=x;
                  calculateTotalQuantity();
                 }

                                   
                },
                error: function (error) {
                  alert(response.message);
                  
                }
            });
        });
    });


    function calculateTotalQuantity() {
    var totalQuantity = 0;

    $(".qty-input").each(function () {
        var quantity = parseInt($(this).val()) || 0; 
        totalQuantity += quantity;
        
    });

document.getElementById("GA").textContent="Rs. "+totalQuantity;

}



function confirmCheckout() {
    if (confirm('Are you sure you want to place the order?')) {
        window.location.href = '?checkout';
    } else {
      
    }
}



</script>

</head>
<body>
<div class="container">


<?php
$sql_select="select * from cart where UserName='$username'";
$result=mysqli_query($con,$sql_select);
if(mysqli_num_rows($result)>0){
  ?>

<div class="table-responsive">
<h1 class="text-center mt-4 mb-5">My Cart</h1>
<table class="table table-light align-middle text-center" style="font-size:16pt;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
 
<thead>
<tr class="table-info">
    <th>Product</th>
    <th style="width:350px;">Product Name</th>
    <th style="width:200px;">Quantity</th>
    <th>Price</th>
    <th style="width:150px;">Amount</th>
    <th>Action</th>
</tr>
</thead>
<tbody>

<?php
 $Gamount=0;

while($data=mysqli_fetch_assoc($result)){
?>

  <tr>
    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data['Image']);?>" style="width:100px;height:100px;" class="mx-auto d-block img-fluid img-thumbnail"/></td>

    <?php
     echo "<td>".$data['Iname']."</td>
    <td>";?> 
    <form method="POST" action="" class="form-group update-form">
         <input class="form-control" type="hidden" id="pid" name="pid" value="<?php echo $data['Icode'];?>">
    <div class="row text-center">
      <div class="col-md-6 mt-1 ">
     <input class="form-control" type="number"  min="1" name="qty" id="qty" value="<?php echo $data['Quantity'];?>">
      </div>

      <div class="col-md-6">
        <input class="form-control update-btn mt-1 btn btn-info"  type="submit" name="sub" style="width:80px;" id="sub" value="Update">
      </div>
</div>
   
           
     <?php
      echo "</td>
    <td>"."Rs. ".$data['Price']."</td>
    <td>";?>
    <div class="row g-1 ">
<div class="col-auto">
<label>Rs.</label>
</div>
<div class="col-auto">
<input class="qty-input" type="text" name="va" id="<?php echo $data['Icode'];?>" value="<?php echo $data['Amount']; ?>" style="border:none;width:100px" readonly> 
</div>
    </div>
    

    <?php echo "</td>
    <td>";?><a href="?delpro=<?php echo $data['Icode'];?>&delqt=<?php echo $data['Quantity'];?>"  onclick="return confirm('Are you Sure to Remove <?php echo $data['Iname'];?> From the Cart ?')"> <img src="img/delete.png" style="width:50px;height:50px;" alt="x"></a></td>  
    </tr>
    </form>
    <?php
    $Gamount=$Gamount+$data['Amount'];
    

}
?>
  </tbody>
  </table> 
</div>

<div class="row" style="background-color:beige;">
    <div class="col-md-8 text-center">
       <label for="" class="mt-4" style="color:green;font-size:24pt;font-family: Arial, Helvetica, sans-serif;font-weight: bolder;">Grand Amount</label>
    </div>
    <div class="col-md-4 text-center">

    <div class="card  mt-3 mb-3">
          <div class="card-body p-3">

            <div class="float-end">
              <p class="mb-0 me-5 d-flex align-items-center">
                <span class="small text-muted me-2">
                <label for="" style="color:green;font-size:20pt;font-family: Arial, Helvetica, sans-serif;font-weight: bolder;" id="GA">
                <?php
       echo "Rs. ".$Gamount;
        ?>
       </label>
                </span>
                  
              </p>
            </div>

          </div>
        </div>

       
    </div>

  </div>
<div class="row text-center mt-5 mb-3">

						<div class="col-md-6">
							<a href="index.php"> <img src="img/shop.png" alt="" style="height:80px;" /></a>
						</div>
						<div class="col-md-6">
							<a href="?checkout"> <img src="img/check.png" alt="" style="height:100px;"  onclick="confirmCheckout()" /></a>
						</div>
				
</div>


</div>

</body>
</html>


<?php

}else{
  echo "<h1>Your Cart is empty</h1>";
}
 }

 if(isset($_GET['delpro'])){
    $dpid=$_GET['delpro'];
    $dqt=$_GET['delqt'];

    $sql_update="update product set Istock=Istock+$dqt where Icode='$dpid'";
    $sres=mysqli_query($con,$sql_update);

    $sql_sll="select * from product where Icode='$dpid'";
    $srll=mysqli_query($con,$sql_sll);
    $dt=mysqli_fetch_assoc($srll);
    $prc=$dt['Iprice'];

    $sql_delete="delete from cart where UserName='$username' and Icode='$dpid'";
    $dres=mysqli_query($con,$sql_delete);

    $Gamount=$Gamount-($dqt*$prc);

    if($sres && $dres){
     // echo "<script>alert('Item is removed from the cart successfully')</script>";
      echo "<script>window.location.href ='cart.php';</script>";
     
    }else{
      echo "<script>alert('sorry, could not perform the request')</script>";
      echo "<script>window.location.href ='cart.php';</script>";
    }

 }

 if(isset($_GET['checkout'])){

  $sql_select = "SELECT * FROM cart WHERE UserName = '$username'";
  $result = $con->query($sql_select);
  
  if ($result->num_rows > 0) {

      while($row = $result->fetch_assoc()) {

          $itemId = $row['Icode'];
          $qty = $row['Quantity'];
          $amount = $row['Amount'];
          $chk_date = date('Y-m-d');
          $customer = $row['UserName'];
          
          $sql_insert = "INSERT INTO `checkout` (itemId, Qty, Amount, chk_date, Customer) 
                         VALUES ('$itemId', '$qty', '$amount', '$chk_date', '$customer')";
          
          if ($con->query($sql_insert) === TRUE) {

           $sql_delete = "DELETE FROM cart WHERE UserName = '$username'";
            if ($con->query($sql_delete) === TRUE) {
              echo "<script>window.location.href = 'success.php';</script>";
            } 
         

          } 
      }
  } 
  

}









?>













