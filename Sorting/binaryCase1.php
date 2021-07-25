<?php
function binarySearch($arr, $l, $r, $x)
{
    if ($r >= $l) {
        $mid = ceil($l + ($r - $l) / 2);

        if ($arr[$mid] == $x)
            return floor($mid);

        if ($arr[$mid] > $x)
            return binarySearch(
                $arr,
                $l,
                $mid - 1,
                $x
            );

        return binarySearch(
            $arr,
            $mid + 1,
            $r,
            $x
        );
    }

    return -1;
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

foreach ($data as $d) {
    $hasil[] =  $d['nim'];
}

$arr = $hasil;

$n = count($arr);


?>

<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Binary</title>
</head>

<body>
    <div class="container">
        <div>
            <a class="btn btn-primary mt-3" href="index.php" role="button">Kembali</a>
        </div>
        <div class="col-4">
            <form action="" method="post">
                <div class="input-group mt-4 mb-3">
                    <input type="text" class="form-control" name="nim" placeholder="masukkan NIM.." autocomplete="off">
                    <button class="btn btn-outline-secondary" name="submit" type="submit" id="button-addon2">Cari</button>
                </div>
            </form>
        </div>


        <table class="table">
            <th>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Pembayaran</th>
                </tr>
            </th>
            <tbody>
                <?php if (isset($_POST['submit'])) {
                    $x = $_POST['nim'];
                    $result = binarySearch($arr, 0, $n - 1, $x);
                    if (($result == -1)) {
                        echo "data tidak ada";
                    } else {
                        if ($data[$result]['status'] == "LUNAS") {
                            echo "Mahasiswa dengan NIM " . $arr[$result] . " telah " . $data[$result]['status'] . " membayar SPP";
                        } else {
                            echo "Mahasiswa dengan NIM " . $arr[$result] . " " . $data[$result]['status'] . " membayar SPP";
                        }
                    }
                }
                foreach ($data as $d) : ?>
                    <tr>
                        <td><?= $d['nim']; ?></td>
                        <td><?= $d['nama']; ?></td>
                        <td><?= $d['status']; ?></td>
                    </tr>
                <?php endforeach;
                ?>
            </tbody>
        </table>
    </div>



    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>