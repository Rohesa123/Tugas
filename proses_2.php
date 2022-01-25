<?php
session_start();
if (isset($_POST['save'])) {
    $_SESSION['pilih_1'] = $_POST['pilih_1'];
    $_SESSION['tiket'] = $_POST['tiket'];
    $_SESSION['total_1'] = "0%";
    $_SESSION['diskon'] = 0;
    function hasil($a, $b)
    {
        return $a * $b;
    }
    if ($_SESSION['pilih_1'] == 1) {
        $_SESSION['tempat'] = "Bukit Bintang";
        $_SESSION['harga'] = 10000;
        $_SESSION['total'] = hasil($_SESSION['tiket'], $_SESSION['harga']);
        $_SESSION['harga_awal'] = $_SESSION['total'];
        if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 30000 && hasil($_SESSION['tiket'], $_SESSION['harga']) < 60000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.2);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.2);
            $_SESSION['total_1'] = "20%";
        } else if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 60000 && hasil($_SESSION['tiket'], $_SESSION['harga']) < 80000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.25);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.25);
            $_SESSION['total_1'] = "25%";

        } else if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 80000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.35);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.35);
            $_SESSION['total_1'] = "35%";
        }
    } else if ($_SESSION['pilih_1'] == 2) {
        $_SESSION['tempat'] = "Pantai Sadranan";
        $_SESSION['harga'] = 15000;
        $_SESSION['total'] = hasil($_SESSION['tiket'], $_SESSION['harga']);
        $_SESSION['harga_awal'] = $_SESSION['total'];
        if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 35000 && hasil($_SESSION['tiket'], $_SESSION['harga']) < 65000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.2);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.2);
            $_SESSION['total_1'] = "20%";
        } else if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 65000 && hasil($_SESSION['tiket'], $_SESSION['harga']) < 85000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.3);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.3);
            $_SESSION['total_1'] = "30%";
        } else if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 85000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.35);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.35);
            $_SESSION['total_1'] = "35%";
        }
    } else if ($_SESSION['pilih_1'] == 3) {
        $_SESSION['tempat'] = "Candi Borobudur";
        $_SESSION['harga'] = 50000;
        $_SESSION['total'] = hasil($_SESSION['tiket'], $_SESSION['harga']);
        $_SESSION['harga_awal'] = $_SESSION['total'];
        if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 100000 && hasil($_SESSION['tiket'], $_SESSION['harga']) < 150000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.2);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.2);
            $_SESSION['total_1'] = "20%";
        } else if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 150000 && hasil($_SESSION['tiket'], $_SESSION['harga']) < 200000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.3);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.3);
            $_SESSION['total_1'] = "30%";
        } else if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 200000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.5);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.5);
            $_SESSION['total_1'] = "50%";
        }

    } else if ($_SESSION['pilih_1'] == 4) {
        $_SESSION['tempat'] = "Candi Prambanan";
        $_SESSION['harga'] = 50000;
        $_SESSION['total'] = hasil($_SESSION['tiket'], $_SESSION['harga']);
        $_SESSION['harga_awal'] = $_SESSION['total'];
        if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 100000 && hasil($_SESSION['tiket'], $_SESSION['harga']) < 150000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.2);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.2);
            $_SESSION['total_1'] = "20%";
        } else if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 150000 && hasil($_SESSION['tiket'], $_SESSION['harga']) < 200000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.3);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.3);
            $_SESSION['total_1'] = "30%";
        } else if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 200000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.5);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.5);
            $_SESSION['total_1'] = "50%";
        }

    } else if ($_SESSION['pilih_1'] == 5) {
        $_SESSION['tempat'] = "Keraton Yogyakarta";
        $_SESSION['harga'] = 5000;
        $_SESSION['total'] = hasil($_SESSION['tiket'], $_SESSION['harga']);
        $_SESSION['harga_awal'] = $_SESSION['total'];
        if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 25000 && hasil($_SESSION['tiket'], $_SESSION['harga']) < 40000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.2);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.2);
            $_SESSION['total_1'] = "20%";
        } else if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 40000 && hasil($_SESSION['tiket'], $_SESSION['harga']) < 60000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.4);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.4);
            $_SESSION['total_1'] = "40%";
        } else if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 60000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.45);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.45);
            $_SESSION['total_1'] = "45%";
        }

    } else if ($_SESSION['pilih_1'] == 6) {
        $_SESSION['tempat'] = "Malioboro";
        $_SESSION['harga'] = 5000;
        $_SESSION['total'] = hasil($_SESSION['tiket'], $_SESSION['harga']);
        $_SESSION['harga_awal'] = $_SESSION['total'];
        if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 25000 && hasil($_SESSION['tiket'], $_SESSION['harga']) < 40000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.2);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.2);
            $_SESSION['total_1'] = "20%";
        } else if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 40000 && hasil($_SESSION['tiket'], $_SESSION['harga']) < 60000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.4);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.4);
            $_SESSION['total_1'] = "40%";
        } else if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 60000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.45);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.45);
            $_SESSION['total_1'] = "45%";
        }

    } else if ($_SESSION['pilih_1'] == 7) {
        $_SESSION['tempat'] = "Pendopo Lawas";
    } else if ($_SESSION['pilih_1'] == 8) {
        $_SESSION['tempat'] = "Goa Pindul";
        $_SESSION['harga'] = 100000;
        $_SESSION['total'] = hasil($_SESSION['tiket'], $_SESSION['harga']);
        $_SESSION['harga_awal'] = $_SESSION['total'];
        if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 300000 && hasil($_SESSION['tiket'], $_SESSION['harga']) < 400000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.2);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.2);
            $_SESSION['total_1'] = "20%";
        } else if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 400000 && hasil($_SESSION['tiket'], $_SESSION['harga']) < 600000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.4);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.4);
            $_SESSION['total_1'] = "40%";
        } else if (hasil($_SESSION['tiket'], $_SESSION['harga']) >= 600000) {
            $_SESSION['diskon'] = ($_SESSION['total'] * 0.45);
            $_SESSION['total'] = $_SESSION['total'] - ($_SESSION['total'] * 0.45);
            $_SESSION['total_1'] = "45%";
        }

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Cerita</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
        }

        table tr th {
            text-align: left;
        }
        .container_2 {
            width: 600px;
            border: 3px solid rgb(0,0,0);
            margin: 40px auto;
            padding: 20px;
            border-radius: 25px;
            box-shadow: 0px 10px 6px 0px rgba(0,0,0,0.9);
        }
        .container_2 table tr th {
            padding-right: 20px;
            padding-bottom: 8px;
        }
        .container_2 table tr {
            width: 300px;
        }

        .container_1 {
            width: 700px;
            border: 3px solid black;
            margin: 50px auto;
            padding: 20px;
            border-radius: 25px;
            box-shadow: 0px 10px 5px 0px rgba(0,0,0,0.9);
        }

        .container_1 .tabel_a1 {
            margin: 0 auto;
        }
        .container_1 .tabel_a1 {
            width: 600px;
        }
        .container_1 .tabel_a1 tr th{
            padding-bottom: 8px;
        }
    </style>
