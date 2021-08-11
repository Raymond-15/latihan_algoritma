<?php
$hasil[] = "";
if (isset($_POST['cek'])) {
    $n = $_POST['input'];
    for ($i = 0; $i < $n; $i++) {
        $hasil[] = ($i + 1) . " ";
    }
}
