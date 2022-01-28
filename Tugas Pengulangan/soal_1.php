<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: rgba(70, 97, 97, 0.926);
            padding: 40px 0px;
            color: rgba(255, 255, 255, 0.775);
        }

        .container {
            border: 3px solid rgba(10, 209, 10, 0.844);
            box-shadow: 0px 0px 5px rgba(10, 209, 10, 0.659),
                0px 0px 5px rgba(10, 209, 10, 0.659);
            border-radius: 30px;
            width: 800px;
            margin: 40px auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            background-color: rgba(0, 0, 0, 0.8);
            transition: 1s;
        }

        body:hover .container {
            border: 3px solid rgba(37, 184, 209, 0.912);
            box-shadow: 0px 0px 5px rgba(37, 183, 209, 0.659),
                0px 0px 10px rgba(37, 183, 209, 0.659);
        }

        .container .box {
            padding-bottom: 10px;
        }

        .box.pemilihan .program {
            padding-bottom: 10px;
        }

        .container .box,
        .program,
        .pilihan {
            display: flex;
            flex-direction: column;
        }

        .container select,
        .container input,
        .container button {
            background-color: transparent;
            border: 3px solid rgba(10, 209, 10, 0.844);
            color: wheat;
            margin: 0 auto;
            width: 170px;
            border-radius: 25px;
            outline: none;
            padding: 5px;
            transition: 0.35s;
        }

        .container select option {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .container button:hover {
            width: 200px;
            border: 3px solid rgba(37, 184, 209, 0.912);
            background-color: rgba(37, 184, 209, 0.912);
        }

        .container select:focus,
        input:focus {
            width: 200px;
            border: 3px solid rgba(37, 184, 209, 0.912);
        }

        .container .pilihan select option {
            background-color: black;
        }

        .box.judul {
            text-align: center;
        }

        .box.kirim_1 {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .soal {
            margin: 0 auto;
            width: max-content;
        }

        .soal a button {
            border-radius: 15px;
            padding: 5px;
            width: 80px;
            outline: none;
            border: 3px solid rgba(10, 209, 10, 0.659);
            background-color: black;
            color: wheat;
            transition: 0.3s;
        }

        .soal a button:hover {
            background-color: rgba(0, 255, 255, 0.549);
            border: 3px solid rgba(0, 255, 255, 0.549);
            width: 100px;
        }
    </style>
</head>

<body>
    <div class="soal">
        <a href="Latihan.php"><button>SOAL 2</button></a>
    </div>
    <div class="container">
        <form action="" method="post">

            <div class="box judul">
                <b>
                    <h2>Pengulangan</h2>
                </b>
            </div>
            <div class="box pemilihan">
                <div class="program">
                    <label for="pilih">Pilih Program : </label>
                    <select name="program_1" id="pilih">
                        <option value="1">While</option>
                        <option value="2">Do While</option>
                    </select>
                </div>
                <div class="pilihan">
                    <label for="pilih1">Pilih Menu : </label>
                    <select name="project" id="pilih1">
                        <option value="1">Bilangan Genap Positif</option>
                        <option value="2">Bilangan Ganjil Positif</option>
                        <option value="3">Segitiga siku-siku Bintang</option>
                        <option value="4">Segitiga siku-siku terbalik vertikal bintang</option>
                        <option value="5">Segitiga sama kaki bintang</option>
                        <option value="6">Segitiga sama kaki terbalik vertikal bintang</option>
                    </select>
                </div>
            </div>
            <div class="box inputan">
                <label for="ib1">Input Bilangan : </label>
                <input type="number" name="ib" id="ib1" min="1" value="1" required>
            </div>
            <div class="box kirim_1">
                <button type="submit" name="Kirim">KIRIM</button>
            </div>
        </form>
        <div class="hasil">
<?php
if (isset($_POST['Kirim'])) {
    $program = $_POST['program_1'];
    $menu = $_POST['project'];
    $input = $_POST['ib'];

    if ($program == 1) {

        if ($menu == 1) {

            $a = 2;

            while ($a <= $input) {

                echo $a . " ";
                $a += 2;

            }

        } else if ($menu == 2) {

            $a = 1;

            while ($a <= $input) {

                echo $a . " ";
                $a += 2;

            }

        } else if ($menu == 3) {

            $a = 1;

            while ($a <= $input) {

                $b = 1;

                while ($b <= $a) {

                    echo "* ";
                    $b++;

                }

                echo "<br>";
                $a++;

            }

        } else if ($menu == 4) {

            $a = 1;
            $c = $input;

            while ($a <= $input) {

                $b = 1;

                while ($b <= $c) {

                    echo "* ";
                    $b++;

                }

                echo "<br>";
                $a++;
                $c--;
            }

        } else if ($menu == 5) {

            $a = 1;
            $c = $input;

            while ($a <= $input) {

                $b = 1;

                while ($b <= $c) {

                    echo '&nbsp;';
                    $b++;

                }

                $b = 1;

                while ($b <= $a) {

                    echo "* ";
                    $b++;

                }

                $a++;
                $c--;
                echo "<br>";

            }

        } else {

            $a = 1;
            $c = $input;

            while ($a <= $input) {

                $b = 1;

                while ($b <= $a) {

                    echo '&nbsp;';
                    $b++;

                }

                $b = 1;

                while ($b <= $c) {

                    echo "* ";
                    $b++;

                }

                echo "<br>";
                $a++;
                $c--;

            }

        }

    } else {

        if ($menu == 1) {

            $a = 2;

            do {

                echo $a . " ";
                $a += 2;

            } while ($a <= $input);

        } else if ($menu == 2) {

            $a = 1;

            do {

                echo $a . " ";
                $a += 2;

            } while ($a <= $input);

        } else if ($menu == 3) {

            $a = 1;

            do {

                $b = 1;

                do {

                    echo "* ";
                    $b++;

                } while ($b <= $a);

                echo "<br>";
                $a++;

            } while ($a <= $input);

        } else if ($menu == 4) {

            $a = 1;
            $c = $input;

            do {

                $b=1;

                do {

                    echo "* ";
                    $b++;

                } while ($b <= $c);

                echo "<br>";
                $a++;
                $c--;

            } while ($a <= $input);

        } else if ($menu == 5) {

            $a = 1;
            $c = $input;

            do {

                $b = 1;

                do {

                    echo '&nbsp;';
                    $b++;

                } while ($b <= $c);

                $b = 1;

                do {

                    echo "* ";
                    $b++;

                } while ($b <= $a);

                $a++;
                $c--;
                echo "<br>";

            } while ($a <= $input);

        } else {

            $a = 1;
            $c = $input;

            do {

                $b = 1;

                do {

                    echo '&nbsp;';
                    $b++;

                } while ($b <= $a);

                $b = 1;

                do {

                    echo "* ";
                    $b++;

                } while ($b <= $c);

                echo "<br>";
                $a++;
                $c--;

            } while ($a <= $input);

        }

    }
}
?>
        </div>
    </div>

</body>

</html>