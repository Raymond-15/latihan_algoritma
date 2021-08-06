<?php
include 'function.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Fox & Snake</title>

</head>

<body>
    <div class="container mt-4">
        <div class="col-lg-6">
            <form action="" method="post">
                <div class="form-group">
                    <input type="number" name="n" class="form-control" autocomplete="off" autofocus placeholder="input number for height..">
                    <input type="number" name="m" class="form-control" autocomplete="off" autofocus placeholder="input number for width..">
                </div>

                <button type="submit" name="cek" class="btn btn-primary">CEK</button>
            </form>
        </div>

        <div class="row-lg mt-3">
            <div class="col-lg-6">
                <h4>
                    <?php foreach ($hasil as $h) {
                        echo $h;
                    }; ?>
                </h4>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>