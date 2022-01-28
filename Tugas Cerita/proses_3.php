<?php
session_start();
if (isset($_POST['save_2'])) {
    // session_unset();
    // session_destroy();

    $_SESSION['menu_1'] = $_POST['menu_1'];
    $_SESSION['menu_2'] = $_POST['menu_2'];
    $_SESSION['menu_3'] = $_POST['menu_3'];
    $_SESSION['menu_4'] = $_POST['menu_4'];
    $_SESSION['menu_5'] = $_POST['menu_5'];
    $_SESSION['menu_6'] = $_POST['menu_6'];

    $_SESSION['menu_1'] *= 20000;
    $_SESSION['menu_2'] *= 10000;
    $_SESSION['menu_3'] *= 12000;
    $_SESSION['menu_4'] *= 15000;
    $_SESSION['menu_5'] *= 10000;
    $_SESSION['menu_6'] *= 8000;

    $_SESSION['hasil'] = $_SESSION['menu_1'] + $_SESSION['menu_2'] + $_SESSION['menu_3'] + $_SESSION['menu_4'] + $_SESSION['menu_5'] + $_SESSION['menu_6'];
}
?>

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
        }

        .container {
            width: 400px;
            border: 3px solid black;
            margin: 50px auto;
            padding: 20px;
            border-radius: 25px;
            box-shadow: 0px 10px 5px 0px rgba(0, 0, 0, 0.9);
        }

        .container table tr th {
            text-align: left;
            padding-bottom: 8px;
            padding-right: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <table border="0">
                <tr>
                    <th>
                        <h4>STRUK</h4>
                    </th>
                </tr>
                <tr>
                    <th>Total Belanjaan</th>
                    <th>RP.
                        <?php echo number_format($_SESSION['hasil'], 0, ".", "."); ?>
                    </th>
                </tr>
                <?php
$_SESSION['ulang_1'] = true;
while ($_SESSION['ulang_1']) {
    ?>
                <tr>
                    <th><label for="bayar1">Input Bayar</label></th>
                    <th><input type="number" name="bayar_1" id="bayar1" min="0" value="0"></th>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="bayar_2">BAYAR</button>
                    </th>
                </tr>
            </table>
        </form>
        <?php
if (isset($_POST['bayar_2'])) {
        $_SESSION['bayar_1'] = $_POST['bayar_1'];
        $_SESSION['hasil_2'] = $_SESSION['bayar_1'] - $_SESSION['hasil'];
        if ($_SESSION['hasil_2'] < 0) {
            ?>
        <table>
            <tr>
                <th>
                    <?php echo "Uang Anda Kurang Rp. " . number_format($_SESSION['hasil'] - $_SESSION['bayar_1'], 0, ".", "."); ?>
                </th>
            </tr>
            <tr>
                <th>
                    Silahkan input pembayaran lagi !
                </th>
            </tr>
        </table>
        <?php
$_SESSION['ulang_1'] = true;
        } else {
            ?>
        <table>
            <tr>
                <th>
                    <?php echo "Kembalian Anda Rp. " . number_format($_SESSION['bayar_1'] - $_SESSION['hasil'], 0, ".", "."); ?>
                </th>
            </tr>
            <tr>
                <th>
                    <a href="proses_1.php">
                        <link rel="stylesheet" href="proses_1.php">Kembali Ke Halaman Awal
                    </a>
                </th>
            </tr>
        </table>
    </div>
    <?php
$_SESSION['ulang_1'] = false;
            session_unset();
            session_destroy();

        }
        $_SESSION['ulang_1'] = false;
    }
    $_SESSION['ulang_1'] = false;
}
?>

    <script type="text/javascript">
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>