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

    <div class="box">
      <div class="box-header">
        <h1><b>
            <center>Data Tahun Akademik</center>
          </b></h1>
        <div class="box-body">
          <div class="row" style="margin-bottom: 40px">
            <div class="col-md-12">


              <a href="<?php echo base_url() ?>index.php/tahun_akademik/form_input" class="btn btn-primary btn-small"> Tambah data </a>

              <br>
              <br>

              <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                <tr>
                  <th>ID Tahun</th>
                  <th>Tahun Akademik</th>
                  <th class="text-center">Kelola</th>
                </tr>

                <?php
                foreach ($tahun_akademik as $value) {
                  ?>
                  <tr>
                    <td><?php echo $value['id_tahun']; ?></td>
                    <td><?php echo $value['tahun_akademik']; ?></td>
                    <td class="text-center">
                      <a class="btn btn-warning" href="<?php echo base_url() ?>index.php/tahun_akademik/edit/<?php echo $value['id_tahun'];  ?>">
                        Edit</a>
                      <a class="btn btn-danger" href="<?php echo base_url() ?>index.php/tahun_akademik/delete/<?php echo $value['id_tahun']; ?>" onclick="return confirm('apa anda yakin');">
                        Delete</a>

                    </td>
                  </tr>

                <?php
                }
                ?>

              </table>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->