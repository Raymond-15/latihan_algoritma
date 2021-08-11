<?php
$n = 1;
for ($i = 0; $i < $n; $i++) {
    $x[] = "22";
    $len = count($x);
    $result = (($x[0] - 48) - 1) * 10;
    if ($len == 1) {
        $result += 1;
    } elseif ($len == 2) {
        $result += 3;
    } elseif ($len == 3) {
        $result += 6;
    } else {
        $result += 10;
    }
    echo $result . "<br>";
}
