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
            font-family:'Times New Roman', Times, serif;
            background-color: #2b2b2b;
        }

        .container {
            border: 3px solid rgb(49, 46, 46);
            width: 500px;
            margin: 40px auto;
            background-color: #dfded3;
            padding: 20px;
            border-radius: 50px;
            box-shadow: 0px 20px 6px 5px rgba(0,0,0,0.9);
            
        }
        .container table tr th{
            text-align: left;
        }
        .container .tabel_1 tr th h4{
            text-align: center;
        }
        .container .tabel_1 tr th{
            padding-right: 20px;
        }
        .container .tabel_1 {
            padding-bottom: 20px;
        }
        .container .tabel_2 tr th{
            text-align: left;
            width: 200px;
            
        }
        .container .tabel_2 tr th {
            padding-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <table class="tabel_1" border="0">
            <tr>
                <th colspan="4"><h4>LIBURAN</h4></th>
            </tr>
            <tr>
                <th>1.</th>
                <th>Bukit Bintang</th>
                <th>Rp.</th>
                <th>10.000\tiket</th>
            </tr>
            <tr>
                <th>2.</th>
                <th>Pantai Sadranan</th>
                <th>Rp.</th>
                <th>15.000\tiket</th>
            </tr>
            <tr>
                <th>3.</th>
                <th>Candi Borobudur</th>
                <th>Rp.</th>
                <th>50.000\tiket</th>
            </tr>
            <tr>
                <th>4.</th>
                <th>Candi Prambanan</th>
                <th>Rp.</th>
                <th>50.000\tiket</th>
            </tr>
            <tr>
                <th>5.</th>
                <th>Keraton Yogyakarta</th>
                <th>Rp.</th>
                <th>5.000\tiket</th>
            </tr>
            <tr>
                <th>6.</th>
                <th>Malioboro</th>
                <th>Rp.</th>
                <th>5.000\tiket</th>
            </tr>
            <tr>
                <th>7.</th>
                <th>Pendopo Lawas</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th>8.</th>
                <th>Goal Pindul</th>
                <th>Rp.</th>
                <th>100.000\tiket</th>
            </tr>
        </table>
        <form action="proses_2.php" method="post">
            <table class="tabel_2" border="0">
                <tr>
                    <th><label for="pilih1">Pilih : </label></th>
                    <th style="text-align: right;">
                        <select name="pilih_1" id="pilih1">
                            <option value="1">Bukit Bintang</option>
                            <option value="2">Pantai Sadranan</option>
                            <option value="3">Candi Borobudur</option>
                            <option value="4">Candi Prambanan</option>
                            <option value="5">Keraton Yogyakarta</option>
                            <option value="6">Malioboro</option>
                            <option value="7">Pendopo Lawas</option>
                            <option value="8">Goa Pindul</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <th><label for="tiket_1">Jumlah Tiket</label></th>
                    <th style="text-align: right;"><input type="number" name="tiket" id="tiket_1" min=1 value="1"></th>
                </tr>
                <tr>
                    <th colspan="2" style="text-align: center;"> 
                        <button type="submit" name="save">KIRIM</button>
                    </th>
                </tr>
            </table>
        </form>

    </div>
</body>

</html>