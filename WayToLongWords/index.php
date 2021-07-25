<?php
$hasil = "";
if (isset($_POST['submit'])) {
    $text = $_POST['text'];
    $arr_text = str_split($text);
    $l = count($arr_text);
    if ($l > 4) {
        $hasil =  $arr_text[0] . "" . ($l - 2) . $arr_text[$l - 1];
    } else {
        $hasil =  implode($arr_text);
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>WayToLongWords</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg">
                <form method="post" action="index.php">
                    Masukkan kata :
                    <input type="text" name="text" autocomplete="off">
                    <button class="btn btn-primary" type="submit" name="submit">CEK</button>
                </form>
                <br>

                <?php if ($hasil != "") : ?>

                    <div class="alert alert-success col-lg-4" role="alert">
                        <?= $hasil; ?>
                    </div>

                <?php endif; ?>

            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>