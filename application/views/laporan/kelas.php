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
                <h3 class="panel-title">Laporan Nilai</h3>
            </div>
            <div class="panel-body">
                <form action="<?php echo base_url() ?>index.php/laporan/nilai" method="POST" target="_blank">

                    <div class="form-group">
                        <label for="tahun_akademik">Kelas</label>
                        <select name="kelas" id="kelas" class="form-control" required>
                            <option value="">-- PILIH KELAS --</option>
                            <?php foreach ($kelas as $t) { ?>
                                <option value="<?= $t['id_kelas'] ?>"><?= $t['nama_kelas'] ?></option>
                            <?php } ?>
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