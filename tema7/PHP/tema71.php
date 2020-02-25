<?php

// person detailes
echo "<h1>Person Detailes</h1>";
function person($fname, $lname)
{
    echo "First Name is: $fname and Last Name is: $lname<br/>";
}
person("John", "Doe");
// indexed array 
echo "<h1>Indexed Array</h1>";
$items = ['item1', 'item2', 'item3', 'item4'];
foreach ($items as $item) {
    echo "$item<br/>";
}
// associative array
echo "<h1>Associative Array</h1>";
$colors = ['white' => '#ffffff', 'black' => '#000000', 'silver' => '#dddddd'];
foreach ($colors as $name => $code) {
    echo "$name = $code; <br/> ";
}
echo "<h1>Multidimensional Array</h1>";
// multidimensional array
$numbers = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
foreach ($numbers as $number) {
    foreach ($number as $num) {
        echo "$num ";
    }
}
?>