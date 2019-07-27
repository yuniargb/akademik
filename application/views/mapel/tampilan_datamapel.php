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
            <center>Data Mata Pelajaran</center>
          </b></h1>
        <div class="box-body">
          <div class="row" style="margin-bottom: 40px">
            <div class="col-md-12">


              <a href="<?php echo base_url() ?>index.php/mapel/form_input" class="btn btn-primary btn-small"> Tambah data </a>

              <br>
              <br>


              <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                <tr>
                  <th>ID Matapelajaran</th>
                  <th>Nama pelajaran</th>
                  <th>Kelola</th>
                </tr>

                <?php
                foreach ($mapel as $value) {
                  ?>
                  <tr>
                    <td><?php echo $value['id_mapel']; ?></td>
                    <td><?php echo $value['nama_mapel']; ?></td>
                    <td>
                      <a class="btn btn-warning" href="<?php echo base_url() ?>index.php/mapel/edit/<?php echo $value['id_mapel'];  ?>">
                        Edit</a>
                      <a class="btn btn-danger" href="<?php echo base_url() ?>index.php/mapel/delete/<?php echo $value['id_mapel']; ?>" onclick="return confirm('apa anda yakin');">
                        Delete</a>

                    </td>
                  </tr>

                <?php
                }
                ?>

              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->