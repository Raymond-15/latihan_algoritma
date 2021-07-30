<html>

<head>

    <link rel="stylesheet" href="style.css">
    <title>Suffix Array</title>
</head>

<body>
    <div id="container">

        <header>
            <h1>Tugas #4 Suffix Array</h1>
        </header>

        <section>
            <aside>
                <h2>Input String</h2>
                <form method="post" name="form">
                    <table>
                        <tr>
                            <td><label>String input</label></td>
                            <td><input type="text" name="input" placeholder="masukkan string" required></td>
                        </tr>

                        <tr>
                            <td><label>Jumlah Perulangan</label></td>
                            <td><input type="text" name="ulang" placeholder="masukkan perulangan" required></td>
                        </tr>
                    </table>
                    <br>
                    <fieldset>
                        <legend>Operasi Pengolahan String</legend>
                        <table>
                            <tr>
                                <td width="120"><input type="radio" name="pilih" value="prefix">Prefix</td>
                                <td><input type="radio" name="tipe" value="star">Star Clouser</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="pilih" value="suffix">Suffix</td>
                                <td><input type="radio" name="tipe" value="plus">Positif Clouser</td>
                            </tr>
                        </table>
                    </fieldset>
                    <input type="reset" name="reset" class="btn" value="Ulangi">
                    <input type="submit" name="submit" class="btn" value="Proses">
                </form>
            </aside>

            <article>
                <h2>Hasil Pengolahan String</h2>
                <textarea readonly><?php
                                    if (isset($_POST['submit'])) {
                                        $input = $_POST['input'];
                                        $ulang = $_POST['ulang'];

                                        if ($_POST['pilih'] == 'prefix') {
                                            echo "=============================\n";
                                            echo "Hasil prefix string = " . $input . "\n";
                                            echo "=============================\n";
                                            echo "\nlamda";
                                            for ($i = 0; $i <= strlen($input); $i++) {
                                                for ($j = 0; $j < $i; $j++) {
                                                    echo $input[$j];
                                                }
                                                echo "\n";
                                            }
                                        }

                                        if ($_POST['pilih'] == 'suffix') {
                                            echo "=============================\n";
                                            echo "Hasil suffix string = " . $input . "\n";
                                            echo "=============================\n\n";
                                            for ($i = 0; $i < strlen($input); $i++) {
                                                for ($j = $i; $j < strlen($input); $j++) {
                                                    echo $input[$j];
                                                }
                                                echo "\n";
                                            }
                                            echo "lamda\n";
                                        }

                                        if ($_POST['tipe'] == 'star') {
                                            echo "\n=============================\n";
                                            echo "Hasil operasi Star Clouser\n";
                                            echo "=============================\n";
                                            echo "\nlamda ";
                                            for ($i = 0; $i <= $ulang; $i++) {
                                                for ($j = 0; $j < $i; $j++) {
                                                    echo $input;
                                                }
                                                echo "\n";
                                            }
                                        }

                                        if ($_POST['tipe'] == 'plus') {
                                            echo "\n=============================\n";
                                            echo "Hasil operasi Positif Clouser\n";
                                            echo "=============================\n";
                                            for ($i = 0; $i <= $ulang; $i++) {
                                                for ($j = 0; $j < $i; $j++) {
                                                    echo $input;
                                                }
                                                echo "\n";
                                            }
                                        }
                                    }

                                    ?>
            </textarea>
        </section>

        <div class="clear"></div>

    </div>

</body>

</html>