<?php
session_start();
include "connection.php";

if(isset($_GET['q'])){
  
$QT=$_GET['q'];
$cpid=$_GET['p'];

    $sql_sele="select * from product where Icode='$cpid'";
    $res=mysqli_query($con,$sql_sele);
    $da=mysqli_fetch_array($res);
    $dQTY=$da['Istock'];

    if($QT==""){
        echo "Please Enter an Amount........";
      }
      else if($QT<=0){
        echo "This is not a valid input........";
       } 
       
    elseif($QT>$dQTY){
        echo "Out of Stock........";
         
    }else{


    if(!empty($_SESSION['Uname']) && !empty($_SESSION['Upassword']) ){

       $username=$_SESSION['Uname'];
       //$cpid=$_GET['cpid'];
       //$QT=$_GET['QT'];

  $sql_update="update product set Istock=Istock-$QT where Icode='$cpid'";
  $res=mysqli_query($con,$sql_update);

  $sql_sele="select * from product where Icode='$cpid'";
  $val=mysqli_query($con,$sql_sele);
  $row=mysqli_fetch_assoc($val);
  $Iname=$row['Iname'];
  $Iprice=$row['Iprice'];
  $Amount=$Iprice*$QT;
  $Iimage=mysqli_real_escape_string($con,$row['Iimage']);

$sql_slc="select * from cart  where UserName='$username' and Icode='$cpid'";
$rsl=mysqli_query($con,$sql_slc);

if(mysqli_num_rows($rsl)==1){
  $sql_upc="update cart set Quantity=Quantity+$QT where UserName='$username' and Icode='$cpid'";
  $rvp=mysqli_query($con,$sql_upc);
  $sql_up="update cart set Amount=Price*Quantity where UserName='$username' and Icode='$cpid'";
  $rv=mysqli_query($con,$sql_up);
  echo "<span style='color:green;'>The Cart is updated</span>";
}else{


  $sql_insert="insert into cart values('$username','$cpid','$Iname','$QT','$Iprice','$Amount','$Iimage')";
  $exe=mysqli_query($con,$sql_insert);

  if($exe && $res){
    echo "<span style='color:green;'>Item Added To The Cart</span>";
  }else{
    echo "<span style='color:red;'>Sorry, Item do not added to the cart</span>";
  
   }
  }

      }else{
        echo "";
      }


    }

 }















 if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['cpid']) && isset($_POST['cqty'])) ) {

  $uname=$_SESSION['Uname'];
  $response = array();

  $productId = $_POST['cpid'];
  $quantity = $_POST['cqty'];

  $sq_select="select * from cart where Icode='$productId'and UserName='$uname'";
  $exe=mysqli_query($con,$sq_select);
  $rexe=mysqli_fetch_array($exe);
  $Cqty=$rexe['Quantity'];

  $sq_select1="select * from product where Icode='$productId'";
  $sel1=mysqli_query($con,$sq_select1);
  $rsel1=mysqli_fetch_array($sel1);
  $Nstock=$rsel1['Istock'];



if($quantity>$Nstock+$Cqty){
  $response['success'] = false;
  $response['message'] = "Item is Out of Stock";
  $response['cus'] = $Cqty;
  }elseif($quantity<=0){
    $response['success'] = false;
    $response['message'] = "Enter a valid Number";
}else{

    $sq_update1="Update product set Istock=Istock+$Cqty where Icode='$productId'";
    $up1=mysqli_query($con,$sq_update1);

    $sq_update2="Update product set Istock=Istock-$quantity where Icode='$productId'";
    $up2=mysqli_query($con,$sq_update2);

    $sq_update3="Update cart set Quantity=$quantity where Icode='$productId'and UserName='$uname'";
    $up3=mysqli_query($con,$sq_update3);

    $sq_update4="Update cart set Amount=$quantity*Price where Icode='$productId'and UserName='$uname'";
    $up4=mysqli_query($con,$sq_update4);

    $sq_select2="select * from cart where Icode='$productId'and UserName='$uname'";
    $res2=mysqli_query($con,$sq_select2);
    $dat=mysqli_fetch_array($res2);
    $amount=$dat['Amount'];

    $response['success'] = false;
    $response['message'] = "ok";
    $response['cu'] =$amount;
  
   
  }

header('Content-Type: application/json');
echo json_encode($response);
  }

  









?>