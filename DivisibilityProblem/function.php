<?php
$hasil = "";
if (isset($_POST['cek'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];

    if ($a % $b == 0) {
        $hasil = 0;
    } else {
        $n = floor($a / $b);
        $hasil = ($n + 1) * $b - $a;
    }
}
