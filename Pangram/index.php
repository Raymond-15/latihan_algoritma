<?php
function is_pangram($sentence)
{

    //define "alphabet"
    $alpha = range('a', 'z');

    //split lowercased string into array
    $a_sentence = str_split(strtolower($sentence));

    //check that there are no letters present in alpha not in sentence
    return empty(array_diff($alpha, $a_sentence));
}




?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Pangram</title>
</head>

<body>

    <div class="container mt-4">
        <div class="row">
            <h2>Pangram</h2>
        </div>
        <div class="row-lg mt-4">
            <div class="col-lg-6">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="input" placeholder="Masukkan teks..">
                        <div class="input-group-append">
                            <button class="btn btn-primary" name="cek" id="basic-addon2">CEK</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-lg">
                <?php
                if (isset($_POST['cek'])) {
                    $tests[] = $_POST['input'];
                    $hasil = implode(" ", $tests);
                    echo "Banyak huruf " . count(str_split($hasil)) . "<br>";

                    foreach ($tests as $txt) {
                        echo '"', $txt, '"', "<br>";
                        echo is_pangram($txt) ? " Teks ini merupakan Pangram" : " Teks ini bukan Pangram",  "<br>";
                    }
                }
                ?>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>