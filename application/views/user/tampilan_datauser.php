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
            <center>Data User</center>
          </b></h1>
        <div class="box-body">
          <div class="row" style="margin-bottom: 40px">
            <div class="col-md-12">


              <a href="<?php echo base_url() ?>index.php/user/form_input" class="btn btn-primary btn-small"> Tambah data </a>

              <br>
              <br>


              <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                <tr>
                  <th>ID User</th>
                  <th>Username</th>
                  <th>Nama User</th>
                  <th>Email</th>
                  <th>Jenis Kelamin</th>
                  <th>No Telepon</th>
                  <th>Alamat</th>
                  <th>Level</th>
                  <th>Kelola</th>
                </tr>

                <?php
                foreach ($user as $value) {
                  ?>
                  <tr>
                    <td><?= $value->id_user ?></td>
                    <td><?= $value->username ?></td>
                    <td><?= $value->nama_user ?></td>
                    <td><?= $value->email ?></td>
                    <td><?= $value->jekel ?></td>
                    <td><?= $value->notelp ?></td>
                    <td><?= $value->alamat ?></td>
                    <td><?= $value->level ?></td>
                    <td>
                      <a class="btn btn-warning" href="<?= base_url() ?>index.php/user/edit/<?= $value->id_user  ?>">
                        Edit</a>
                      <a class="btn btn-danger" href="<?= base_url() ?>index.php/user/delete/<?= $value->id_user ?>" onclick="return confirm('apa anda yakin');">
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