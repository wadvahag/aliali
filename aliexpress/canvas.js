console.log("r/place");
var canvas = document.querySelector('canvas');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var c = canvas.getContext('2d'); 

// c.fillStyle = "#"+f2();;
// c.fillRect(100,100,250,450);//fillrect(x,y,width,height);//
// c.fillStyle = "#"+f2();;
// c.fillRect(10,100,250,50);
// c.fillStyle = 'rgba(255, 75 , 255, 0.4)';
// c.fillRect(100,10,50,450);


//line

// c.beginPath();
// c.moveTo(50,300);//moveTo(x,y)
// c.lineTo(300,100);//lineTo(x,y)
// c.lineTo(400,300);//lineTo(x,y)
// c.strokeStyle = "#"+f2();
// c.stroke();

//ARC / Circle
// c.beginPath();
// c.arc(300, 300,  30, 0, Math.PI *2 , false);//(x, y,  r: Int, startAngle: Float,ending: Float, drowCounterClockwise);
// c.strokeStyle = "blue";
// c.stroke();

 function f2(){

 	return Math.floor(Math.random()*111+999);
 }
// for(var i=0;i < 250; i++){
// 	var x = Math.random() * window.innerWidth;
// 	var y = Math.random() * window.innerHeight;
//  c.beginPath();
// c.arc(x, y,  30, 0, Math.PI *2 , false);//(x, y,  r: Int, startAngle: Float,ending: Float, drowCounterClockwise);
// c.strokeStyle = "#"+f2();
// c.stroke();

// }



 
// var radius=30;
// function animate(){
// 	requestAnimationFrame(animate);
		
// 		c.clearRect(0,0,innerWidth,innerHeight);
// circle.update();

// c.beginPath();
// c.arc(x, y,  30, 0, Math.PI *2 , false);//(x, y,  r: Int, startAngle: Float,ending: Float, drowCounterClockwise);
// c.strokeStyle = "blue";
// c.stroke();
// }
// animate();

var mouse = {
	x: undefined,
	y: undefined
}


var maxRadius = 30;
//var minRadius = 8;



var colorArray= [ 'RED','ORANGE','AQUA','DARKGREEN','SILVER'];







window.addEventListener("mousemove", function(event){
mouse.x = event.x;
mouse.y = event.y;



})


window.addEventListener("resize", function(event){
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;


init();
})


function Circle(x,y,dx,dy,radius,color) {
this.x = x;
this.y = y;
this.dx = dx;
this.dy = dy;
this.radius = radius;
this.minRadius= radius;
this.color =  colorArray[ Math.floor(Math.random()*colorArray.length)]; //karevor paha

this.draw = function(){
c.beginPath();
c.arc(this.x, this.y,  this.radius, 0, Math.PI *2 , false);//(x, y,  r: Int, startAngle: Float,ending: Float, drowCounterClockwise);
c.strokeStyle = "pink";
c.stroke();
c.fillStyle = this.color;
c.fill();
}

this.update = function(){
if(this.x + this.radius > window.innerWidth || this.x-radius < 0){
	this.dx = -this.dx;
}
if(this.y + this.radius > window.innerHeight || this.y-radius < 0){
	this.dy = -this.dy;
}

this.x += this.dx;
this.y += this.dy;


//interactivity

if (mouse.x - this.x < 50 && mouse.x - this.x > -50 &&mouse.y - this.y < 50 && mouse.y - this.y > -50){
	
if (this.radius < maxRadius) {
this.radius+=1;

}

}else {
	if (this.radius > this.minRadius) {
	this.radius-=1;
	}
}


this.draw();
}


}
var circleArray=[];
function init(){

 circleArray=[];

for(var i =0 ; i<750; i++){
	var radius = Math.random()*3 + 1 ;
	var y = Math.random() * (innerWidth - radius * 2) + radius;
var x = Math.random() * (innerHeight - radius * 2) + radius;
var dx = (Math.random() - 0.5)*4.5;
var dy = (Math.random() - 0.5);

	circleArray.push( new Circle(x,y,dx,dy,radius));
//var circle = new Circle(x,y,dx,dy,30);


}
}
function animate(){
	requestAnimationFrame(animate);
		
		c.clearRect(0,0,innerWidth,innerHeight);
for(var i = 0 ; i<circleArray.length; i++){

circleArray[i].update();
}
}
init();
animate();
