<!DOCTYPE html>
<html>
<head>
	<title>mysql7</title>
			<script src="jquery-3.3.1.min.js"></script>
				<style type="text/css">
	body{
		margin:0;
		background:rgba(255 , 245, 245, 0.9);


    position: fixed; 
    overflow-y: scroll;
    width: 100%;

	}
	canvas{
		background:rgba(255 , 245, 245, 0.9);
		border: 1px solid black;
	}
	.wrap{
		position:absolute;
		margin:250px;
		z-index:150;
		padding:45px;
	background: rgba(225, 225 , 255, 0.7);
			text-align:center;
			border:none;
			color:rgba(1225,89,74, 0.7);
			font-size:45px;
	}
		.wrap2{
		position:absolute;
		margin:250px;
		z-index:150;
		padding:45px;
		background: rgba(225, 225 , 255, 0.7);
			text-align:center;
			border:none;
		color:rgba(1225,89,74, 0.7);
			font-size:45px;
			left:550px;

	}
#login{
	width:250px;
	height:35px;
background:rgba(213,225,119, 0.4);
border-radius:14px 1px 14px 1px;
font-size:20px;
text-align:center;
	color:grey;
	border:none;
}
#pass{
	width:250px;
	height:35px;
background:rgba(225,132,122,0.7);
border-radius:1px 14px 1px 14px;
font-size:20px;
	color:silver;
	text-align:center;
	border:none;
}
#mutq{
		width:250px;
	height:35px;
background:rgba(109,225,122, 0.4);
border-radius:255px 14px 255px 255px;
font-size:20px;
	color:rgba(225,90,64, 0.8);
	text-align:center;
	border:none;
}
#login2{
	width:250px;
	height:35px;
background:rgba(144,225,135, 0.4);
border-radius:14px 1px 14px 1px;
font-size:20px;
text-align:center;
	color:grey;
	border:none;
}
#pass2{
	width:250px;
	height:35px;
background:rgba(225,126,103, 0.7);
border-radius:1px 14px 1px 14px;
font-size:20px;
	color:grey;
	text-align:center;
	border:none;
}
#mutq2{
		width:250px;
	height:35px;
background:rgba(106,209,225, 0.4);
border-radius:255px 14px 255px 255px;
font-size:20px;
	color:orange;
	text-align:center;
	border:none;
}
#age{
		width:250px;
	height:35px;
background:rgba(212,225,146, 0.4);
border-radius:255px 14px 255px 255px;
font-size:20px;
	color:silver;
	text-align:center;
	border:none;

}
input:focus {
	outline:none;
}
button{
	outline:none;
}
input::placeholder{
	color:grey;
	opacity:0.9;
}

input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
input:-webkit-autofill:active {
    transition: background-color 5000s ease-in-out 0s;
}

#canvas {
    position:fixed;
    left:0;
    top:0;
    width:100%;
    height:100%;
}
</style>
</head>

<body>
	<div id="status"></div>

<div class="wrap"> 
<p style="width:100%;position:absolute;height:45px; top:-255px; left:255px;font-size:48px; text-align:center; color:orange; font-weight: bold; padding:15px;background:rgba(225,225,255,0.7)"> ALI EXPRESS</p>
SIGN IN <br>
<input  id="login" placeholder="login"/><br/>
<input  type="password"  placeholder="password" id="pass"><br/>
<button id="mutq">LOG in</button>
</div>
<div class="wrap2"> 
Registration<br>
<input  id="login2" placeholder="LOGIN"/><br/>
<input  type="password" placeholder="PASSWORD" id="pass2"><br/>
<input  id="age" placeholder="AGE" ><br/>
<button id="mutq2">SUBMIT</button>
</div>
<canvas id="canvas"> </canvas>

	<script type="text/javascript" src="canvas.js"></script>

<script>
$("#mutq").click(function(){	
$.post("loggedin.php", {login: $("#login").val(), password: $("#pass").val()},
function(ardyunq){

$("#status").html(ardyunq);


})
})
$("#mutq2").click(function(){	
$.post("register.php", {login: $("#login2").val(), password: $("#pass2").val(), age: $("#age").val()},
function(ardyunq){

$("#status").html(ardyunq);


})
})






</script>








</body>
</html>