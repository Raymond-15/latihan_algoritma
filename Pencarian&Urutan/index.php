<?php  

// a. urutkan array tersebut (asc dan desc).
$asc = [20, 10, 100, 30, 5, 45];

sort($asc);

echo "ASC = ";

foreach ($asc as $data) {
	echo $data . " ";
}

echo "<br>";

$dsc = [20, 10, 100, 30, 15, 5];

rsort($dsc);

echo "DSC = ";

foreach ($dsc as $data) {
	echo $data . " ";
}

echo "<hr>";

?>