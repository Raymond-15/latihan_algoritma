<?php
$hasil = "";
$x = "";
if (isset($_POST['cek'])) {
    $x = $_POST['number'];
    if (($x % 2) == 0) {
        $hasil =  "4"  . " " . ($x - 4) . "<br>";
    } else {
        $hasil = "9" . " "  .  ($x - 9) . "<br>";
        return 0;
    }
}
