let canvas = document.querySelector("canvas");
  let context = canvas.getContext("2d");
  context.fillStyle = "red";
  context.fillRect(10, 10, 500, 500);
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
ctx.beginPath();
ctx.arc(95,50,40,0,2*Math.PI);
ctx.stroke();

var c = document.getElementById('myCanvas');
var ctx = c.getContext('2d');
ctx.beginPath();
ctx.arc(300,75,50,0*Math.PI,1.5*Math.PI);
ctx.stroke();

var c = document.getElementById('myCanvas');
var ctx = c.getContext('2d');
ctx.beginPath();
ctx.arc(100,150,50,0*Math.PI,1.5*Math.PI);
ctx.stroke();

var c = document.getElementById('myCanvas');
var ctx = c.getContext('2d');
ctx.beginPath();
ctx.arc(100,75,50,1*Math.PI,1.5*Math.PI);
ctx.stroke();

var c = document.getElementById('myCanvas');
var ctx = c.getContext('2d');
ctx.beginPath();
ctx.arc(100,75,50,0*Math.PI,2*Math.PI);
ctx.stroke();

var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
ctx.shadowBlur = 10;
ctx.shadowOffsetY = 20;
ctx.shadowColor = "black";
ctx.fillStyle = "blue";
ctx.fillRect(20, 20, 100, 80);


var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
ctx.shadowBlur = 10;
ctx.shadowOffsetY = 20;
ctx.shadowColor = "black";
ctx.fillStyle = "green";
ctx.fillRect(100, 100, 100, 80);

var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
ctx.shadowBlur = 10;
ctx.shadowOffsetY = 20;
ctx.shadowColor = "black";
ctx.fillStyle = "pink";
ctx.fillRect(200, 200, 100, 80);
