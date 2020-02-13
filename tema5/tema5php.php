<?php
echo "Exemple tipuri de date:
<br/>";
$x = 2020;
var_dump($x);
echo "<br />";
$x = 20.269;
var_dump($x);
echo "<br />";
$x = 'Maria';
var_dump($x);
echo "<br />";
$cars = array("Cluj Napoca","Bucuresti","Timisoara","Iasi");
var_dump($cars);
echo "<br />";
echo "<br />";
//the  lenth of my name, the output is 12
echo strlen("Maria Bufnea");
echo "<br />";
//the output is 3
echo str_word_count("Aceasta este tema 5");
//reverse the string
echo "<br />";
echo strrev("Maria Bufnea"); 
echo "<br />";
echo strpos("Hello world!", "world"); // outputs 6
echo "<br />";
echo strpos("Maria Bufnea!", "Maria"); // outputs 0
echo "<br />";
echo strpos("Maria Bufnea!", "Ana"); // outputs ??
echo "<br />";
echo str_replace("Maria", "Bufnea", "Cluj Napoca!");
echo "<br />";
$x = 2020;
var_dump(is_int($x));//check if is integer
echo "<br />";
$x = 23.13;
var_dump(is_int($x));
//Cast float and string to integer:
echo "<br />";
$x = 12345.891;
$int_cast = (int)$x;
echo $int_cast;
echo "<br />";
// Cast string to int
$x = "12345.891";
$int_cast = (int)$x;
echo $int_cast;
echo "<br />";
define("FLU", "In Romania!");
echo FLU;//The output is In Romania, FLU is a constant
echo "<br />";
define("cities", [
    "Cluj Napoca",
    "Bucuresti",
    "Iasi"
]);
echo cities[2];//The output is Iasi
echo "<br />";
define("CITIES", "Welcome to our city!");
function myTest() {
    echo CITIES;
}
echo "<br />";
myTest();
//Adition
echo "<br />";
$x = 100;  
$x += 200;
echo $x;//the output is 300
?>