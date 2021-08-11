<?php
$hasil = "";
if (isset($_POST['cek'])) {
    $n = $_POST['input'];
    $output = 2 * (pow(2, $n / 2 - 1) - 1) + pow(2, $n) - pow(2, $n / 2) * (pow(2, $n / 2) - 1);
    $hasil = $output . "<br>";
}