</head>

<body>
    <?php
if ($_SESSION['pilih_1'] == 7) {
    ?>
    <div class="container_1">
    <form action="proses_3.php" method="post">
        <table class="tabel_a1" border="0">
            <tr>
                <th colspan="3" style="text-align: center;">
                    <h3>Selamat Datang Di Pendopo Lawas</h3>
                </th>
            </tr>
            <tr>
                <th colspan="2" style="text-align: center;">
                    <h4>MAKANAN</h4>
                </th>
            </tr>
            <tr>
                <th><label for="menu__1">1. Roti Bakar</label></th>
                <th>Rp. 20.000</th>
                <th style="text-align: right;"><input type="number" name="menu_1" id="menu__1" min="0" value="0" required></th>
            </tr>
            <tr>
                <th><label for="menu__2">2. Siomay</label></th>
                <th>Rp. 10.000</th>
                <th style="text-align: right;"><input type="number" name="menu_2" id="menu__2" min="0" value="0" required></th>
            </tr>
            <tr>
                <th><label for="menu__3">3. Martabak Mie</label></th>
                <th>Rp. 12.000</th>
                <th style="text-align: right;"><input type="number" name="menu_3" id="menu__3" min="0" value="0" required></th>
            </tr>
            <tr>
                <th colspan="2" style="text-align: center;">
                    <h4>MINUMAN</h4>
                </th>
            <tr>
                <th><label for="menu__4">4. Cappucino</label></th>
                <th>Rp. 15.000</th>
                <th style="text-align: right;"><input type="number" name="menu_4" id="menu__4" min="0" value="0" required></th>
            </tr>
            <tr>
                <th><label for="menu__5">5. Es Teh Manis</label></th>
                <th>Rp. 10.000</th>
                <th style="text-align: right;"><input type="number" name="menu_5" id="menu__5" min="0" value="0" required></th>
            </tr>
            <tr>
                <th><label for="menu__6">6. Pop Ice</label></th>
                <th>Rp. 8.000</th>
                <th style="text-align: right;"><input type="number" name="menu_6" id="menu__6" min="0" value="0" required></th>
            </tr>
            <tr>
                <th colspan="2" style="text-align: center;"><button type="submit" name="save_2">PESAN</button></th>
            </tr>
        </table>
    </form>
    </div>
    <?php
} else {
    ?>
    <div class="container_2">
    <form action="" method="post">
        <table class="tabel_b1" border="0">
            <tr>
                <th colspan="2" style="text-align: center;">
                    <h4>PEMBAYARAN</h4>
                </th>
            </tr>
            <tr>
                <th>Selamat Datang Di : </th>
                <th><?php echo $_SESSION['tempat']; ?></th>
            </tr>
            <tr>
                <th>Harga Awal Rp. </th>
                <th><?php echo number_format($_SESSION['harga_awal'], 0, ".", "."); ?></th>
            </tr>
            <tr>
                <th>Diskon</th>
                <th><?php echo $_SESSION['total_1']; ?></th>
            </tr>
            <tr>
                <th>Diskon Yang Didapat Rp.</th>
                <th><?php echo number_format($_SESSION['diskon'], 0, ".", "."); ?></th>
            </tr>
            <tr>
                <th>Jumlah uang yang harus Dibayarkan Rp.</th>
                <th><?php echo number_format($_SESSION['total'], 0, ".", "."); ?></th>
            </tr>
            <?php
$_SESSION['ulang'] = true;
    while ($_SESSION['ulang']) {
        ?>
            <tr>
                <th><label for="Pembayaran_1">Bayar</label></th>
                <th><input type="number" name="pembayaran" id="pembayaran_1" min="0" value="0"></th>
            </tr>
            <tr>
                <th><button type="submit" name="save_1">BAYAR</button></th>
            </tr>
        </table>
    </form>
    <?php
$_SESSION['ulang'] = false;
        if (isset($_POST['save_1'])) {
            $_SESSION['pembayaran'] = $_POST['pembayaran'];
            $_SESSION['ulang_1'] = $_SESSION['pembayaran'] - $_SESSION['total'];

            if (($_SESSION['ulang_1'] < 0)) {
                ?>
    <table class="tabel_b2">
        <tr>
            <th>
                <?php echo "Uang Anda Kurang Rp. " . number_format($_SESSION['total'] - $_SESSION['pembayaran'], 0, ".", "."); ?>
            </th>
        </tr>
        <tr>
            <th>
                Silahkan input pembayaran lagi !
            </th>
        </tr>
    </table>
    <?php
$_SESSION['ulang'] = true;
            } else {
                ?>
    <table class="tabel_b3">
        <tr>
            <th>
                <?php echo "Kembalian Anda Rp. " . number_format($_SESSION['pembayaran'] - $_SESSION['total'], 0, ".", "."); ?>
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
$_SESSION['ulang'] = false;
                session_unset();
                session_destroy();
            }
            $_SESSION['ulang'] = false;

        }

    }
}
// session_unset();
// session_destroy();

?>

    <script type="text/javascript">
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>