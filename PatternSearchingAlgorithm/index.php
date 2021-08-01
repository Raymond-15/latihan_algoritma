<?php

function search($pat, $txt, $q)
{
    $hasil = ["kosong"];
    $M = strlen($pat);
    $N = strlen($txt);
    $i = 0;
    $j = 0;
    $p = 0; // hash value
    // for pattern


    $t = 0; // hash value
    // for txt

    $h = 1;
    $d = 1;

    for ($i = 0; $i < $M - 1; $i++)
        $h = ($h * $d) % $q;


    for ($i = 0; $i < $M; $i++) {
        $p = ($d * $p + floatval($pat[$i])) % $q;
        $t = ($d * $t + floatval($txt[$i])) % $q;
    }


    for ($i = 0; $i <= $N - $M; $i++) {


        if ($p == $t) {
            // Check for characters
            // one by one
            for ($j = 0; $j < $M; $j++) {
                if ($txt[$i + $j] != $pat[$j])
                    break;
            }

            // if p == t and pat[0...M-1] =
            // txt[i, i+1, ...i+M-1]
            if ($j == $M) {
                $hasil[] = $i;
            }
        }


        if ($i < $N - $M) {
            $t = ($d * ($t - floatval($txt[$i]) *
                $h) + floatval($txt[$i +
                $M])) % $q;


            if ($t < 0)
                $t = ($t + $q);
        }
    }
    if (implode("", $hasil) == "kosong") {
        echo '<script type="text/javascript">
        alert("Data tidak ada!");
    </script>';
    } else {
        echo "kata muncul sebanyak " . floatval(count($hasil) - 1) . " kali";
    }
}

// A prime number
$q = 101;


?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Pattern Searching</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row-lg">
            <div class="col-lg-6">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="teks" class="form-label">Teks</label>
                        <input type="text" name="teks" class="form-control" id="teks">
                    </div>
                    <div class="mb-3">
                        <label for="pattern" class="form-label">Pattern</label>
                        <input type="text" name="pattern" class="form-control" id="pattern">
                    </div>

                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="customRadioInline1" value="matchWholeWord" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Match Whole Word</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="customRadioInline1" value="matchCase" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">Match Case</label>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">CEK</button>

                </form>

            </div>
        </div>

        <div class="row-lg">
            <div class="col-lg">
                <?php
                $_POST['customRadioInline1'] = '';
                if (isset($_POST['submit'])) {
                    if ($_POST['teks'] == null) {
                        echo '<script type="text/javascript">
                        alert("kolom Teks tidak boleh kosong!");
                        </script>';
                    } elseif ($_POST['pattern'] == null) {
                        echo '<script type="text/javascript">
                        alert("kolom Pattern tidak boleh kosong!");
                        </script>';
                    } else {
                        if ($_POST['customRadioInline1'] == 'matchWholeWord') {
                            $txt = strtolower($_POST['teks']);
                            $pat = strtolower($_POST['pattern']);
                            search($pat, $txt, $q);
                        } elseif ($_POST['customRadioInline1'] == 'matchCase') {
                            $txt = $_POST['teks'];
                            $pat = $_POST['pattern'];
                            search($pat, $txt, $q);
                        } else {
                            echo '<script type="text/javascript">
                            alert("Radio button belum dipilih!");
                            </script>';
                        }
                    }
                }

                ?>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>