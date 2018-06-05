<?php 
require "config/con1.php";

if(isset($_POST['btn_upload']))
{
    $filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "images/".$filename;
    
    move_uploaded_file($filetmp,$filepath);
    
$image=$filename;
$name= $_POST['name'];
$qty= $_POST['qty'];
$type= $_POST['category'];
$price= $_POST['price'];



$secure_name= mysqli_real_escape_string($con,$name);
$secure_qty= mysqli_real_escape_string($con,$qty);
$secure_type= mysqli_real_escape_string($con,$type);
$secure_price= mysqli_real_escape_string($con,$price);

$sql="INSERT INTO products(name,qty,category,price,image) VALUES ('$secure_name','$secure_qty','$secure_type','$secure_price','$image')";


if(mysqli_query($con,$sql)){

echo "Tvyalner avelavac en";
}else{

	echo "SXAL".mysqli_error($con);
}
}














 ?>