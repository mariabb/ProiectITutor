function mySnow() {
  alert("Let it snow!Let it snow!");
}
function myConfirm() {
  var txt;
  if (confirm("It is snowing now?")) {
    txt = "Yes, it is snowing now!!";
  } else {
    txt = "No, It's raining now!";
  }
  document.getElementById("confirm").innerHTML = txt;
}
function myPrompt() {
  var txt;
  var city = prompt("Please enter your city:", "Cluj Napoca");
  if (city == null || city == "") {
    txt = "User cancelled the prompt.";
  } else {
    txt = "Hello !Everybody from " + city + "! How are you today?";
  }
  document.getElementById("prompt").innerHTML = txt;
}
var alertGripa = "Flu";
alert("Attention there is " + alertGripa);
function myFunction() {
  alert("Hello class!");
}
myFunction();
function multiplication(a, b) {
  return a + b;
}
function functionMultiplication() {
  document.getElementById("multiplication").innerHTML = multiplication(10,8);
}
