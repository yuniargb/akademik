<html>

<head>
    <title>Cetak PDF</title>
</head>
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
    }

    .head h1,
    .head h3 {
        text-transform: uppercase;
    }

    .head h1 {
        font-size: 20px;
    }

    .img-fluid {
        float: left;
        left: 25px;
        position: absolute;
        max-width: 10%;
        margin-right: 20px;
        margin-top: 10px;
    }

    .table-custom th {
        border: 1px solid #2c2d2d !important;
        padding: 10px;
    }

    .table-custom td {
        padding: 10px;
        border: 1px solid black;
    }

    .table-custom {
        border: 1px solid black;
    }


    .kanan {
        float: right;
        position: absolute;
        right: 10px;
        border-left: 1px solid black;
        padding-left: 15px;
        height: 50px;
    }

    .kpd {
        margin-bottom: 15px;
    }

    .ttd {
        width: 100%;
        border: 1px solid black;
    }

    .ttdttd {
        text-align: center;
        height: 100px;
    }

    .ttdttds {
        text-align: center;
        height: 114px;
    }

    .isi {
        width: 100%;
    }

    .petugas {
        text-align: center;
        border-bottom: 2px solid black;
    }

    .table-custom {
        color: #232323;
        border-collapse: collapse;
    }
</style>

<body>
    <div class="body">
        <div class="head">
            <img src="https://alhusnakotatangerang.com/wp-content/uploads/2018/11/Logo-Al-Husna.png" alt="" width="60" height="50" class="img-fluid">
            <h1>SMA AL-HUSNA KOTA TANGERANG</h1>
            <!-- <p>Jl. A. Damyati No.43-45, RT.6/RW.7, Sukarasa, Kec. Tangerang, Kota Tangerang, Banten 15111</p> -->
            <div class="kanan">
                <h4>BUKTI PEMBAYARAN</h4>
                <!-- <h5>KODE SURAT : <?= $surat ?></h5> -->
            </div>
        </div>
        <div class="container">
            <div class="kpd">
                <p>Atas Nama:</p>
                <table>
                    <tr>
                        <th width="100">NIS</th>
                        <td width="350">: <?= $cetak->nis ?></td>
                    </tr>
                    <tr>
                        <th width="100">Nama</th>
                        <td width="150">: <?= $cetak->nama_siswa ?></td>
                    </tr>
                    <tr>
                        <th width="100">Kelas</th>
                        <td width="350">: <?= $cetak->nama_kelas ?></td>
                    </tr>
                    <!-- <tr>
                        <th width="100">Tanggal Bayar</th>
                        <td width="350">: <?= date('d-m-Y', strtotime($cetak->tgl_bayar)) ?></td>
                    </tr>
                    <tr>
                        <th width="100">Bulan</th>
                        <td width="350">: <?= $cetak->pembayaran ?></td>
                    </tr>
                    <tr>
                        <th width="100">Jumlah Bayar</th>
                        <td width="150">: Rp. <?= number_format($cetak->bayar, 0, ",", ".") ?></td>
                    </tr> -->
                </table>
                <p>Telah melakukan pembayaran pada tanggal <?= date('d-m-Y', strtotime($cetak->tgl_bayar)) ?> untuk bulan <?= $cetak->pembayaran ?> sebesar Rp. <?= number_format($cetak->bayar, 0, ",", ".") ?></p>
            </div>
            <?php
            if ($this->session->userdata('nis')) {
                ?>
                <div class="kpd">
                    <i><b>Dokumen ini tidak memerlukan tanda tangan karena di cetak secara komputerisasi</b></i>
                </div>
            <?php
            } else {
                ?>
                <div class="kpd">
                    <p>Silahkan tanda tangan dibawah ini</p>
                </div>
                <table align="center">
                    <tr>
                        <td width="150">
                            <div class="isi" style="margin-right: 20px;">
                                <div class="ttdttds">
                                    Penerima
                                </div>
                                <div class="petugas">

                                </div>
                            </div>
                        </td>
                        <td width="150">
                            <div class="isi" style="margin-left: 20px;">
                                <div class="ttdttd">
                                    Staf Keuangan
                                </div>
                                <div class="petugas">
                                    <?= $this->session->userdata('nama'); ?>
                                </div>
                                <div class="nip">
                                    <!-- <b>NIP : <?= $personal->nip ?> </b> -->
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>