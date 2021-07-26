<?php
function merge_sort($my_array)
{
    if (count($my_array) == 1) return $my_array;
    $mid = count($my_array) / 2;
    $left = array_slice($my_array, 0, $mid);
    $right = array_slice($my_array, $mid);
    $left = merge_sort($left);
    $right = merge_sort($right);
    return merge($left, $right);
}
function merge($left, $right)
{
    $res = array();
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] > $right[0]) {
            $res[] = $right[0];
            $right = array_slice($right, 1);
        } else {
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }
    }
    while (count($left) > 0) {
        $res[] = $left[0];
        $left = array_slice($left, 1);
    }
    while (count($right) > 0) {
        $res[] = $right[0];
        $right = array_slice($right, 1);
    }
    return $res;
}

$data = [
    [
        'nim' => 217,
        'nama' => 'Raymond Putra',
        'status' => 'LUNAS'
    ],
    [
        'nim' => 218,
        'nama' => 'Ahmad Zulkifli',
        'status' => 'LUNAS'
    ],
    [
        'nim' => 219,
        'nama' => 'Joko Walio',
        'status' => 'BELUM LUNAS'
    ],
    [
        'nim' => 223,
        'nama' => 'Rio Dwi',
        'status' => "BELUM LUNAS"
    ],
    [
        'nim' => 240,
        'nama' => 'Ishak Smith',
        'status' => 'BELUM LUNAS'
    ],
    [
        'nim' => 253,
        'nama' => 'Sherin Mulia',
        'status' => 'LUNAS'
    ]
];



foreach ($data as $ta) {
    $test_array[] = $ta['nama'];
}


$hasil = merge_sort($test_array);

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Merge</title>
</head>

<body>
    <div class="container">
        <div>
            <a class="btn btn-primary mt-3" href="index.php" role="button">Kembali</a>
        </div>

        <br>

        <form action="" method="post">
            <button class="btn btn-success" type="submit" name="urut">Urutkan</button>
        </form>

        <div class="col-4">
            <table class="table">
                <th>
                    <tr>
                        <th>Nama</th>
                    </tr>
                </th>
                <tbody>
                    <?php
                    if (isset($_POST['submit'])) {
                        for ($i = 0; $i < count($hasil); $i++) : ?>
                            <tr>
                                <td><?= $hasil[$i]; ?></td>
                            </tr>
                        <?php endfor;
                    } else {
                        foreach ($data as $d) : ?>
                            <tr>
                                <td><?= $d['nama']; ?></td>
                            </tr>
                    <?php endforeach;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>