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

  <section class="content">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Edit Mata Pelajaran</h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo base_url() ?>index.php/mapel/update" method="POST">

          <div class="form-group">
            <label for="id_mapel">ID Mapel</label><br>
            <input type="text" class="form-control" name="id_mapel" value="<?php echo $result['id_mapel'] ?>" readonly>
          </div>

          <div class="form-group">
            <label for="nama_mapel">Nama MataPelajaran</label><br>
            <input type="text" class="form-control" name="nama_mapel" value="<?php echo $result['nama_mapel'] ?>"> </td>
          </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary ">Simpan</button>
          </div>

        </form>
      </div>
    </div>
  </section>
</div>
<!-- /.content-wrapper -->