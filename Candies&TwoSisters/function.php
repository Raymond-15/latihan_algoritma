<?php
$hasil = "";
if (isset($_POST['cek'])) {
    $x = $_POST['input'];
    if ($x <= 2) {
        $hasil = "0" . "<br>";
    } else {
        if ($x % 2 == 0) {
            $hasil = floor(($x / 2) - 1) . "<br>";
        } else {
            $hasil = floor($x / 2) . "<br>";
        }
    }
}
