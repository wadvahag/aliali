


	<?php
	require "config/con1.php";

	session_start();

	$mutq=$_SESSION["login"];

	if(isset($mutq)){

	$getlogin="SELECT login FROM users WHERE id=$mutq";
	$popox=mysqli_query($con,$getlogin);
	$loginname=mysqli_fetch_assoc($popox);
	
	}
	else{
		
		 echo "<script>window.location.href='login.php'</script>";
	}
?>
	<!DOCcategory html>
		<html>
		<head>
			<title>shop</title>


				<script src="jquery-3.3.1.min.js"></script>
		</head>
		<style >
		body{
			background:rgba(255, 255, 225, 0.1);
		}
		center{
			color:aqua;
			position:absolute;
			left:250px;
			top:0;
			background:transparent;
		}
		p{
			color:red;	
		}
			img {
		    max-width: 100%;
		    max-height: 90%;
		}
		input, button{

			width:15vw;
			height:4vh;
			font-size:2vh;

		}
			input{
					background-color:rgba(255, 255, 225, 0.7);
			}
		#wrapper{
		width:37.7vw;
		height:64vh;
		background:darkgreen;
		}
		#wrapper div{
			width:17.6vw;
			height:29vh;
			background:silver;
			margin:1vh;
			float:left;
			border:1px solid yellow;
			
		}
		input ,button{
			position:relative;
			margin:5px;
			top:1px;
			width:45px;
		    height:35px;
		}
		span{
		color:red;

		}





		</style>
		<body>
	  <div class="video-foreground" style=" width:90%;height:70%;position:absolute; top:0;left:14vw; z-index:-150;">
      <iframe scrolling="no" src="astxikner.html" style="width:80%; height:80%; margin:0 auto; z-index:-150 " frameborder="0" allowfullscreen></iframe>
    </div>
		<center>
	
		<h1>WELCOME <div id="loginname"> 
<?php
echo $loginname["login"];
?>
</div></h1>

<h2>Uzhex xhanuti orinak a carayum hetevyal sayty</h2>
<div id="wrapper">
<?php 


	$getprice="SELECT price,id FROM products";
	$popox=mysqli_query($con,$getprice);
	while($tox=mysqli_fetch_assoc($popox)){
		
		echo "<div class='sad'><img  src='images/".$tox["id"].".jpg'><input class='qnk'  type='number'><input disabled='disabled' class='price' value=".$tox["price"]."><button class='btn' id=n".$tox["id"]." >BUY</button></div>
		
		";
		
	};

?>




	</div><br><br><br>

	<a href="f2.php?page=insert" style="display:block;">INSERT</a><br><br><br><br>
	<footer>UZHEX sayti coprightnerna linelu ste</footer>
	<script>
	var a=0;
	var b=0;	
	var c=0;
	
		
		
		
		$(".btn").click(function(){
			
			 a=$(this).parent().find('.qnk').val();
			 alert(a);
			 b=a*$(this).parent().find('.price').val();
			 c=$(this).attr('id').substring(1);

		$.post( "insert2.php", { userID: <?php echo $mutq;  ?>
		, qty: c ,prodID: a,price: b })
	  .done(function( data ) {
	    alert( "Data Loaded: " + data );
		  });
		})

		

	
	</script>
<?php
	@$v1=$_GET['page'];

	if($v1 == "insert"){


$insertp =<<<t1


	NAME: <input id="name"><br>
	QUANTITY: <input id="qty"><br>
	CATEGORY: <select style="font-size:1.2em;color:red;" id="category"><option>1-electronics</option><option>2-mobiledevices</option><option>3-office</option><option>4-cars</option></select><br>
	PRICE: <input id="price"><br>
	<button id="add"> AVELACNEL </button>

			<script>
			
			$("#add").click(function(){


						$.post("insert.php",{name: $("#name").val(),qty: $("#qty").val(),category: $("#category").val(),price:$("#price").val()},function(ardyunq){

						$("body").append(ardyunq);


					})
				})
				</script>
t1;

	echo $insertp."</center>";

	}
	?>
  

<div id="tuynmas2" style="overflow-y:scroll; width:350px;  height:850px;
position:absolute; left:925px;top:25px; border:5px inset orange;"><p>Tvyalner bazaic sexmeq cankacac nkari vra texekanalu hamar inchpes e aun pahvac bazayum</p>



</div>

<script>
	

  



$("#sad").on("dblclick",function(){	
var t=$(this).attr('id').substring(1);	
	
$.post("stugum.php", {id:t},
function(ardyunq){

tuynmas2.innerHTML+=ardyunq;

})
})

	


</script>






</body></html>


		