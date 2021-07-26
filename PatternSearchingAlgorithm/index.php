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
        if ($j == $M)
            echo "Pattern found at index ", $i . "\n";
    }
}

$text = "";

// Driver Code
$txt = $text;
$pat = "AAB";
search($pat, $txt);
?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Rabin Karp</title>
</head>

<body>

    <form class="mt-4" action="" method="post">
        <input type="text" name="input">
        <br>
        <input type="text" name="cek" id="cek">
        <button class="btn btn-success" type="submit" name="cek">CEK</button>
        <?php $text = $_POST['cek']; ?>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>