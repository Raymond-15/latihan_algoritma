<?php
// Following program is a PHP
// implementation of Rabin Karp
// Algorithm given in the CLRS book

// d is the number of characters
// in the input alphabet
// $d = 256;

/* pat -> pattern
   txt -> text
   q -> A prime number
*/
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

    // The value of h would
    // be "pow(d, M-1)%q"
    for ($i = 0; $i < $M - 1; $i++)
        $h = ($h * $d) % $q;

    // Calculate the hash value
    // of pattern and first
    // window of text
    for ($i = 0; $i < $M; $i++) {
        $p = ($d * $p + floatval($pat[$i])) % $q;
        $t = ($d * $t + floatval($txt[$i])) % $q;
    }

    // Slide the pattern over
    // text one by one
    for ($i = 0; $i <= $N - $M; $i++) {

        // Check the hash values of
        // current window of text
        // and pattern. If the hash
        // values match then only
        // check for characters on
        // by one
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

        // Calculate hash value for
        // next window of text:
        // Remove leading digit,
        // add trailing digit
        if ($i < $N - $M) {
            $t = ($d * ($t - floatval($txt[$i]) *
                $h) + floatval($txt[$i +
                $M])) % $q;

            // We might get negative
            // value of t, converting
            // it to positive
            if ($t < 0)
                $t = ($t + $q);
        }
        // print_r($hasil);
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

// Function Call
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
        $txt = $_POST['teks'];
        $pat = $_POST['pattern'];
        search($pat, $txt, $q);
    }
}
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
                    <button type="submit" name="submit" class="btn btn-primary">CEK</button>
                </form>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>