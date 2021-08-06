<?php
include 'function.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Calculating Function</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row-lg">
            <div class="col-lg-8">
                <p>For a positive integer n let's define a function f:
                    f(n) =  - 1 + 2 - 3 + .. + ( - 1)nn
                    <br>
                    Your task is to calculate f(n) for a given integer n.
                    <br>
                    <br>
                    Input
                    The single line contains the positive integer n (1 ≤ n ≤ 1015).
                    Output
                    Print f(n) in a single line.
                </p>
            </div>
        </div>

        <div class="col-lg-6">
            <form action="" method="post">
                <div class="form-group">
                    <input type="number" name="input" class="form-control" autocomplete="off" autofocus placeholder="input number">
                </div>

                <button type="submit" name="cek" class="btn btn-primary">CEK</button>
            </form>
        </div>

        <div class="row-lg mt-3">
            <div class="col-lg-6">
                <h4><?= $hasil; ?></h4>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>