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
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Input Kelas</h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo base_url() ?>index.php/kelas/insert" method="POST">

          <!-- <div class="form-group"> -->
          <!-- <label for="id_kelas">Id kelas</label> -->
          <input type="hidden" class="form-control" name="id_kelas" id="id_kelas" placeholder="id kelas">
          <!-- </div> -->

          <div class="form-group">
            <label for="nama_kelas">Nama kelas</label>
            <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" placeholder="nama kelas">
          </div>

          <!-- <div class="form-group">
            <label for="bayaran">Jumlah Bayaran</label>
            <input type="hidden" class="form-control" name="bayaran" id="bayaran" placeholder="Jumlah Bayaran">
          </div> -->
          <input type="hidden" class="form-control" name="bayaran" id="bayaran" placeholder="Jumlah Bayaran">

          <!-- <div class="form-group">
            <label for="tahun_akademik">Jurusan</label>
            <input type="hidden" name="jurusan" id="jurusan" class="form-control" required>
            <select name="jurusan" id="jurusan" class="form-control" required>
              <option value="">-- PILIH JURUSAN --</option>
              <?php foreach ($jurusan as $t) { ?>
                <option value="<?= $t['id_jurusan'] ?>"><?= $t['nama_jurusan'] ?></option>
              <?php } ?>
            </select>
          </div> -->

          <input type="hidden" name="jurusan" id="jurusan" class="form-control">


          <div class="form-group">
            <label for="tahun_akademik">Tahun Ajaran</label>
            <!-- <input type="text" class="form-control" name="id_tahun" id="id_tahun" placeholder="id yahun"> -->
            <select name="id_tahun" id="id_tahun" class="form-control" required>
              <option value="">-- PILIH TAHUN AKADEMIK --</option>
              <?php foreach ($tahun as $t) { ?>
                <option value="<?= $t['id_tahun'] ?>"><?= $t['tahun_akademik'] ?></option>
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
<!-- /.content-wrapper -->
</center>