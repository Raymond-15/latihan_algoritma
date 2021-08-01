<?php
function KMPSearch($pat, $txt)
{
    if ($pat == "") {
        echo "masukkan kata!";
    } else {
        $hasil[] = "";
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
                $hasil[] =  ($i - $j);
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
        if ($hasil != "") {
            echo "Data ada yang anda cari ada!";
        } else {
            echo "Data tidak ada!";
        }
    }
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

// $hasil[] = "";

$data = [
    [
        'nim' => 1810530217,
        'nama' => 'Raymond Putra',
        'status' => 'LUNAS'
    ],
    [
        'nim' => 1810530218,
        'nama' => 'Ahmad Zulkifli',
        'status' => 'LUNAS'
    ],
    [
        'nim' => 1810530219,
        'nama' => 'Joko Walio',
        'status' => 'BELUM LUNAS'
    ],
    [
        'nim' => 1810530220,
        'nama' => 'Rio Dwi',
        'status' => "BELUM LUNAS"
    ],
    [
        'nim' => 1810530221,
        'nama' => 'Ishak Smith',
        'status' => 'BELUM LUNAS'
    ],
    [
        'nim' => 1810530222,
        'nama' => 'Sherin Mulia',
        'status' => 'LUNAS'
    ]
];



// if (isset($_POST['submit'])) {
//     foreach ($data as $d) {

//         $arr[] = $d['nama'];
//     }


//     $txt = implode($arr);
//     $pat = $_POST['teks'];
//     KMPSearch($pat, $txt);
// }




// print_r($arr);

// echo $tes;


?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>KMP Algoritma</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row-lg">
            <!-- <h1 class="">Kamusmu</h1>
            <h5>Terjemahan Bahasa Indosesia ke Bahasa Sasak</h5> -->
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="teks" placeholder="masukkan kata..">
                        <button class="btn btn-outline-secondary" name="submit" type="submit" id="button-addon2">Cari</button>
                    </div>
                </form>

            </div>
        </div>

        <div class="row-lg">
            <?php
            if (isset($_POST['submit'])) {
                foreach ($data as $d) {

                    $arr[] = $d['nama'];
                }


                $txt = implode($arr);
                $pat = $_POST['teks'];
                KMPSearch($pat, $txt);
            }
            ?>
        </div>

        <div class="row-lg">
            <div class="col-lg-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $d) : ?>
                            <tr>
                                <td><?= $d['nim']; ?></td>
                                <td><?= $d['nama']; ?></td>
                                <td><?= $d['status']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>