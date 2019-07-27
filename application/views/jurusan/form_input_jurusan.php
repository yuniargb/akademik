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
    </ol> -->
  </section>

  <!-- Main content -->


  <section class="content">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Input Jurusan</h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo base_url() ?>index.php/jurusan/insert" method="POST">

          <!-- <div class="form-group"> -->
          <input type="hidden" class="form-control" name="id_jurusan" id="id_jurusan" placeholder="id jurusan">
          <!-- </div> -->

          <div class="form-group">
            <label for="nama_jurusan">Nama Jurusan</label>
            <input type="text" class="form-control" name="nama_jurusan" id="nama_jurusan" placeholder="nama jurusan">
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