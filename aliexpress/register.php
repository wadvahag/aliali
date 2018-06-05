<?php 
session_start();
require "config/con1.php";

$login=$_POST["login"];
$password=$_POST["password"];
$age=$_POST["age"];

$secure_name= mysqli_real_escape_string($con,$login);
$secure_qty= mysqli_real_escape_string($con,$password);
$secure_type= mysqli_real_escape_string($con,$age);


// $password=sha1($password);

$sql="INSERT INTO users(login,password,age) VALUES ('$secure_name','$secure_qty','$secure_type')";

if(mysqli_query($con,$sql)){
$_SESSION["login"]=$qanak["id"];
echo "<script>window.location.href='f2.php'</script>";;
}else{

	echo "SXAL".mysqli_error($con);
}

 ?>