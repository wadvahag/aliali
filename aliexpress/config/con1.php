<?php 

$serverianun = "localhost";
$ogtagorcox = "mysql1_user";
$gaxtnabar = "Aa123456";
$bazaianun= "shopdb";
//mysqli n kpnu m e n senc 
$con = mysqli_connect($serverianun,$ogtagorcox,$gaxtnabar,$bazaianun );
mysqli_set_charset($con, 'utf8');
if (!$con){
	die("Sxal... tvyalneri bazain hnaravor che mianal ".
	mysqli_connect_error());
	
}else{
	echo "";

}


?>