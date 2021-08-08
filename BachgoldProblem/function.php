<?php
$hasil[] = "";
if (isset($_POST['cek'])) {
    $n = $_POST['input'];
    if (($n % 2) == 0) {
        $re = $n / 2;
        $hasil[] = $re . "<br>";

        for ($i = 0; $i < $re; $i++) {
            $hasil[] = "2 ";
        }
    } else {
        $r = ($n - 3);
        $re = ($r / 2);
        $hasil[] = floatval($re + 1) . "<br>";

        for ($i = 0; $i < $re; $i++) {
            $hasil[] = "2 ";
        }
        $hasil[] = "3";
    }
    $hasil[] = "<br>";
}
