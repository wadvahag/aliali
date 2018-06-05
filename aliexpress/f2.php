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
					<link rel="stylesheet" type="text/css" href="style.css">
			</head>
		
			<body>
			
				<center>
					<header>
						<div class="govazd"><a><img alt=""></div>

     <div class="prodavel"> FOR ADDING A NEW PRODUKT PUT THE CURSOR ON ME 
			<div class="mutqagrum">
			    <form action="insert.php" method="post" enctype="multipart/form-data">
			    	<br><br><br>
				Product NAME: <input style="width:100px;" id="name" name="name"><br><br>
				QUANTITY: <input style="width:100px;" id="qty" name="qty"><br><br>
				CATEGORY: <select style="width:100px;" style="font-size:1.2em;color:red;" id="category" name="category"><option>1-electronics</option><option>2-mobiledevices</option><option>3-office</option><option>4-cars</option></select><br><br>
				PRICE: <input  id="price" name="price"><br> <br>  
				IMAGE: <input  id="prodimg" type="file" name="file_img" /><br><br>
				
			<input  style="width:100px;" type="submit" id="addbtn" name="btn_upload" value=" + Add +"> 
			</form>
</div>
</div>
	<div class="navhead">
		<a href="#">Buyer Protection</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<div class="dropdown">
	  <button class="dropbtn">HELP</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <div class="dropdown-content">
	    <a href="#">Customer Service</a>
	    <a href="#">Disputes & Reports</a>
	    <a href="#">Report IPT infringment</a>
	  </div>
	</div>
	<a href="#"><img src="images/heraxos.png" width="15px" height="20px" alt=" ">Save big on app!</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="#">Snip to <img src="images/usa.png" width="15px" height="15px" alt=" "> / USD  </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="#"> &nbsp&nbsp Language  &nbsp&nbsp </a>

	</div>









	<div class="head2">
	<div class="logo"></div>
	<div class="searchbox"> <input id="search" /><a href="#"><img src="images/searchlogo.png " width="49px" height="42px"> </a></div>

	<div class="zavrap"> 
	<div class="cart"><img width="49px" height="42px" src="images/cart.png"><div id="price2">0</div><br><p> &nbsp CART</p></div>
	<div class="favorites"><img width="49px" height="42px" src="images/wishlist.png">WISH<br>LIST</div>
	<div class="login"><img width="49px" height="42px" src="images/login.png"> <p> <b> Welcome <?php
