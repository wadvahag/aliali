<?php 

require "config/con1.php";

$id=$_POST["id"];



// $password=sha1($password);

$sql="SELECT c.name , c.qty ,c.price , c.category ,c.image FROM products c WHERE c.id=$id";


$ardyunq=mysqli_query($con,$sql);
$qanak=mysqli_num_rows($ardyunq);


if($qanak==0){

	echo "SXAL MUTQ";
}
else {

echo "<table border=1 >";
echo "<tr > <td > anun</td><td> gin </td><td>kategoria </td><td> qanak</td><td> nkar</td></tr> ";


while($tox = mysqli_fetch_assoc($ardyunq)){
echo "<tr style='width:225px;'><img style='width:225px;height:225px;' src=images/".$tox["image"]."></tr><tr><td>".$tox["name"]."</td><td>".$tox["price"]."</td><td>".$tox["category"]."</td><td>".$tox["qty"]."</td><td>".$tox["image"]."</td></tr><br/>";
}

} 
 ?>