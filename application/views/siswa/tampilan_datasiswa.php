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
            <center>Data Siswa</center>
          </b></h1>
        <div class="box-body">
          <div class="row" style="margin-bottom: 40px">
            <div class="col-md-12">


              <a href="<?php echo base_url() ?>index.php/siswa/form_input" class="btn btn-primary btn-small"> Tambah data </a>

              <br>
              <br>


              <table id="example1" class="table table-striped table-bordered table-responsive">
                <tr>
                  <th>Nis</th>
                  <th>Nama </th>
                  <th>Alamat </th>
                  <th>Tempat lahir </th>
                  <th>Tanggal lahir </th>
                  <th>Jenis Kelamin </th>
                  <th>Agama </th>
                  <th>email </th>
                  <th>No telpon </th>
                  <th>Golongan Darah </th>
                  <!-- <th>Nama Ayah </th>
                  <th>Nama Ibu </th> -->
                  <th>Asal Sekolah </th>
                  <th>Kelola </th>
                </tr>

                <?php

                foreach ($siswa as $value) {

                  ?>
                  <tr>
                    <td><?php echo $value['nis']; ?></td>
                    <td><?php echo $value['nama_siswa']; ?></td>
                    <td><?php echo $value['alamat']; ?></td>
                    <td><?php echo $value['tempat_lahir']; ?></td>
                    <td><?php echo $value['tanggal_lahir']; ?></td>
                    <td><?php echo $value['jenis_kelamin']; ?></td>
                    <td><?php echo $value['nama_agama']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['no_telpon']; ?></td>
                    <td><?php echo $value['golongan_darah']; ?></td>
                    <!-- <td><?php echo $value['nama_ayah']; ?></td>
                        <td><?php echo $value['nama_ibu']; ?></td> -->
                    <td><?php echo $value['asal_sekolah']; ?></td>
                    <td>

                      <a class="btn btn-warning" href="<?php echo base_url() ?>index.php/siswa/edit/<?php echo $value['nis'];  ?>">
                        Edit</a>
                      <a class="btn btn-danger" href="<?php echo base_url() ?>index.php/siswa/delete/<?php echo $value['nis']; ?>" onclick="return confirm('apa anda yakin');">
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