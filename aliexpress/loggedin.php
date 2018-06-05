<?php 
session_start();
require "config/con1.php";

$login=$_POST["login"];
$password=$_POST["password"];

$login=mysqli_real_escape_string($con,$login);
$password=mysqli_real_escape_string($con,$password);


// $password=sha1($password);

$sql="SELECT id FROM users WHERE login='$login' AND password='$password' ";


$ardyunq=mysqli_query($con,$sql);
$qanak=mysqli_fetch_assoc($ardyunq);


if($qanak==0){

	echo "SXAL MUTQ";
}
else {
$_SESSION["login"]=$qanak["id"];
echo "<script>window.location.href='f2.php'</script>";

} 
 ?>