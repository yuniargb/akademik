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

    <!-- Main content -->
    <section class="content">


        <div class="box">
            <div class="box-header">
                <h1><b>
                        <center>Data Nilai</center>
                    </b></h1>
                <div class="box-body">
                    <div class="row" style="margin-bottom: 20px">
                        <div class="col-md-12">
                            <a href="<?php echo base_url() ?>index.php/nilai/nilaisiswa" target="_blank" class="btn btn-primary btn-small"> Cetak Nilai </a>
                            <!-- <a href="<?php echo base_url() ?>index.php/nilai/form_input" class="btn btn-primary btn-small"> Tambah data </a>
                            <br>
                            <br>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Cetak Nilai</h3>
                                </div>
                                <div class="panel-body">
                                    <form action="<?php echo base_url() ?>index.php/nilai/cetak" class="form-inline" method="POST" target="_blank">

                                        <div class="form-group">
                                            <label for="tahun_akademik">Kelas</label>
                                            <select name="kelas" id="kelas" class="form-control" required>
                                                <option value="">-- PILIH KELAS --</option>
                                                <?php foreach ($kelas as $t) { ?>
                                                                                                                                                                    <option value="<?= $t->id_kelas ?>"><?= $t->nama_kelas ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tahun_akademik">Mata Pelajaran</label>
                                            <select name="mapel" id="mapel" class="form-control" required>
                                                <option value="">-- PILIH MATA PELAJARAN --</option>
                                                <?php foreach ($mapel as $t) { ?>
                                                                                                                                                                    <option value="<?= $t['id_mapel'] ?>"><?= $t['nama_mapel'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-small">Cetak</button>
                                        </div>
                                    </form>
                                </div>
                            </div> -->

                            <table id="example1" class="table table-striped table-bordered ">
                                <tr>
                                    <!-- <th>ID Nilai</th> -->
                                    <!-- <th>NIS</th>
                                    <th>Siswa</th> -->
                                    <th>Mata Pelajaran</th>
                                    <!-- <th>Kelas</th> -->
                                    <th class="text-center">Konigtif</th>
                                    <th class="text-center">Psikomotor</th>
                                    <th class="text-center">Afektif</th>
                                    <!-- <th class="text-center">Kelola</th> -->
                                </tr>

                                <?php
                                foreach ($nilai as $value) {
                                    ?>
                                    <tr>
                                        <td><?= $value->nama_mapel ?></td>
                                        <td align="center"><?= $value->konigtif ?></td>
                                        <td align="center"><?= $value->psikomotor ?></td>
                                        <td align="center"><?= $value->afektif ?></td>
                                    </tr>

                                <?php
                                }
                                ?>

                            </table>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->