echo $loginname["login"];
?><br>My AliExpress</p></div>
	</div>

	<br><div class="linker"><a href="#">Memory CArd number one 1 &nbsp &nbsp </a><a href="#">Huawei pip 10 &nbsp &nbsp </a><a href="#">skirt and MINI SKIRT for kids sml   &nbsp &nbsp </a><a href="#">night glasses SSIL </a>

	</div>

	</header>

	<div class="glavni"><br>
	<p style="text-align:left;"><b> CATEGORIES</b><a href="#"> &nbsp See All</a> &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp <a href="#"> <b>Brand Zone</b></a>&nbsp &nbsp &nbsp &nbsp &nbsp<a href="#"> <b>Flash Deals</b></a><a href="#"> &nbsp &nbsp &nbsp &nbsp &nbsp<b> 5$ Deals </b></a><a href="#">&nbsp &nbsp &nbsp &nbsp &nbsp <b>LIVE</b></a></p>
	<div class="sidebar1">
		
		<ul>
			<div class="ls1">
	 <div class="lists"><div class="menudiv"> <div class="menud1"><b><a href="#"> Hot Categories </a></b><hr><p><a href="#"> Dresses </a></p><p><a href="#"> Hoodies & Sweatshirts </a></p><p><a href="#"> Blouses & Shirts </a></p><p><a href="#"> T-Shirts </a></p><p><a href="#"> Sweaters </a></p><p><a href="#"> Socks & Hoslery </a></p><b> Bottoms </b><hr><p><a href="#"> Skirts </a></p><p><a href="#"> Leggings </a></p><p><a href="#"> Jeans </a></p><p><a href="#"> Pants & Capris </a></p><p><a href="#"> Wide Leg Pants </a></p><p><a href="#"> Shorts </a></p></div><div class="menud2"><b> Outwear & Jackets </b><hr><p><a href="#"> Basic Jackets </a></p><p><a href="#"> Real fur </a></p><p><a href="#"> Down Coats </a></p><p><a href="#"> Blazers </a></p><p><a href="#"> Trench </a></p><p><a href="#"> Parkas </a></p><b> Tops & Sets </b><hr><p><a href="#"> Tank Tops</a></p><p><a href="#"> Suits & Sets </a></p><p><a href="#"> Jumpsuits </a></p><p><a href="#"> Rompers </a></p><p><a href="#"> Intimates </a></p><p><a href="#"> Sleep & Lounge </a></p></div><div class="menud3"><b> Weddings & Events </b><hr><p><a href="#"> Wedding Dresses </a></p><p><a href="#"> Evening Dresses </a></p><p><a href="#"> Prom Dresses </a></p><p><a href="#"> Bridesmaid Dresses</a></p><b> Flower Girl Dresses </b><hr><p><a href="#"> Cocktail Dresses </a></p><p><a href="#"> Accessories </a></p><p><a href="#"> Eyewear & Accessories </a></p><p><a href="#"> Hats & Caps </a></p><p><a href="#"> Belds & Cummerburds </a></p><p><a href="#"> Scarves & Wraps </a></p><p><a href="#"> Gloves & Mittens </a></p><p><a href="#"> Prescriprtion Glasses </a></p></div><div class="menud4"> <img src="images/mi1.png"></div><div class="menud5"><img src="images/mni1.png"></div></div>	</div><li><img src="images/woman.png "><a href="#">Womans Clothing</a></li>	</div>
					<div class="ls1">
	 <div class="lists"><div class="menudiv"> <div class="menud1"><b> Hot Sale </b><hr><p><a href="#"> Hoodies & Sweatshirts </a></p><p><a href="#"> Jackets </a></p><p><a href="#"> T-Shirts </a></p><p><a href="#"> Shirts </a></p><p><a href="#"> Sweaters </a></p><p><a href="#"> Socks </a></p><b> Bottoms </b><hr><p><a href="#"> Casual Pants </a></p><p><a href="#"> Cargo Pants </a></p><p><a href="#"> Jeans </a></p><p><a href="#"> Sweatpants </a></p><p><a href="#"> Harem Pants </a></p><p><a href="#"> Shorts </a></p></div><div class="menud2"><b> Outerwear & Jackets </b><hr><p><a href="#"> Trench </a></p><p><a href="#"> Genuine Leather </a></p><p><a href="#"> Parkas  </a></p><p><a href="#"> Down JAckets </a></p><p><a href="#"> Wooold & Blends </a></p><p><a href="#"> Suits & Blazer </a></p><b> Underwear & Laungewear </b><hr><p><a href="#"> Boxer </a></p><p><a href="#"> Briefs </a></p><p><a href="#"> Long Johns </a></p><p><a href="#"> Mens Sleep & Launge </a></p><p><a href="#"> Pajama sets </a></p><p><a href="#"> Robes </a></p></div><div class="menud3"><b> Accessories </b><hr><p><a href="#"> Scarves </a></p><p><a href="#"> Skullies & Beanies </a></p><p><a href="#"> Prescription Glasses </a></p><p><a href="#"> Gloves & Mittens </a></p><p><a href="#"> Belts </a></p><p><a href="#"> Bomber Hats </a></p><p><a href="#"> Fedoras </a></p><p><a href="#"> Berets </a></p><p><a href="#"> Baseball Caps </a></p><b> Novelty & Special User </b><hr><p><a href="#"> Cosplay Costumes </a></p><p><a href="#"> Stage & Dance Wear </a></p><p><a href="#"> Exotic Apparel </a></p></div><div class="menud4"> <img src="images/mi2.png"></div><div class="menud5"><img src="images/mni2.png"></div></div>	</div><li><img src="images/man.png"><a href="#">Mens Clothing</a></li></div>
					<div class="ls1">
	 <div class="lists"><div class="menudiv"> <div class="menud1"><b> Mobile Phones </b><hr><p><a href="#"> Octa Core </a></p><p><a href="#"> Deca Core </a></p><p><a href="#"> Single Sim-Card </a></p><p><a href="#"> Dual Sim-Card </a></p><p><a href="#"> 4GB RAM </a></p><p><a href="#"> 5.5Inch </a></p><b> Mobile-Phone Parts </b><hr><p><a href="#"> Mobile phone LCDs </a></p><p><a href="#"> Mobile Phone Batteries </a></p><p><a href="#"> Mobile Phone Housing </a></p><p><a href="#"> Mobile Phone Touch Panel </a></p><p><a href="#"> Flex CAbles </a></p><p><a href="#"> Sim-card & Tools </a></p></div><div class="menud2"><b> Cases & Covers </b><hr><p><a href="#"> Wallet Cases </a></p><p><a href="#"> Waterproof Cases </a></p><p><a href="#"> Leather Cases  </a></p><p><a href="#"> Silicon Cases </a></p><p><a href="#"> Flip Cases</a></p><p><a href="#">  </a></p> <p><a href="">I-phone-X Cases</a></p><p><a href="#"> Cases for IPhone 8/8 plus </a></p><p><a href="#"> Cases for IPhone 7/7 plus </a></p><p><a href="#"> Cases for IPhone 6/6 plus </a></p><p><a href="#"> Galaxy S8 Cases </a></p><p><a href="#"> Galaxy S7 Cases </a></p><p><a href="#"> Xiaomi Cases </a></p><p><a href="#"> Huawei Cases </a></p></div><div class="menud3"><b> Mobile-Phone-Accessories </b><hr><p><a href="#"> Power Bank </a></p><p><a href="#"> Screen Protectors </a></p><p><a href="#"> Mobile-Phone Cases </a></p><p><a href="#"> Mobile-Phone Chargers </a></p><p><a href="#"> Holders & Stands </a></p><p><a href="#"> Mobile-Phone Lences </a></p><p><a href="#"> Hot Categories </a></p><p><a href="#"> Car chargers </a></p><p><a href="#"> Quick chargers </a></p><b> IPhone cables </b><hr><p><a href="#"> Type-C CAbles </a></p><p><a href="#"> 20000 mAH Power Bank </a></p><p><a href="#"> Battery Charger Cases </a></p></div><div class="	menud4"> <img src="images/mi3.png"></div><div class="menud5"><img src="images/mni3.png"></div></div>	</div><li><img src="images/phone.png"><a href="#">Cellphones % Accessoires</a></li></div>
					<div class="ls1">
	 <div class="lists"><div class="menudiv"> <div class="menud1"><b> Hot Sale </b><hr><p><a href="#"> Hoodies & Sweatshirts </a></p><p><a href="#"> Jackets </a></p><p><a href="#"> T-Shirts </a></p><p><a href="#"> Shirts </a></p><p><a href="#"> Sweaters </a></p><p><a href="#"> Socks </a></p><b> Bottoms </b><hr><p><a href="#"> Casual Pants </a></p><p><a href="#"> Cargo Pants </a></p><p><a href="#"> Jeans </a></p><p><a href="#"> Sweatpants </a></p><p><a href="#"> Harem Pants </a></p><p><a href="#"> Shorts </a></p></div><div class="menud2"><b> Outerwear & Jackets </b><hr><p><a href="#"> Trench </a></p><p><a href="#"> Genuine Leather </a></p><p><a href="#"> Parkas  </a></p><p><a href="#"> Down JAckets </a></p><p><a href="#"> Wooold & Blends </a></p><p><a href="#"> Suits & Blazer </a></p><b> Underwear & Laungewear </b><hr><p><a href="#"> Boxer </a></p><p><a href="#"> Briefs </a></p><p><a href="#"> Long Johns </a></p><p><a href="#"> Mens Sleep & Launge </a></p><p><a href="#"> Pajama sets </a></p><p><a href="#"> Robes </a></p></div><div class="menud3"><b> Accessories </b><hr><p><a href="#"> Scarves </a></p><p><a href="#"> Skullies & Beanies </a></p><p><a href="#"> Prescription Glasses </a></p><p><a href="#"> Gloves & Mittens </a></p><p><a href="#"> Belts </a></p><p><a href="#"> Bomber Hats </a></p><p><a href="#"> Fedoras </a></p><p><a href="#"> Berets </a></p><p><a href="#"> Baseball Caps </a></p><b> Novelty & Special User </b><hr><p><a href="#"> Cosplay Costumes </a></p><p><a href="#"> Stage & Dance Wear </a></p><p><a href="#"> Exotic Apparel </a></p></div><div class="menud4"> <img src="images/mi4.png"></div><div class="menud5"><img src="images/mni4.png"></div></div>	</div><li><img src="images/computer.png"><a href="#">Computer, Office, Security</a></li></div>
					<div class="ls1">
	 <div class="lists"><div class="menudiv"> <div class="menud1"><b> Hot Sale </b><hr><p><a href="#"> Hoodies & Sweatshirts </a></p><p><a href="#"> Jackets </a></p><p><a href="#"> T-Shirts </a></p><p><a href="#"> Shirts </a></p><p><a href="#"> Sweaters </a></p><p><a href="#"> Socks </a></p><b> Bottoms </b><hr><p><a href="#"> Casual Pants </a></p><p><a href="#"> Cargo Pants </a></p><p><a href="#"> Jeans </a></p><p><a href="#"> Sweatpants </a></p><p><a href="#"> Harem Pants </a></p><p><a href="#"> Shorts </a></p></div><div class="menud2"><b> Outerwear & Jackets </b><hr><p><a href="#"> Trench </a></p><p><a href="#"> Genuine Leather </a></p><p><a href="#"> Parkas  </a></p><p><a href="#"> Down JAckets </a></p><p><a href="#"> Wooold & Blends </a></p><p><a href="#"> Suits & Blazer </a></p><b> Underwear & Laungewear </b><hr><p><a href="#"> Boxer </a></p><p><a href="#"> Briefs </a></p><p><a href="#"> Long Johns </a></p><p><a href="#"> Mens Sleep & Launge </a></p><p><a href="#"> Pajama sets </a></p><p><a href="#"> Robes </a></p></div><div class="menud3"><b> Accessories </b><hr><p><a href="#"> Scarves </a></p><p><a href="#"> Skullies & Beanies </a></p><p><a href="#"> Prescription Glasses </a></p><p><a href="#"> Gloves & Mittens </a></p><p><a href="#"> Belts </a></p><p><a href="#"> Bomber Hats </a></p><p><a href="#"> Fedoras </a></p><p><a href="#"> Berets </a></p><p><a href="#"> Baseball Caps </a></p><b> Novelty & Special User </b><hr><p><a href="#"> Cosplay Costumes </a></p><p><a href="#"> Stage & Dance Wear </a></p><p><a href="#"> Exotic Apparel </a></p></div><div class="menud4"> <img src="images/mi5.png"></div><div class="menud5"><img src="images/mni5.png"></div></div>	</div><li><img src="images/consumer.png"><a href="#">Consumer Electronics</a></li></div>
					<div class="ls1">
	 <div class="lists"><div class="menudiv"> <div class="menud1"><b> Hot Sale </b><hr><p><a href="#"> Hoodies & Sweatshirts </a></p><p><a href="#"> Jackets </a></p><p><a href="#"> T-Shirts </a></p><p><a href="#"> Shirts </a></p><p><a href="#"> Sweaters </a></p><p><a href="#"> Socks </a></p><b> Bottoms </b><hr><p><a href="#"> Casual Pants </a></p><p><a href="#"> Cargo Pants </a></p><p><a href="#"> Jeans </a></p><p><a href="#"> Sweatpants </a></p><p><a href="#"> Harem Pants </a></p><p><a href="#"> Shorts </a></p></div><div class="menud2"><b> Outerwear & Jackets </b><hr><p><a href="#"> Trench </a></p><p><a href="#"> Genuine Leather </a></p><p><a href="#"> Parkas  </a></p><p><a href="#"> Down JAckets </a></p><p><a href="#"> Wooold & Blends </a></p><p><a href="#"> Suits & Blazer </a></p><b> Underwear & Laungewear </b><hr><p><a href="#"> Boxer </a></p><p><a href="#"> Briefs </a></p><p><a href="#"> Long Johns </a></p><p><a href="#"> Mens Sleep & Launge </a></p><p><a href="#"> Pajama sets </a></p><p><a href="#"> Robes </a></p></div><div class="menud3"><b> Accessories </b><hr><p><a href="#"> Scarves </a></p><p><a href="#"> Skullies & Beanies </a></p><p><a href="#"> Prescription Glasses </a></p><p><a href="#"> Gloves & Mittens </a></p><p><a href="#"> Belts </a></p><p><a href="#"> Bomber Hats </a></p><p><a href="#"> Fedoras </a></p><p><a href="#"> Berets </a></p><p><a href="#"> Baseball Caps </a></p><b> Novelty & Special User </b><hr><p><a href="#"> Cosplay Costumes </a></p><p><a href="#"> Stage & Dance Wear </a></p><p><a href="#"> Exotic Apparel </a></p></div><div class="menud4"> <img src="images/mi6.png"></div><div class="menud5"><img src="images/mni6.png"></div></div>	</div><li><img src="images/jevelry.png"><a href="#">Jevelry & Watches</a></li></div>
					<div class="ls1">
	 <div class="lists"><div class="menudiv"> <div class="menud1"><b> Hot Sale </b><hr><p><a href="#"> Hoodies & Sweatshirts </a></p><p><a href="#"> Jackets </a></p><p><a href="#"> T-Shirts </a></p><p><a href="#"> Shirts </a></p><p><a href="#"> Sweaters </a></p><p><a href="#"> Socks </a></p><b> Bottoms </b><hr><p><a href="#"> Casual Pants </a></p><p><a href="#"> Cargo Pants </a></p><p><a href="#"> Jeans </a></p><p><a href="#"> Sweatpants </a></p><p><a href="#"> Harem Pants </a></p><p><a href="#"> Shorts </a></p></div><div class="menud2"><b> Outerwear & Jackets </b><hr><p><a href="#"> Trench </a></p><p><a href="#"> Genuine Leather </a></p><p><a href="#"> Parkas  </a></p><p><a href="#"> Down JAckets </a></p><p><a href="#"> Wooold & Blends </a></p><p><a href="#"> Suits & Blazer </a></p><b> Underwear & Laungewear </b><hr><p><a href="#"> Boxer </a></p><p><a href="#"> Briefs </a></p><p><a href="#"> Long Johns </a></p><p><a href="#"> Mens Sleep & Launge </a></p><p><a href="#"> Pajama sets </a></p><p><a href="#"> Robes </a></p></div><div class="menud3"><b> Accessories </b><hr><p><a href="#"> Scarves </a></p><p><a href="#"> Skullies & Beanies </a></p><p><a href="#"> Prescription Glasses </a></p><p><a href="#"> Gloves & Mittens </a></p><p><a href="#"> Belts </a></p><p><a href="#"> Bomber Hats </a></p><p><a href="#"> Fedoras </a></p><p><a href="#"> Berets </a></p><p><a href="#"> Baseball Caps </a></p><b> Novelty & Special User </b><hr><p><a href="#"> Cosplay Costumes </a></p><p><a href="#"> Stage & Dance Wear </a></p><p><a href="#"> Exotic Apparel </a></p></div><div class="menud4"> <img src="images/mi7.png"></div><div class="menud5"><img src="images/mni7.png"></div></div>	</div><li><img src="images/home.png"><a href="#">Home 7 Garden ,Furniture</a></li></div>
					<div class="ls1">
	 <div class="lists"><div class="menudiv"> <div class="menud1"><b> Hot Sale </b><hr><p><a href="#"> Hoodies & Sweatshirts </a></p><p><a href="#"> Jackets </a></p><p><a href="#"> T-Shirts </a></p><p><a href="#"> Shirts </a></p><p><a href="#"> Sweaters </a></p><p><a href="#"> Socks </a></p><b> Bottoms </b><hr><p><a href="#"> Casual Pants </a></p><p><a href="#"> Cargo Pants </a></p><p><a href="#"> Jeans </a></p><p><a href="#"> Sweatpants </a></p><p><a href="#"> Harem Pants </a></p><p><a href="#"> Shorts </a></p></div><div class="menud2"><b> Outerwear & Jackets </b><hr><p><a href="#"> Trench </a></p><p><a href="#"> Genuine Leather </a></p><p><a href="#"> Parkas  </a></p><p><a href="#"> Down JAckets </a></p><p><a href="#"> Wooold & Blends </a></p><p><a href="#"> Suits & Blazer </a></p><b> Underwear & Laungewear </b><hr><p><a href="#"> Boxer </a></p><p><a href="#"> Briefs </a></p><p><a href="#"> Long Johns </a></p><p><a href="#"> Mens Sleep & Launge </a></p><p><a href="#"> Pajama sets </a></p><p><a href="#"> Robes </a></p></div><div class="menud3"><b> Accessories </b><hr><p><a href="#"> Scarves </a></p><p><a href="#"> Skullies & Beanies </a></p><p><a href="#"> Prescription Glasses </a></p><p><a href="#"> Gloves & Mittens </a></p><p><a href="#"> Belts </a></p><p><a href="#"> Bomber Hats </a></p><p><a href="#"> Fedoras </a></p><p><a href="#"> Berets </a></p><p><a href="#"> Baseball Caps </a></p><b> Novelty & Special User </b><hr><p><a href="#"> Cosplay Costumes </a></p><p><a href="#"> Stage & Dance Wear </a></p><p><a href="#"> Exotic Apparel </a></p></div><div class="menud4"> <img src="images/mi8.png"></div><div class="menud5"><img src="images/mni8.png"></div></div>	</div><li><img src="images/bag.png"><a href="#">Bags & Shoes</a></li></div>
					<div class="ls1">
	 <div class="lists"><div class="menudiv"> <div class="menud1"><b> Hot Sale </b><hr><p><a href="#"> Hoodies & Sweatshirts </a></p><p><a href="#"> Jackets </a></p><p><a href="#"> T-Shirts </a></p><p><a href="#"> Shirts </a></p><p><a href="#"> Sweaters </a></p><p><a href="#"> Socks </a></p><b> Bottoms </b><hr><p><a href="#"> Casual Pants </a></p><p><a href="#"> Cargo Pants </a></p><p><a href="#"> Jeans </a></p><p><a href="#"> Sweatpants </a></p><p><a href="#"> Harem Pants </a></p><p><a href="#"> Shorts </a></p></div><div class="menud2"><b> Outerwear & Jackets </b><hr><p><a href="#"> Trench </a></p><p><a href="#"> Genuine Leather </a></p><p><a href="#"> Parkas  </a></p><p><a href="#"> Down JAckets </a></p><p><a href="#"> Wooold & Blends </a></p><p><a href="#"> Suits & Blazer </a></p><b> Underwear & Laungewear </b><hr><p><a href="#"> Boxer </a></p><p><a href="#"> Briefs </a></p><p><a href="#"> Long Johns </a></p><p><a href="#"> Mens Sleep & Launge </a></p><p><a href="#"> Pajama sets </a></p><p><a href="#"> Robes </a></p></div><div class="menud3"><b> Accessories </b><hr><p><a href="#"> Scarves </a></p><p><a href="#"> Skullies & Beanies </a></p><p><a href="#"> Prescription Glasses </a></p><p><a href="#"> Gloves & Mittens </a></p><p><a href="#"> Belts </a></p><p><a href="#"> Bomber Hats </a></p><p><a href="#"> Fedoras </a></p><p><a href="#"> Berets </a></p><p><a href="#"> Baseball Caps </a></p><b> Novelty & Special User </b><hr><p><a href="#"> Cosplay Costumes </a></p><p><a href="#"> Stage & Dance Wear </a></p><p><a href="#"> Exotic Apparel </a></p></div><div class="menud4"> <img src="images/mi9.png"></div><div class="menud5"><img src="images/mni9.png"></div></div>	</div><li><img src="images/toys.png"><a href="#">Toys,Kids &Baby</a></li></div>
					<div class="ls1">
	 <div class="lists"><div class="menudiv"> <div class="menud1"><b> Hot Sale </b><hr><p><a href="#"> Hoodies & Sweatshirts </a></p><p><a href="#"> Jackets </a></p><p><a href="#"> T-Shirts </a></p><p><a href="#"> Shirts </a></p><p><a href="#"> Sweaters </a></p><p><a href="#"> Socks </a></p><b> Bottoms </b><hr><p><a href="#"> Casual Pants </a></p><p><a href="#"> Cargo Pants </a></p><p><a href="#"> Jeans </a></p><p><a href="#"> Sweatpants </a></p><p><a href="#"> Harem Pants </a></p><p><a href="#"> Shorts </a></p></div><div class="menud2"><b> Outerwear & Jackets </b><hr><p><a href="#"> Trench </a></p><p><a href="#"> Genuine Leather </a></p><p><a href="#"> Parkas  </a></p><p><a href="#"> Down JAckets </a></p><p><a href="#"> Wooold & Blends </a></p><p><a href="#"> Suits & Blazer </a></p><b> Underwear & Laungewear </b><hr><p><a href="#"> Boxer </a></p><p><a href="#"> Briefs </a></p><p><a href="#"> Long Johns </a></p><p><a href="#"> Mens Sleep & Launge </a></p><p><a href="#"> Pajama sets </a></p><p><a href="#"> Robes </a></p></div><div class="menud3"><b> Accessories </b><hr><p><a href="#"> Scarves </a></p><p><a href="#"> Skullies & Beanies </a></p><p><a href="#"> Prescription Glasses </a></p><p><a href="#"> Gloves & Mittens </a></p><p><a href="#"> Belts </a></p><p><a href="#"> Bomber Hats </a></p><p><a href="#"> Fedoras </a></p><p><a href="#"> Berets </a></p><p><a href="#"> Baseball Caps </a></p><b> Novelty & Special User </b><hr><p><a href="#"> Cosplay Costumes </a></p><p><a href="#"> Stage & Dance Wear </a></p><p><a href="#"> Exotic Apparel </a></p></div><div class="menud4"> <img src="images/mi10.png"></div><div class="menud5"><img src="images/mni10.png"></div></div>	</div><li><img src="images/sport.png"><a href="#">vSports & Outdoors</a></li></div>
					<div class="ls1">
	 <div class="lists"><div class="menudiv"> <div class="menud1"><b> Hot Sale </b><hr><p><a href="#"> Hoodies & Sweatshirts </a></p><p><a href="#"> Jackets </a></p><p><a href="#"> T-Shirts </a></p><p><a href="#"> Shirts </a></p><p><a href="#"> Sweaters </a></p><p><a href="#"> Socks </a></p><b> Bottoms </b><hr><p><a href="#"> Casual Pants </a></p><p><a href="#"> Cargo Pants </a></p><p><a href="#"> Jeans </a></p><p><a href="#"> Sweatpants </a></p><p><a href="#"> Harem Pants </a></p><p><a href="#"> Shorts </a></p></div><div class="menud2"><b> Outerwear & Jackets </b><hr><p><a href="#"> Trench </a></p><p><a href="#"> Genuine Leather </a></p><p><a href="#"> Parkas  </a></p><p><a href="#"> Down JAckets </a></p><p><a href="#"> Wooold & Blends </a></p><p><a href="#"> Suits & Blazer </a></p><b> Underwear & Laungewear </b><hr><p><a href="#"> Boxer </a></p><p><a href="#"> Briefs </a></p><p><a href="#"> Long Johns </a></p><p><a href="#"> Mens Sleep & Launge </a></p><p><a href="#"> Pajama sets </a></p><p><a href="#"> Robes </a></p></div><div class="menud3"><b> Accessories </b><hr><p><a href="#"> Scarves </a></p><p><a href="#"> Skullies & Beanies </a></p><p><a href="#"> Prescription Glasses </a></p><p><a href="#"> Gloves & Mittens </a></p><p><a href="#"> Belts </a></p><p><a href="#"> Bomber Hats </a></p><p><a href="#"> Fedoras </a></p><p><a href="#"> Berets </a></p><p><a href="#"> Baseball Caps </a></p><b> Novelty & Special User </b><hr><p><a href="#"> Cosplay Costumes </a></p><p><a href="#"> Stage & Dance Wear </a></p><p><a href="#"> Exotic Apparel </a></p></div><div class="menud4"> <img src="images/mi11.png"></div><div class="menud5"><img src="images/mni11.png"></div></div>	</div><li><img src="images/health.png"><a href="#">Health & Beauty, Hair</a></li></div>
					<div class="ls1">
	 <div class="lists"><div class="menudiv"> <div class="menud1"><b> Hot Sale </b><hr><p><a href="#"> Hoodies & Sweatshirts </a></p><p><a href="#"> Jackets </a></p><p><a href="#"> T-Shirts </a></p><p><a href="#"> Shirts </a></p><p><a href="#"> Sweaters </a></p><p><a href="#"> Socks </a></p><b> Bottoms </b><hr><p><a href="#"> Casual Pants </a></p><p><a href="#"> Cargo Pants </a></p><p><a href="#"> Jeans </a></p><p><a href="#"> Sweatpants </a></p><p><a href="#"> Harem Pants </a></p><p><a href="#"> Shorts </a></p></div><div class="menud2"><b> Outerwear & Jackets </b><hr><p><a href="#"> Trench </a></p><p><a href="#"> Genuine Leather </a></p><p><a href="#"> Parkas  </a></p><p><a href="#"> Down JAckets </a></p><p><a href="#"> Wooold & Blends </a></p><p><a href="#"> Suits & Blazer </a></p><b> Underwear & Laungewear </b><hr><p><a href="#"> Boxer </a></p><p><a href="#"> Briefs </a></p><p><a href="#"> Long Johns </a></p><p><a href="#"> Mens Sleep & Launge </a></p><p><a href="#"> Pajama sets </a></p><p><a href="#"> Robes </a></p></div><div class="menud3"><b> Accessories </b><hr><p><a href="#"> Scarves </a></p><p><a href="#"> Skullies & Beanies </a></p><p><a href="#"> Prescription Glasses </a></p><p><a href="#"> Gloves & Mittens </a></p><p><a href="#"> Belts </a></p><p><a href="#"> Bomber Hats </a></p><p><a href="#"> Fedoras </a></p><p><a href="#"> Berets </a></p><p><a href="#"> Baseball Caps </a></p><b> Novelty & Special User </b><hr><p><a href="#"> Cosplay Costumes </a></p><p><a href="#"> Stage & Dance Wear </a></p><p><a href="#"> Exotic Apparel </a></p></div><div class="menud4"> <img src="images/mi12.png"></div><div class="menud5"><img src="images/mni12.png"></div></div>	</div><li><img src="images/automobiles.png"><a href="#">Automobiles & Motorcycles</a></li></div>
					<div class="ls1">
	 <div class="lists"><div class="menudiv"> <div class="menud1"><b> Hot Sale </b><hr><p><a href="#"> Hoodies & Sweatshirts </a></p><p><a href="#"> Jackets </a></p><p><a href="#"> T-Shirts </a></p><p><a href="#"> Shirts </a></p><p><a href="#"> Sweaters </a></p><p><a href="#"> Socks </a></p><b> Bottoms </b><hr><p><a href="#"> Casual Pants </a></p><p><a href="#"> Cargo Pants </a></p><p><a href="#"> Jeans </a></p><p><a href="#"> Sweatpants </a></p><p><a href="#"> Harem Pants </a></p><p><a href="#"> Shorts </a></p></div><div class="menud2"><b> Outerwear & Jackets </b><hr><p><a href="#"> Trench </a></p><p><a href="#"> Genuine Leather </a></p><p><a href="#"> Parkas  </a></p><p><a href="#"> Down JAckets </a></p><p><a href="#"> Wooold & Blends </a></p><p><a href="#"> Suits & Blazer </a></p><b> Underwear & Laungewear </b><hr><p><a href="#"> Boxer </a></p><p><a href="#"> Briefs </a></p><p><a href="#"> Long Johns </a></p><p><a href="#"> Mens Sleep & Launge </a></p><p><a href="#"> Pajama sets </a></p><p><a href="#"> Robes </a></p></div><div class="menud3"><b> Accessories </b><hr><p><a href="#"> Scarves </a></p><p><a href="#"> Skullies & Beanies </a></p><p><a href="#"> Prescription Glasses </a></p><p><a href="#"> Gloves & Mittens </a></p><p><a href="#"> Belts </a></p><p><a href="#"> Bomber Hats </a></p><p><a href="#"> Fedoras </a></p><p><a href="#"> Berets </a></p><p><a href="#"> Baseball Caps </a></p><b> Novelty & Special User </b><hr><p><a href="#"> Cosplay Costumes </a></p><p><a href="#"> Stage & Dance Wear </a></p><p><a href="#"> Exotic Apparel </a></p></div><div class="menud4"> <img src="images/mi13.png"></div><div class="menud5"><img src="images/mni13.png"></div></div>	</div><li><img src="images/homeimproovements.png"><a href="#">Home improvement,Tools</a></li></div>
			
		</ul>
















	</div>

	<div class="slideshow"> <div id="slider">




	</div>
	<div id="ctg">
	<div class="c1"></div>
	<div class="c2"></div>
	<div class="c3"></div>
	<div class="c4"></div>
	<div class="c5"></div>
	<div class="c6"></div>
	</div>
	</div>

	<div class="sidebar2">

	<div class="d1"> <div class='klornkar'> </div><br>Welcome to AliExpress <br> <a href="login.php"><button style='background:red'>Join</button></a> <a href="login.php"><button >Sign IN</button></a>
	</div>
	<br>
	<div class="d2"> <a href="login.php"><div class='dexinnkar'></div>></a></div>
	<br>
	<div class="d3"> <p><b> ITEMS UNDER 5$</b></p> <div class="d30"><a href=""><dir class="d31"> </dir></a> <a href=""><div class="d32"> </div></a>
	</div>
	</div>


	</div>










	 
	<div class="special">
	<div class="timer">
	<p id="zhamanak"></p>
	</div>
	<br>
	<div id="items"> 


	 </div>
	</div>


	<div class="brandzone">

	<div> <p id="bz"><a href="#">Brand Zone</a></p> <p id="branddown"> Get in the zone with the best brands from AliExpress</p>
	<div><br>
	<div class="drsi1"> <div class="nersi1"></div><p id="dp1">Shop sales now</p><p id="dp2">Dont miss great items at incredible prices </p></div>
	<div class="drsi2"> <div class="nersi2"></div><p id="dp3">SHOP YOUR FAVORITE BRANDS</p><p id="dp4">Incredible deals on exclusive brands</p></div>
	<div class=drsi3> </div>
	</div>




	</div>


	</div>

	<div class="section7"><p>Inspiration</p>
	<p>A wide selection of items for you to chose from</p>
	</div>

	<div class="section8">
		<div class="types">
			<div class="typeItem1"></div>
			<div class="typeItem2"></div>
			<div class="typeItem3"></div>
			<div class="typeItem4"></div>
		</div>
		<div class="types">
			<div class="typeItem5"></div>
			<div class="typeItem6"></div>
			<div class="typeItem7"></div>
			<div class="typeItem8"></div>
		</div>
		<div class="types">
			<div class="typeItem9"></div>
			<div class="typeItem10"></div>
			<div class="typeItem11"></div>
			<div class="typeItem12"></div>
		</div>

		<div class="types">
			<div class="typeItem13"></div>
			<div class="typeItem14"></div>
			<div class="typeItem15"></div>
			<div class="typeItem16"></div>
		</div>
			<div class="types">
			<div class="typeItem17"></div>
			<div class="typeItem18"></div>
			<div class="typeItem19"></div>
			<div class="typeItem20"></div>
		</div>
			<div class="types">
			<div class="typeItem21"></div>
			<div class="typeItem22"></div>
			<div class="typeItem23"></div>
			<div class="typeItem24"></div>
		</div>	
	</div>
























	<p style="font-weight:bold; font-size:25px;text-align:left; position:relative; top:-355px">More To Love</p>
	<br><br><br>
	<div class="products">

		<?php 


	$getprice="SELECT price,id,image FROM products";
	$popox=mysqli_query($con,$getprice);
	while($tox=mysqli_fetch_assoc($popox)){
		
		echo "<div class='cart0'><img  src='images/".$tox["image"]."'><input class='qnk' title='Number of PRODUCTS' type='number'><input disabled='disabled' class='price' title='PRoduct Price' value=".$tox["price"]."><button title='Press to Buy' class='btn' id=n".$tox["id"]." > $ BUY</button></div>
		
		";
		
	};

