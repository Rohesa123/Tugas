<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <a href="soal_1.php"><button>SOAL 1</button></a>
    </div>
    <form action="" method="post">
        <div class="container">
            <div class="box judul">
                <b>
                    <h2>Pengulangan</h2>
                </b>
            </div>
            <div class="box pemilihan">
                <div class="program">
                    <label for="pilih">Pilih Program : </label>
                    <select name="program_1" id="pilih">
                        <option value="1">For</option>
                        <option value="2">While</option>
                        <option value="3">Do While</option>
                    </select>
                </div>
                <div class="pilihan">
                    <label for="pilih1">Input Menu : </label>
                    <input type="number" name="menu" id="pilih1" required min="1" max="4" value="1">
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
    $menu = $_POST['menu'];
    $input = $_POST['ib'];

    if ($program == 1) {

        if ($menu == 1) {

            for ($a = 1; $a <= $input; $a++) {

                for ($b = 1; $b <= $a; $b++) {

                    echo $b . " ";

                }

                echo "<br>";

            }

        } else if ($menu == 2) {

            $d = $input;

            for ($a = 1; $a <= $input; $a++) {

                for ($b = 1; $b <= $a; $b++) {

                    echo "&nbsp;";

                }

                for ($c = 1; $c <= $d; $c++) {

                    echo $c . " ";

                }

                $d--;
                echo "<br>";

            }

        } else if ($menu == 3) {

            $c = $input;

            for ($a = 1; $a <= $input; $a++) {

                for ($b = $input; $b >= $c; $b--) {

                    echo $b . " ";

                }

                $c--;
                echo "<br>";

            }

        } else {

            for ($a = 1; $a <= $input; $a++) {

                for ($b = $input; $b >= $a; $b--) {

                    echo $b . "";

                }

                echo "<br>";

            }

        }

    } else if ($program == 2) {

        if ($menu == 1) {

            $a = 1;

            while ($a <= $input) {

                $b = 1;

                while ($b <= $a) {

                    echo $b . " ";
                    $b++;

                }

                echo "<br>";
                $a++;

            }

        } else if ($menu == 2) {

            $a = 1;
            $b = $input;

            while ($a <= $input) {

                $c = 1;

                while ($c <= $a) {

                    echo '&nbsp;';
                    $c++;

                }

                $c = 1;

                while ($c <= $b) {

                    echo $c . " ";
                    $c++;

                }

                echo "<br>";
                $b--;
                $a++;

            }

        } else if ($menu == 3) {

            $a = 1;
            $c = $input;

            while ($a <= $input) {

                $b = $input;

                while ($b >= $c) {

                    echo $b . " ";
                    $b--;

                }

                echo "<br>";
                $c--;
                $a++;

            }

        } else {

            $a = 1;

            while ($a <= $input) {

                $b = $input;

                while ($b >= $a) {

                    echo $b . " ";
                    $b--;

                }

                echo "<br>";
                $a++;

            }

        }

    } else {

        if ($menu == 1) {

            $a = 1;

            do {

                $b = 1;

                do {

                    echo $b . " ";
                    $b++;

                } while ($b <= $a);

                echo "<br>";
                $a++;

            } while ($a <= $input);

        } else if ($menu == 2) {

            $a = 1;
            $b = $input;

            do {

                $c = 1;

                do {

                    echo '&nbsp;';
                    $c++;

                } while ($c <= $a);

                $c = 1;

                do {

                    echo $c . " ";
                    $c++;

                } while ($c <= $b);

                echo "<br>";
                $b--;
                $a++;

            } while ($a <= $input);

        } else if ($menu == 3) {

            $a = 1;
            $c = $input;

            do {

                $b = $input;

                do {

                    echo $b . " ";
                    $b--;

                } while ($b >= $c);

                echo "<br>";
                $c--;
                $a++;

            } while ($a <= $input);

        } else {

            $a = 1;

            do {

                $b = $input;

                do {

                    echo $b . " ";
                    $b--;

                } while ($b >= $a);

                echo "<br>";
                $a++;

            } while ($a <= $input);

        }

    }

}
?>
    </div>
    </div>
</body>

</html>