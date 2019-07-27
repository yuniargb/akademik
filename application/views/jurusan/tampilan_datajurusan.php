<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->


  <!-- Main content -->
  <section class="content">


    <div class="box">
      <div class="box-header">
        <h1><b>
            <center>Data jurusan</center>
          </b></h1>
        <div class="box-body">
          <div class="row" style="margin-bottom: 20px">
            <div class="col-md-12">

              <a href="<?php echo base_url() ?>index.php/jurusan/form_input" class="btn btn-primary btn-small"> Tambah data </a>

              <br>
              <br>

              <table id="example1" class="table table-striped table-bordered ">
                <tr>
                  <th>ID Jurusan</th>
                  <th>Nama Jurusan</th>
                  <th class="text-center">Kelola</th>
                </tr>

                <?php
                foreach ($jurusan as $value) {
                  ?>
                  <tr>
                    <td><?php echo $value['id_jurusan']; ?></td>
                    <td><?php echo $value['nama_jurusan']; ?></td>
                    <td class="text-center">
                      <a class="btn btn-warning" href="<?php echo base_url() ?>index.php/jurusan/edit/<?php echo $value['id_jurusan'];  ?>">
                        Edit</a>
                      <a class="btn btn-danger" href="<?php echo base_url() ?>index.php/jurusan/delete/<?php echo $value['id_jurusan']; ?>" onclick="return confirm('apa anda yakin');">
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