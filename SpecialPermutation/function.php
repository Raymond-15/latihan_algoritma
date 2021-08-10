<?php
$hasil[] = "";
$muncul = "";
if (isset($_POST['cek'])) {
    $n = $_POST['input'];
    if ($n < 2) {
        $muncul = "Input harus diatas angka 1!";
    } else {
        for ($j = 2; $j <= $n; $j++) {
            $hasil[] = $j . " ";
        }
        $hasil[] = 1 . "<br>";
    }
}
