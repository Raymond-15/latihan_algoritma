<?php
$hasil = "";
if (isset($_POST['cek'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];

    if ($a > $b) {
        $b = 2 * $b;
    } else {
        $a = $a * 2;
    }

    $output = pow(max($a, $b), 2);
    $hasil = $output . "<br>";
}
