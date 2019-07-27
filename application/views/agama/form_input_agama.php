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

  <section class="content">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Input Agama</h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo base_url() ?>index.php/agama/insert" method="POST">

          <!-- <div class="form-group"> -->
          <!-- <label for="id_agama">Id Agama</label> -->
          <input type="hidden" class="form-control" name="id_agama" id="id_agama" placeholder="id agama">
          <!-- </div> -->

          <div class="form-group">
            <label for="nama_agama">Nama Agama</label>
            <input type="text" class="form-control" name="nama_agama" id="nama_agama" placeholder="nama agama">
          </div>


          <div class="box-footer">
            <button type="submit" class="btn btn-primary btn-small">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>