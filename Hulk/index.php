<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Hulk</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg">
                <p>
                    Dr. Bruce Banner hates his enemies (like others don't). As we all know, he can barely talk when he turns into the incredible Hulk. That's why he asked you to help him to express his feelings.
                    <br>
                    Hulk likes the Inception so much, and like that his feelings are complicated. They have n layers. The first layer is hate, second one is love, third one is hate and so on...
                    <br>
                    For example if n = 1, then his feeling is "I hate it" or if n = 2 it's "I hate that I love it", and if n = 3 it's "I hate that I love that I hate it" and so on.
                    <br>
                    Please help Dr. Banner.
                </p>
            </div>
        </div>

        <form class=" col-4" method="post" action="">
            <div class="form-group">
                <input type="text" name="input" class="form-control" id="exampleInputEmail1" placeholder="Input number" autocomplete="off" autofocus>
            </div>

            <button type="submit" name="says" class="btn btn-primary">Says</button>
        </form>

        <h5 class="col-4 mt-3">
            <?php
            if (isset($_POST['says'])) {
                $input = $_POST['input'];
                for ($i = 0; $i < $input; $i++) {
                    if ($i % 2 == 0) {
                        $hasil[] = "I hate ";
                    } else {
                        $hasil[] = "I love ";
                    }
                    if ($i != $input - 1) {
                        $hasil[] = "that ";
                    } else {
                        $hasil[] = "it ";
                    }
                }
                foreach ($hasil as $h) {
                    echo $h;
                }
            }
            ?>
        </h5>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>