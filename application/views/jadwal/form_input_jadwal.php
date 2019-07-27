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
        <h3 class="panel-title">Input Jadwal</h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo base_url() ?>index.php/jadwal/insert" method="POST">
          <!-- <div class="form-group"> -->
          <!-- <label for="id_jadwal">Id jadwal</label> -->
          <input type="hidden" class="form-control" name="id_jadwal" id="id_jadwal" placeholder="id jadwal">
          <!-- </div> -->

          <div class="row">
            <div class="form-group col-md-6">
              <label for="tahun_akademik">Tahun Akademik</label>
              <select class="form-control js-example-basic-single" name="id_tahun">
                <option value="">--PILIH TAHUN--</option>
                <?php foreach ($tahun as $value) { ?>
                  <option value="<?= $value['id_tahun'] ?>"> <?php echo $value['tahun_akademik'] ?> </option>
                <?php } ?>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="kelas">Kelas</label>
              <select class="form-control js-example-basic-single" name="kelas">
                <option value="">--PILIH KELAS--</option>
                <?php foreach ($kelas as $value) { ?>
                  <option value="<?= $value['id_kelas'] ?>"> <?php echo $value['nama_kelas'] ?> </option>
                <?php } ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="id_mapel">Mata pelajaran</label>
            <select class="form-control js-example-basic-single" name="mapel">
              <option value="">--PILIH MATA PELAJARAN--</option>
              <?php foreach ($mapel as $value) { ?>
                <option value="<?= $value['id_mapel'] ?>"> <?php echo $value['nama_mapel'] ?> </option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label for="nip">Nama Guru</label>
            <select class="form-control js-example-basic-single" name="nip">
              <option value="">--PILIH GURU--</option>
              <?php foreach ($guru as $value) { ?>
                <option value="<?= $value['nip'] ?>"> <?php echo $value['nama_guru'] ?> </option>
              <?php } ?>
            </select>
          </div>

          <div class="row">
            <div class="form-group col-md-4">
              <label for="jam">Jam</label>
              <input type="text" class="form-control" name="jam" id="jam" placeholder="jam">
            </div>

            <div class="form-group col-md-4">
              <label for="ruangan">Ruangan</label>
              <input type="text" class="form-control" name="ruangan" id="ruangan" placeholder="ruangan">
            </div>

            <div class="form-group col-md-4">
              <label for="hari">Hari</label>
              <select name="hari" class="form-control js-example-basic-single">
                <option>--PILIH KELAS--</option>
                <option>Senin</option>
                <option>Selasa</option>
                <option>Rabu</option>
                <option>Kamis</option>
                <option>Jumat</option>
                <option>Sabtu</option>
                <option>Minggu</option>
              </select>
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
<!-- /.content-wrapper -->