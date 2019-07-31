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
  <!-- /.content -->

  <?php echo validation_errors(); ?>

  <!-- Main content -->
  <!-- /.content -->
  <!-- Main content -->
  <section class="content">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Input User</h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo base_url() ?>index.php/user/update" method="POST">

          <div class="form-group">
            <label for="id_tahun">Username</label>
            <input type="hidden" class="form-control" name="id_user" id="id_user" value="<?= $user->id_user ?>" placeholder="id mapel">
            <input type="text" class="form-control" name="username" id="username" value="<?= $user->username ?>" placeholder="Username" readonly <?= form_error('username'); ?> </div> <div class="form-group">
            <label for="tahun_akademik">Nama User</label>
            <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="nama user" value="<?= $user->nama_user ?>">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="<?= $user->email ?>" placeholder="Email">
          </div>

          <div class="form-group">
            <label for="tahun_akademik">Level</label>
            <select name="level" id="level" class="form-control" required>
              <option value="">--PILIH LEVEL--</option>
              <option value="admin" <?php if ($user->level == "admin") {
                                      echo "selected";
                                    } ?>>Admin</option>
              <option value="keuangan" <?php if ($user->level == "keuangan") {
                                          echo "selected";
                                        } ?>>Keuangan</option>
              <option value="kepalasekolah" <?php if ($user->level == "kepalasekolah") {
                                              echo "selected";
                                            } ?>>Kepala Sekolah</option>
            </select>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="no_telpon">Nomor Telpon</label>
              <input type="text" class="form-control" name="no_telpon" id="no_telpon" placeholder="Nomor Telpon" value="<?= $user->notelp ?>">
            </div>

            <div class="form-group col-md-6">
              <label for="nama_kelas">Jenis Kelamin</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" <?php if ($user->jekel == "laki-laki") {
                                                                                                                      echo "checked";
                                                                                                                    } ?>>
                <label class="form-check-label" for="laki-laki">Laki-Laki</label>
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan" <?php if ($user->jekel == "perempuan") {
                                                                                                                      echo "checked";
                                                                                                                    } ?>>
                <label class="form-check-label" for="perempuan">Perempuan</label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" cols="10" rows="5" placeholder="Alamat" class="form-control"><?= $user->alamat ?></textarea>
          </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary btn-small">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
<!-- /.content-wrapper -->