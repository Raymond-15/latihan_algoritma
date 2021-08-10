<?php

$hasil = "";

if (isset($_POST['cek'])) {
    $n = $_POST['input'];
    $a = 0;
    $b = 0;

    if ($n % 2 == 0) {
        $a = $n / 2;
        $b = $n / 2;
    } else {
        $a = $n - 1;
        $b = 1;
    }
    $hasil = $a . " " . $b;
}
