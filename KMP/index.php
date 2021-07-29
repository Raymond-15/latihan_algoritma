<?php
function KMPSearch($pat, $txt)
{
    $M = strlen($pat);
    $N = strlen($txt);

    $lps = array_fill(0, $M, 0);

    computeLPSArray($pat, $M, $lps);

    $i = 0; // index for txt[]
    $j = 0; // index for pat[]
    while ($i < $N) {
        if ($pat[$j] == $txt[$i]) {
            $j++;
            $i++;
        }

        if ($j == $M) {
            $hasil = ($i - $j);
            $j = $lps[$j - 1];
        }

        // mismatch after j matches
        else if ($i < $N && $pat[$j] != $txt[$i]) {
            // Do not match lps[0..lps[j-1]] characters,
            // they will match anyway
            if ($j != 0)
                $j = $lps[$j - 1];
            else
                $i = $i + 1;
        }
    }

    echo $hasil;
}

// Fills lps[] for given patttern pat[0..M-1]
function computeLPSArray($pat, $M, &$lps)
{
    // length of the previous longest prefix suffix
    $len = 0;

    $lps[0] = 0; // lps[0] is always 0

    // the loop calculates lps[i] for i = 1 to M-1
    $i = 1;
    while ($i < $M) {
        if ($pat[$i] == $pat[$len]) {
            $len++;
            $lps[$i] = $len;
            $i++;
        } else // (pat[i] != pat[len])
        {
            // This is tricky. Consider the example.
            // AAACAAAA and i = 7. The idea is similar
            // to search step.
            if ($len != 0) {
                $len = $lps[$len - 1];

                // Also, note that we do not increment
                // i here
            } else // if (len == 0)
            {
                $lps[$i] = 0;
                $i++;
            }
        }
    }
}

$hasil = "";

$data = [""];


$txt = "ABABDABACDABABCABAB";
$pat = "ABABCABAB";
KMPSearch($pat, $txt);
?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>KMP Algoritma</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">


            </div>
        </div>
        <div class="row">
            <p><?= $hasil; ?></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>