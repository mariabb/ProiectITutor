<?php
$t = date("H");

if ($t < "23") {
    echo "How are you?";
}
echo "<br />";
$first_number = 10;
$second_number = 49;
if ($first_number > $second_number) {
    echo "$first_number is greater than $second_number";
} else {
    echo "$second_number is greater than $first_number";
}
echo "<br />";
$bestcar = "Logan";
switch ($bestcar) {
    case "Logan":
        echo "Your favorite car is Logan!";
        break;
    case "BMW":
        echo "Your favorite car is BMW!";
        break;
    case "Fiat":
        echo "Your favorite car is Fiat!";
        break;
    default:
        echo "Your favorite car is neither Logan, BMW, nor Fiat!";
}
echo "<br />";
for ($i = 0; $i < 5; $i++) {
    $var = 2 * $i;
    echo "The product of 2 * $i is $var <br/>";
}
echo "<br />";
$x = 0;
while ($x <= 10) {
    echo "The number is: $x <br>";
    $x += 1;
}
echo "<br />";
$x = 100;
do {
    echo "The number after do...while , is: $x <br>";
    $x++;
} while ($x <= 110);
echo "<br />";
$animals_list = array("Lion","Wolf","Dog","Leopard","Tiger");
foreach($animals_list as $array_values){
echo $array_values . "<br>";
}
?>