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
                <h3 class="panel-title">Ubah Password</h3>
            </div>
            <div class="panel-body">
                <?php
                if ($this->session->flashdata('cek')) {
                    ?>
                    <p class="bg-primary"><?= $this->session->flashdata('cek') ?></p>
                <?php
                }
                ?>
                <form action="<?php echo base_url() ?>index.php/user/ubahpassword" method="POST">

                    <div class="form-group">
                        <label for="tahun_akademik">Password Lama</label>
                        <input type="password" class="form-control" name="passwordl" id="passwordl" placeholder="Input Password Lama">
                    </div>
                    <div class="form-group">
                        <label for="tahun_akademik">Password Baru</label>
                        <input type="password" class="form-control" name="passwordb" id="passwordb" placeholder="Input Password Baru">
                    </div>
                    <div class="form-group">
                        <label for="tahun_akademik">Ulangi Password Baru</label>
                        <input type="password" class="form-control" name="passwordub" id="passwordub" placeholder="Ulangi Password">
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