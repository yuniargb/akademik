<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <!-- Main content -->
  <section class="content">


    <div class="box">
      <div class="box-header">
        <h1><b>
            <center>Data Jadwal</center>
          </b></h1>
        <div class="box-body">
          <div class="row" style="margin-bottom: 40px">
            <div class="col-md-12">


              <a href="<?php echo base_url() ?>index.php/jadwal/form_input" class="btn btn-primary btn-small"> Tambah data </a>

              <br>
              <br>


              <table id="example1" class="table table-striped table-bordered ">
                <tr>
                  <th>ID Jadwal</th>
                  <th>Tahun Akademik</th>
                  <th>Kelas</th>
                  <th>Mata Pelajaran</th>
                  <th>Nama guru</th>
                  <th>Jam</th>
                  <th>Ruangan</th>
                  <th>Hari</th>
                  <th>Kelola</th>
                </tr>

                <?php
                foreach ($jadwal as $value) {
                  ?>
                  <tr>
                    <td><?php echo $value['id_jadwal']; ?></td>
                    <td><?php echo $value['tahun_akademik']; ?></td>
                    <td><?php echo $value['kelas']; ?></td>
                    <td><?php echo $value['nama_mapel']; ?></td>
                    <td><?php echo $value['nip']; ?></td>
                    <td><?php echo $value['jam']; ?></td>
                    <td><?php echo $value['ruangan']; ?></td>
                    <td><?php echo $value['hari']; ?></td>
                    <td>
                      <a class="btn btn-warning" href="<?php echo base_url() ?>index.php/jadwal/edit/<?php echo $value['id_jadwal'];  ?>">
                        Edit</a>
                      <a class="btn btn-danger" href="<?php echo base_url() ?>index.php/jadwal/delete/<?php echo $value['id_jadwal']; ?>" onclick="return confirm('apa anda yakin');">
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