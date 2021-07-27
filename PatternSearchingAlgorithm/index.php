<?php
// PHP program for Naive Pattern
// Searching algorithm

function search($pat, $txt)
{
    $M = strlen($pat);
    $N = strlen($txt);

    // A loop to slide pat[]
    // one by one
    for ($i = 0; $i <= $N - $M; $i++) {

        // For current index i,
        // check for pattern match
        for ($j = 0; $j < $M; $j++)
            if ($txt[$i + $j] != $pat[$j])
                break;

        // if pat[0...M-1] =
        // txt[i, i+1, ...i+M-1]
        if ($j == $M) {
            echo "Pattern found at index " . $i . "<br>";
        }
    }
}

// $txt = "AABAACAADAABAAABAA";
// $pat = "AABA";
// search($pat, $txt);

$hasil = "";

// $text = $_POST['teks'];



// echo $text;

if (isset($_POST['submit'])) {
    $text = $_POST['teks'];
    $pattern = $_POST['pattern'];
    $txt = $text;
    $pat = $pattern;
    search($pat, $txt);
}


?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Naive</title>
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
                <?php if ($hasil != "") : ?>
                    <p><?= $hasil; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>