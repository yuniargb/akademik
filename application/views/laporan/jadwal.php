<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Required meta tags -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

    <!-- my css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style-front.css?v=3.3') ?>">
    <!-- Icon css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Title -->
    <title>Pembayaran</title>
    <style>
        .head {
            margin-bottom: 10px;
            padding-bottom: 10px;
            background-color: white;
            color: black;
            padding-left: 15px;
            border-bottom: 3px solid black;
            line-height: 10px;
            position: relative;
            text-align: center;
        }

        .head h1,
        .head h2 {
            text-transform: uppercase;
        }

        .head h1 {
            font-size: 40px;
        }

        .img-fluid {
            float: left;
            left: 35px;
            position: absolute;
            max-width: 10%;
            margin-right: 0px;
            margin-top: 10px;
        }

        .table-custom th {
            border: 1px solid #2c2d2d !important;
            padding: 10px;
        }

        .table-custom td {
            padding: 10px;
            border: 1px solid black;
            overflow: block;
        }

        .table-custom {
            border: 1px solid black;
        }

        /*.both {
          clear: both;
          text-align: center
        }
        .center{
            text-align: center;
        }*/
        .kanan {
            position: absolute;
            float: right;
            right: 0px;
            text-align: center;
            width: 100px;
        }

        .ttd {
            width: 100%;
            border: 1px solid black;
        }

        .ttdttd {
            height: 100px;
            border-bottom: 1px solid black;
            margin-bottom: 5px;
            text-align: center;
        }

        .nama {
            text-align: center;
        }

        .isi {
            margin-top: 30px;
            width: 100%;
            border: 1px solid black;
            position: relative;
            right: 20px;
            width: 200px;
            border: none;
        }

        .table-custom {
            color: #232323;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <div class="body">
        <div class="head">
            <img src="https://alhusnakotatangerang.com/wp-content/uploads/2018/11/Logo-Al-Husna.png" alt="" width="120" height="100" class="img-fluid">
            <h2>LAPORAN NILAI</h2>
            <h2>SMA Al-Husna Tangerang</h2>
            <p>Jl. A. Damyati No.43-45, RT.6/RW.7, Sukarasa, Kec. Tangerang, Kota Tangerang, Banten 15111</p>
        </div>
        <table class="table-custom" align="center" style="width: 1000px;">
            <tr>
                <!-- <th>ID Nilai</th> -->
                <th>NIS</th>
                <th>Siswa</th>
                <th>Kelas</th>
                <th>Mata Pelajaran</th>
                <!-- <th>Kelas</th> -->
                <th class="text-center">Konigtif</th>
                <th class="text-center">Psikomotor</th>
                <th class="text-center">Afektif</th>
                <!-- <th class="text-center">Kelola</th> -->
            </tr>

            <?php
            foreach ($cetak as $value) {
                ?>
                <tr>
                    <td><?= $value->nis ?></td>
                    <td><?= $value->nama_siswa ?></td>
                    <td><?= $value->nama_kelas ?></td>
                    <td><?= $value->nama_mapel ?></td>
                    <td align="center"><?= $value->konigtif ?></td>
                    <td align="center"><?= $value->psikomotor ?></td>
                    <td align="center"><?= $value->afektif ?></td>
                </tr>

            <?php
            }
            ?>
        </table>
        <div class="isi">
            <div class="ttdttd">
                Kepala Sekolah
            </div>
            <div class="nama">
                <b>Yuniar Giffari Bachri S.Kom</b>
            </div>
        </div>



    </div>
</body>

</html>