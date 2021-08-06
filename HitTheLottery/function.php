<?php
$hasil = "";
$a = [100, 20, 10, 5, 1];

if (isset($_POST['cek'])) {

    $n = $_POST['money'];
    $ans = 0;


    for ($i = 0; $i < 5; $i++) {
        $ans += floor($n / $a[$i]);
        $n = $n % $a[$i];
    }
    $hasil =  $ans;
}
