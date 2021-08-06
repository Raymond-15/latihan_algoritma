<?php
$hasil[] = "";
if (isset($_POST['cek'])) {
    $n = $_POST['n'];
    $m = $_POST['m'];
    $p = 1;
    $OK = false;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $m; $j++) {
            if (($i % 2) != 0) {
                $hasil[] =  "#";
            } else {
                if (($p % 2) != 0) {
                    if ($j != $m) {
                        $hasil[] =  ".";
                    } else {
                        $hasil[] = "#";
                    }
                } else {
                    if ($j == 1) {
                        $hasil[] = "#";
                    } else {
                        $hasil[] = ".";
                    }
                }
            }
        }
        if (($i % 2) == 0)
            $p++;
        $hasil[] = "<br>";
    }
    return 0;
}
