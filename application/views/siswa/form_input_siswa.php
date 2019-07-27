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
        <h3 class="panel-title">Input Siswa</h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo base_url() ?>index.php/siswa/insert" method="POST">

          <div class="form-group">
            <label for="nis">NIS</label>
            <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS">
          </div>

          <div class="form-group">
            <label for="nama_siswa">Nama Siswa</label>
            <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="Nama Siswa">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="tahun_akademik">Kelas</label>
              <select name="kelas" id="id_kelas" class="form-control" required>
                <option value="">-- PILIH KELAS --</option>
                <?php foreach ($kelas as $t) { ?>
                  <option value="<?= $t['id_kelas'] ?>"><?= $t['nama_kelas'] ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="no_telpon">Nomor Telpon</label>
              <input type="text" class="form-control" name="no_telpon" id="no_telpon" placeholder="Nomor Telpon">
            </div>

            <div class="form-group col-md-6">
              <label for="tempat_lahir">Tempat Lahir</label>
              <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir">
            </div>

            <div class="form-group col-md-6">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="tahun_akademik">Agama</label>
              <select name="agama" id="agama" class="form-control" required>
                <option value="">-- PILIH AGAMA --</option>
                <?php foreach ($agama as $t) { ?>
                  <option value="<?= $t['id_agama'] ?>"><?= $t['nama_agama'] ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="asal_sekolah">Asal Sekolah</label>
              <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah">
            </div>

            <div class="form-group col-md-2">
              <label for="golongan_darah">Golongan Darah</label>
              <select name="golongan_darah" class="form-control">
                <option>-silahkan pilih-</option>
                <option>O</option>
                <option>AB</option>
                <option>B</option>
              </select>
            </div>

            <div class="form-group col-md-5">
              <label for="nama_ayah">Nama Ayah</label>
              <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah">
            </div>

            <div class="form-group col-md-5">
              <label for="nama_ibu">Nama Ibu</label>
              <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu">
            </div>
          </div>

          <div class="form-group">
            <label for="nama_kelas">Jenis Kelamin</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
              <label class="form-check-label" for="laki-laki">Laki-Laki</label>
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
              <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" cols="10" rows="5" placeholder="Alamat" class="form-control"></textarea>
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