?>
		
	</div>
		
	</div>
	<div class="dwnsect">

	<div class="dwitem"><a href="#"><div class="it1"></div></a></div>
	<div class="dwitem"><a href="#"><div class="it2"></div></a></div>
	<div class="dwitem"><a href="#"><div class="it3"></div></a></div>
	<div class="dwitem"><a href="#"><div class="it4"></div></a></div>
	<div class="dwitem"><a href="#"><div class="it5"></div></a></div>
	<div class="dwitem"><a href="#"><div class="it6"></div></a></div>

	</div>
	<br><br>
	<div class="sub">
		
	<div class="mail"><p>Subscription</p><br><input id="mailinput"><button>Subscribe</button><br><p style="color:#001122;font-size:18px">Register now to get updates on promotions and coupons </p><p>Stay Connected</p> <a href="#"> <div class="facebook"> </div></a></div>
	<div class="links1"><p>How to Buy</p><br><a href="#">Making Payments</a><br><a href="#">New User Guide</a><br><a href="#">Buyer Protection</a><br><a href="#">Delivery Options</a><br></div>
	<div class="links2"><p>Customer Service</p><br><a href="#">Customer service</a><br><a href="#">Transaction Service Agreement</a><br><a href="#">Take Our Survey</a></div>
	<div class="links3"><p>Partner Promotion</p><br><a href="#">Partnerships</a><br><a href="#">Affiileate Program </a><br></div>

	</div>
	<div class="fot1">
		<div class="mas1"> <p><b>HELP</b><br><p style="color:#001122;font-size:18px"><a href="#">Customer Service</a>,<a href="#">Disputes & Reports</a>,<a href="#">Buyer Protection</a>,<a href="#">NEW USER GUIDE</a>,<a href="#">Report IPR INFRINGMENT </a></p><br><p><b>Browse Category</b></p><p style="position:relative ; top:-27px; color:#001122;font-size:18px"><a href="#">ALL</a>,<a href="#">Popular</a>,<a href="#">Promotion</a>,<a href="#">Low Price</a>,<a href="#">Great Value </a>,<a href="#">Reviews </a></p><div class="appstore"></div></div>
		
		<div class="mas2"><p><b>ALI EXPRESS Mulit-Language Sites</b><br><p style="color:#001122;font-size:18px"><a href="#">Russian</a>,<a href="#">Portuguese</a>,<a href="#">Spanish</a>,<a href="#">French</a>,<a href="#">German </a>,<a href="#">Italian </a>,<a href="#">Dutch </a>,<a href="#">Japanese </a>,<a href="#">Korean </a>,<a href="#">Thai </a>,<a href="#">Vietnamese </a>,<a href="#">Arabic </a>,<a href="#">Hebrew </a>,<a href="#">Polish </a></p><br><p><b>Alibaba Group</b></p><p style="color:#001122;font-size:18px"><a href="#">ALIBABA group website</a>,<a href="#">AliExpress</a>,<a href="#">Alimama</a>,<a href="#">AliPAY</a>,<a href="#">Figgy </a>,<a href="#">Alibaba Cloud </a>,<a href="#">Alibaba International </a>,<a href="#">AliTelecom </a>,<a href="#">Ding Talk </a>,<a href="#">Juhuasan </a>,<a href="#">TaoBao Marketplace </a>,<a href="#">Tmail </a>,<a href="#">Xiami </a>,<a href="#">AliOS </a>,<a href="#">1688 </a></p> </div>


	</div>
	<div class="fot2" >
	<p ><a href="#">ALIBABA group website</a>,<a href="#">AliExpress</a>,<a href="#">Alimama</a>,<a href="#">AliPAY</a> &copy 2010-2018 AliExpress.com. All rights reserved.</p>


		
	</div>

	</center>
			
		











	<script>
		
	var countDownDate = new Date("May 28, 2018 12:00:00").getTime();
	var x = setInterval(function() {


	  var now = new Date().getTime();

	  var distance = countDownDate - now;


	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);


	zhamanak.innerHTML ="FLASH DEALS  &nbsp &nbsp " +	days + "d " + hours + "h "
	  + minutes + "m " + seconds + "s ";
	console.log(days + "d " + hours + "h "
	  + minutes + "m " + seconds + "s ")

	  if (distance < 0) {
	    clearInterval(x);
	    document.getElementById("zhamanak").innerHTML = "EXPIRED";
	  }
	}, 1000);


		$(".btn").click(function(){
			
			 a=$(this).parent().find('.qnk').val();
			 b=a*$(this).parent().find('.price').val();
			 c=$(this).attr('id').substring(1);

		$.post( "insert2.php", { userID: <?php echo $mutq;  ?>
		, qty: c ,prodID: a,price: b })
	  .done(function( data ) {
	    alert( "Data Loaded: " + data );
		  });
		})




	$(".prodavel").mouseover(function(){
		$(".govazd").css({"height": "75%", "transition": "2s"});
	
		

	} )
	$(".prodavel").mouseout(function(){
		$(".govazd").css({"height": "75px", "transition": "2s"});
	
		

	} )
	for (var i=1; i <= 5 ; i++){
		items.innerHTML+="<div class='itembox' style='background:url(images/c"+i+".jpg) no-repeat;background-size:100% 60%;'><p class='price'>150$</p><p  class='jnjac'>365$</p> <div class='filler'> <div class='fillerInner'></div></div> <br> <br> <br> <p class='specialqty'> 62 % already claimed</p></div>"

	}

		$(".btnshop").click(function(){

		console.log("apee")

		})
		


	</script>


	</body>
	</html>


			