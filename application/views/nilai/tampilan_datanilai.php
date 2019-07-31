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

              <a href="<?php echo base_url() ?>index.php/nilai/form_input" class="btn btn-primary btn-small"> Tambah data </a>
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
              </div>

              <table id="example1" class="table table-striped table-bordered ">
                <tr>
                  <th>ID Nilai</th>
                  <th>Mata Pelajaran</th>
                  <th>NIS</th>
                  <th>Siswa</th>
                  <th>Kelas</th>
                  <th>Konigtif</th>
                  <th>Psikomotor</th>
                  <th>Afektif</th>
                  <th class="text-center">Kelola</th>
                </tr>

                <?php
                foreach ($nilai as $value) {
                  ?>
                  <tr>
                    <td><?= $value->id_nilai ?></td>
                    <td><?= $value->nama_mapel ?></td>
                    <td><?= $value->nis ?></td>
                    <td><?= $value->nama_siswa ?></td>
                    <td><?= $value->nama_kelas ?></td>
                    <td><?= $value->konigtif ?></td>
                    <td><?= $value->psikomotor ?></td>
                    <td><?= $value->afektif ?></td>
                    <td class="text-center">
                      <a class="btn btn-warning" href="<?php echo base_url() ?>index.php/nilai/edit/<?= $value->id_nilai  ?>">
                        Edit</a>
                      <a class="btn btn-danger" href="<?php echo base_url() ?>index.php/nilai/delete/<?= $value->id_nilai  ?>" onclick="return confirm('apa anda yakin');">
                        Hapus</a>
                    </td>
                  </tr>

                <?php
                }
                ?>

              </table>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->