<!DOCTYPE html>
<html>
<head>
    <title>POST</title>
</head>
<body>

    <form action="" method="post">
        masukkan angka : 
        <input type="text" name="angka">
        <br>
        <button type="submit" name="submit">TAMPILKAN</button>
    </form>
<br>

    <?php if ( isset($_POST['submit']) ) : ?>
        <h1><?php 

            $asc = $_POST['angka'];
            $dsc = $asc;

            $hasil_asc = explode(",", $asc);
            sort($hasil_asc);

            foreach ($hasil_asc as $data) {
                echo $data . " ";
            }

            echo "<br>";

            $hasil_dsc = explode(",", $dsc);
            rsort($hasil_dsc);

            foreach ($hasil_dsc as $data) {
                echo $data . " ";
            }
            
        ?></h1>

        <?php endif; ?>
    
</body>
</html>