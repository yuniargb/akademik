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
        <h3 class="panel-title">Edit Tahun Akademik</h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo base_url() ?>index.php/tahun_akademik/update" method="POST">

          <div class="form-group">
            <label for="id_tahun">Id Jurusan</label><br>
            <input type="text" class="form-control" name="id_tahun" value="<?= $result->id_tahun ?>" readonly>
          </div>

          <div class="form-group">
            <label for="tahun_akademik">Nama Jurusan</label><br>
            <input type="text" class="form-control" name="tahun_akademik" value="<?= $result->tahun_akademik ?>"> </td>
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