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
//indexed array
$zi = array("luni", "marti", "miercuri", "joi", "vineri", "sambata", "duminica");
echo "Zilele saptamanii sunt: " . $zi[0] . ", " . $zi[1] . "," . $zi[2] . ", " . $zi[3] . ", " . $zi[4] . "," . $zi[5] . " si " . $zi[6] . ".";
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
$age['Ana'] = "20";
$age['Letitia'] = "30";
$age['Ileana'] = "25";
echo "Letitia is " . $age['Letitia'] . " years old.";
echo "<br />";
$age = array("Ana" => "20", "Letitia" => "30", "Ileana" => "25");
asort($age);
print_r($age);
echo "<br />";
echo "<br />";
$myArray = array(
    array("ianuarie", "februarie", "martie"),
    array("aprilie", "mai", "iunie")
);
// Displays "iunie"
echo $myArray[1][2];
echo "<br />";
function Name($name, $birthYear)
{
    echo "$name Popescu. Born in $birthYear <br>";
}
Name('Ana', 1970);
Name('Marcel', 1971);
Name('Anastasia', 1980);
Name('Corina', 1975);
$age = array("Ana" => "50", "Marcel" => "49", "Anastasia" => "40");
echo "Marcel is " .
    $age['Marcel']
    . " years old.";
