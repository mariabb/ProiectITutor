<?php
$cities = array('Cluj Napoca', 'Timisoara', 'Constanta', "Pitesti");
$length = count($cities);

for ($x = 0; $x < $length; $x++) {
    echo $cities[$x];
    echo '<br>';
}
echo "<br />";
$cities = array('Cluj Napoca', 'Timisoara', 'Constanta', "Pitesti");
echo count($cities);
echo "<br />";
$cities = array('Cluj Napoca', 'Timisoara', 'Constanta', "Pitesti");
echo $cities[2];
echo "<br />";
$numerals = [1, 2, 3, 100, 84, 6, 5];
sort($numerals);
print_r($numerals);
echo "<br />";
$numerals = [1, 2, 3, 100, 84, 6, 5];
rsort($numerals);
print_r($numerals);
echo "<br />";
$sports = ['fotbal', 'gimnastica', 'tenis'];
sort($sports);
print_r($sports);
echo "<br />";
function Name($name, $birthYear)
{
    echo "$name Popescu. Born in $birthYear <br>";
}
Name('Ana', 1970);
Name('Marcel', 1971);
Name('Anastasia', 1980);
Name('Corina', 1975);
