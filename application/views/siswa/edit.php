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

  <!-- /.content -->

  <!-- Main content -->
  <section class="content">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Edit Siswa</h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo base_url() ?>index.php/siswa/update" method="POST">

          <div class="form-group">
            <label for="nis">NIS</label>
            <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS" value="<?= $result['nis'] ?>" readonly>
          </div>

          <div class="form-group">
            <label for="nama_siswa">Nama Siswa</label>
            <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="Nama Siswa" value="<?= $result['nama_siswa'] ?>">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= $result['email'] ?>">
          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="tahun_akademik">Kelas</label>
              <select name="kelas" id="id_kelas" class="form-control" required>
                <option value="">-- PILIH KELAS --</option>
                <?php foreach ($kelas as $t) { ?>
                  <option value="<?= $t['id_kelas'] ?>" <?php if ($result['id_kelas'] == $t['id_kelas']) {
                                                          echo "selected";
                                                        } ?>><?= $t['nama_kelas'] ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="no_telpon">Nomor Telpon</label>
              <input type="text" class="form-control" name="no_telpon" id="no_telpon" placeholder="Nomor Telpon" value="<?= $result['no_telpon'] ?>">
            </div>

            <div class="form-group col-md-6">
              <label for="tempat_lahir">Tempat Lahir</label>
              <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?= $result['tempat_lahir'] ?>">
            </div>

            <div class="form-group col-md-6">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= $result['tanggal_lahir'] ?>">
            </div>

            <div class="form-group col-md-6">
              <label for="tahun_akademik">Agama</label>
              <select name="agama" id="agama" class="form-control" required>
                <option value="">-- PILIH AGAMA --</option>
                <?php foreach ($agama as $t) { ?>
                  <option value="<?= $t['id_agama'] ?>" <?php if ($result['agama'] == $t['id_agama']) {
                                                          echo "selected";
                                                        } ?>><?= $t['nama_agama'] ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="asal_sekolah">Asal Sekolah</label>
              <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" value="<?= $result['asal_sekolah'] ?>" placeholder="Asal Sekolah">
            </div>

            <div class="form-group col-md-2">
              <label for="golongan_darah">Golongan Darah</label>
              <select name="golongan_darah" class="form-control">
                <option>-silahkan pilih-</option>
                <option <?php if ($result['golongan_darah'] == "O") {
                          echo "selected";
                        } ?>>O</option>
                <option <?php if ($result['golongan_darah'] == "AB") {
                          echo "selected";
                        } ?>>AB</option>
                <option <?php if ($result['golongan_darah'] == "B") {
                          echo "selected";
                        } ?>>B</option>
              </select>
            </div>

            <div class="form-group col-md-5">
              <label for="nama_ayah">Nama Ayah</label>
              <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" value="<?= $result['nama_ayah'] ?>" placeholder="Nama Ayah">
            </div>

            <div class="form-group col-md-5">
              <label for="nama_ibu">Nama Ibu</label>
              <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" value="<?= $result['nama_ibu'] ?>" placeholder="Nama Ibu">
            </div>
          </div>

          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>

            <input type="radio" name="jenis_kelamin" value="perempuan" <?php if ($result['jenis_kelamin'] == "perempuan") {
                                                                          echo "checked";
                                                                        } ?>>Perempuan
            <input type="radio" name="jenis_kelamin" value="laki-laki" <?php if ($result['jenis_kelamin'] == "laki-laki") {
                                                                          echo "checked";
                                                                        } ?>>Laki-laki

          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control" id="alamat" cols="10" rows="5" placeholder="Alamat"><?= $result['alamat'] ?></textarea>
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