document.getElementById("parse").innerHTML =
  parseInt("50") +
  "<br>" +
  parseInt("50.25") +
  "<br>" +
  parseInt("50 9") +
  "<br>" +
  parseInt("20 years") +
  "<br>" +
  parseInt("years 20");
document.getElementById("nonnumeric").innerHTML = 20 / "Logan";
var cars = ["Cluj Napoca", "Bucuresti", "Timisoara"];
document.getElementById("demoarray").innerHTML = cars;
var city = ["Timisoara", "Bucuresti", "Cluj Napoca"];
document.getElementById("createarray").innerHTML = city;
var city2 = ["Timisoara", "Bucuresti", "Cluj Napoca"];
document.getElementById("arrayindex").innerHTML = city2[2];
var zi, text;
zi = ["luni", "marti", "miercuri", "joi"];
text = "<ul>";
zi.forEach(myFunction);
text += "</ul>";
document.getElementById("arrayforeach").innerHTML = text;
function myFunction(value) {
  text += "<li>" + value + "</li>";
}
var cities = ["Paris", "Londra", "Atena", "Viena", "Barcelona"];
document.getElementById("demo1").innerHTML = cities;
cities.pop();
document.getElementById("demo2").innerHTML = cities;
var arr1 = ["HTML", "CSS"];
var arr2 = ["JAVASCRIPT", "PHP", "SQL"];
var arr3 = ["PYTHON", "C++"];
var myClass = arr1.concat(arr2, arr3);
document.getElementById("concatArray").innerHTML = myClass;
function func() {
  //Original string
  var arr = [2, 5, 8, 1, 4];
  //Sorting the array
  document.write(arr.sort());
  document.write("<br>");
  document.write(arr);
}
var numbers = [200, 100, 83, 62, 50, 45];
var over100 = numbers.filter(myFunction);
document.getElementById("indexarray").innerHTML = over100;
function myFunction(value, index, array) {
  return value > 100;
}
