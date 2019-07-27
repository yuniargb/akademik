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
        <h3 class="panel-title">Edit Kelas</h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo base_url() ?>index.php/kelas/update" method="POST">

          <div class="form-group">
            <label for="id_kelas">ID Kelas</label><br>
            <input type="text" class="form-control" name="id_kelas" value="<?php echo $result['id_kelas'] ?>" readonly>
          </div>

          <div class="form-group">
            <label for="nama_kelas">Nama kelas</label><br>
            <input type="text" class="form-control" name="nama_kelas" value="<?php echo $result['nama_kelas'] ?>"> </td>
          </div>

          <div class="form-group">
            <label for="bayaran">Jumlah Bayaran</label>
            <input type="number" class="form-control" name="bayaran" id="bayaran" value="<?php echo $result['bayaran'] ?>" placeholder="Jumlah Bayaran">
          </div>

          <div class="form-group">
            <label for="tahun_akademik">Jurusan</label>
            <!-- <input type="text" class="form-control" name="id_tahun" id="id_tahun" placeholder="id yahun"> -->
            <select name="jurusan" id="jurusan" class="form-control" required>
              <option value="">-- PILIH JURUSAN --</option>
              <?php foreach ($jurusan as $t) { ?>
                <option value="<?= $t['id_jurusan'] ?>" <?php if ($result['id_jurusan'] == $t['id_jurusan']) {
                                                          echo "selected";
                                                        } ?>><?= $t['nama_jurusan'] ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label for="tahun_akademik">Tahun Ajaran</label>
            <!-- <input type="text" class="form-control" name="id_tahun" id="id_tahun" placeholder="id yahun"> -->
            <select name="id_tahun" id="id_tahun" class="form-control" required>
              <option value="">-- PILIH TAHUN AKADEMIK --</option>
              <?php foreach ($tahun as $t) { ?>
                <option value="<?= $t['id_tahun'] ?>" <?php if ($result['id_tahun'] == $t['id_tahun']) {
                                                        echo "selected";
                                                      } ?>><?= $t['tahun_akademik'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary ">Simpan</button>
          </div>

        </form>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</center>