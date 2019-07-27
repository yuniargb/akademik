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
            <center>Data Tahun Kelas</center>
          </b></h1>
        <div class="box-body">
          <div class="row" style="margin-bottom: 40px">
            <div class="col-md-12">

              <a href="<?php echo base_url() ?>index.php/kelas/form_input" class="btn btn-primary btn-small"> Tambah data </a>

              <br>
              <br>


              <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                <tr>
                  <th>ID kelas</th>
                  <th>Nama kelas</th>
                  <th>Jurusan</th>
                  <th>Bayaran</th>
                  <th>Tahun Ajaran</th>
                  <th class="text-center">Kelola</th>
                </tr>

                <?php
                foreach ($kelas as $value) {
                  ?>
                  <tr>
                    <td><?php echo $value['id_kelas']; ?></td>
                    <td><?php echo $value['nama_kelas']; ?></td>
                    <td><?php echo $value['nama_jurusan']; ?></td>
                    <td><?php echo $value['bayaran']; ?></td>
                    <td><?php echo $value['tahun_akademik']; ?></td>
                    <td class="text-center">
                      <a class="btn btn-warning" href="<?php echo base_url() ?>index.php/kelas/edit/<?php echo $value['id_kelas'];  ?>">
                        Edit</a>
                      <a class="btn btn-danger" href="<?php echo base_url() ?>index.php/kelas/delete/<?php echo $value['id_kelas']; ?>" onclick="return confirm('apa anda yakin');">
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