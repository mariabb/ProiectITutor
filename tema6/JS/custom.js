// Create an object:
var car = {typeCar:"Dacia", typeCar2:"Logan", old:10, carColor:"white"};

// Display some data from the object:
document.getElementById("example").innerHTML =
car.typeCar + " " + car.typeCar2 + " " + " has" + car.old + " " + "years"+ " " +  "and" + " "+"is"+ " " + car.carColor;
var x = "15";
var y = "40";
var z = x + y;
document.getElementById("sum").innerHTML = z;
var str = "HTML,CSS,JAVASCRIPT,PHP";
var res = str.slice(20);
document.getElementById("slice").innerHTML = res; 
function myFunction() {
  var cars2 = ["Dacia", "Fiat", "BMW", "Nissan", "Skoda"];
  var myCar = cars2.slice(-4, -1);
  document.getElementById("slice2").innerHTML = myCar;
}
function displayDate() {
    document.getElementById("date").innerHTML = Date();
  }
