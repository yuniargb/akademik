<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section> -->

    <?php echo validation_errors(); ?>

    <!-- Main content -->
    <!-- /.content -->
    <!-- Main content -->
    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Input Keuangan</h3>
            </div>
            <div class="panel-body">
                <form action="<?php echo base_url() ?>index.php/keuangan/insert" method="POST">

                    <div class="form-group">
                        <label for="tahun_akademik">Siswa</label>
                        <select name="nis" id="siswas" class="form-control js-example-basic-single" required>
                            <option value="">-- PILIH SISWA --</option>
                            <?php foreach ($siswa as $t) { ?>
                                <option value="<?= $t['nis'] ?>" data-kelas="<?= $t['nama_kelas'] ?>" data-bayaran="<?= $t['bayaran'] ?>"><?= $t['nama_siswa'] ?> [ <?= $t['nis'] ?> ] [ <?= $t['nama_kelas'] ?> ]</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="tahun_akademik">Kelas</label>
                            <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Pilih Siswa" readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="tahun_akademik">Jumlah bayar</label>
                            <input type="text" class="form-control" name="bayar" id="aasd" placeholder="Masukan Jumlah Pembayaran" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tahun_akademik">Untuk Bulan</label>
                        <select name="bayaran" id="bayaran" class="form-control js-example-basic-single" required>
                            <option value="">-- PILIH BULAN --</option>
                            <option>Januari</option>
                            <option>Februari</option>
                            <option>Maret</option>
                            <option>April</option>
                            <option>Mei</option>
                            <option>Juni</option>
                            <option>Juli</option>
                            <option>Agustus</option>
                            <option>September</option>
                            <option>Oktober</option>
                            <option>November</option>
                            <option>Desember</option>
                        </select>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-small">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>