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
        'nik' => 1234567891239865,
        'nama' => 'Raymond Putra',
        'status' => 'BELUM'
    ],
    [
        'nik' => 1234567891239866,
        'nama' => 'Ahmad Zulkifli',
        'status' => 'SUDAH'
    ],
    [
        'nik' => 1234567891239867,
        'nama' => 'Joko Walio',
        'status' => 'BELUM'
    ],
    [
        'nik' => 1234567891239868,
        'nama' => 'Rio Dwi',
        'status' => "BELUM"
    ],
    [
        'nik' => 1234567891239869,
        'nama' => 'Ishak Smith',
        'status' => 'SUDAH'
    ],
    [
        'nik' => 1234567891239870,
        'nama' => 'Sherin Mulia',
        'status' => 'BELUM'
    ]
];

foreach ($data as $d) {
    $hasil[] =  $d['nik'];
}

$test_array = $hasil;

$arr = merge_sort($test_array);

$n = count($arr);

$tampil = "";

if (isset($_POST['submit'])) {
    $x = $_POST['input'];
    $result = binarySearch($arr, 0, $n - 1, $x);
    if (($result == -1)) {
        $tampil =  "data tidak ada";
    } else {
        if ($data[$result]['status'] == "SUDAH") {
            $tampil =  "Peserta dengan NIK " . $arr[$result] . " " .  $data[$result]['status'] . " mengambil sertifikat";
        } else {
            $tampil =  "Peserta dengan NIK " . $arr[$result] . " " . $data[$result]['status'] . " mengambil sertifikat";
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Binary Case 2</title>
</head>

<body>
    <div class="container">
        <div class="col-lg">
            <a class="btn btn-primary mt-3" href="index.php" role="button">Kembali</a>
        </div>
        <div class="col-lg-4">
            <form action="" method="post">
                <div class="input-group mt-4 mb-3">
                    <input type="text" class="form-control" name="input" placeholder="masukkan NIK" autocomplete="off">
                    <button class="btn btn-success" name="submit" type="submit" id="button-addon2">Cari</button>
                </div>
            </form>
        </div>

        <?php if ($tampil != "") : ?>
            <div class="col-lg-6 alert alert-info alert-dismissible fade show" role="alert">
                <?= $tampil; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <table class="table col-lg">
            <thead>
                <tr>
                    <th class="col-lg-3" scope="col">NIK</th>
                    <th class="col-lg-6" scope="col">NAMA</th>
                    <th class="col-lg-2" scope="col">STATUS</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $d) : ?>
                    <tr>
                        <td><?= $d['nik']; ?></td>
                        <td><?= $d['nama']; ?></td>
                        <?php if ($d['status'] == "SUDAH") { ?>
                            <td class="d-flex justify-content-center badge bg-success rounded-pill mt-2"><?= $d['status']; ?></td>
                        <?php } else { ?>
                            <td class="d-flex justify-content-center badge bg-warning rounded-pill mt-2"><?= $d['status']; ?></td>
                        <?php } ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>