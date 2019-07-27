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
  <!-- Main content -->
  <section class="content">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Input Mata Pelajaran</h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo base_url() ?>index.php/mapel/insert" method="POST">

          <div class="form-group">
            <label for="id_tahun">ID mapel</label>
            <input type="text" class="form-control" name="id_mapel" id="id_mapel" placeholder="id mapel">
          </div>

          <div class="form-group">
            <label for="tahun_akademik">Nama mapel</label>
            <input type="text" class="form-control" name="nama_mapel" id="nama_mapel" placeholder="nama mapel">
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