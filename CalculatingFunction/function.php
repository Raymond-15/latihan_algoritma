<?php
$hasil = "";
if (isset($_POST['cek'])) {
    $n = $_POST['input'];
    if ($n % 2 == 0) {
        $hasil =  ($n / 2) . "<br>";
    } else {
        $hasil = (- ($n + 1) / 2);
    }
}
