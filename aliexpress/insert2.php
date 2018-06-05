<?php 
require "config/con1.php";



$name= $_POST['userID'];
$qty= $_POST['qty'];
$type= $_POST['prodID'];
$price= $_POST['price'];



$secure_name= mysqli_real_escape_string($con,$name);
$secure_qty= mysqli_real_escape_string($con,$qty);
$secure_type= mysqli_real_escape_string($con,$type);
$secure_price= mysqli_real_escape_string($con,$price);

$sql="INSERT INTO orders(userID,prodID,qty,price) VALUES ('$secure_name','$secure_qty','$secure_type','$secure_price')";


if(mysqli_query($con,$sql)){

echo "Tvyalner avecavac en";
}else{

	echo "SXAL".mysqli_error($con);
}















 ?>