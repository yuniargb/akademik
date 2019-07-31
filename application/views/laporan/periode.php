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
                <h3 class="panel-title">Laporan Keuangan</h3>
            </div>
            <div class="panel-body">
                <form action="<?php echo base_url() ?>index.php/laporan/keuangan" target="_blank" method="POST">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="konigtif">Tanggal Awal</label>
                            <input type="date" class="form-control" name="awal" id="awal" placeholder="Input Konigtif">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="konigtif">Tanggal Akhir</label>
                            <input type="date" class="form-control" name="akhir" id="akhir" placeholder="Input Psikomotor">
                        </div>
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