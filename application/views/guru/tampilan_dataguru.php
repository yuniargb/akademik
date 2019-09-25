<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->


  <!-- Main content -->
  <section class="content">

    <div class="box">
      <div class="box-header">
        <h1><b>
            <center>Data Guru</center>
          </b></h1>
        <div class="box-body">
          <div class="row" style="margin-bottom: 40px">
            <div class="col-md-12">


              <a href="<?php echo base_url() ?>index.php/guru/form_input" class="btn btn-primary btn-small"> Tambah data </a>

              <br>
              <br>

              <div class="table-responsive">
                
              <table id="example" class="table table-striped table-bordered table-hover ">
                <thead>
                  <tr>
                    <th>Nip</th>
                    <th>Nama </th>
                    <th>Tempat lahir </th>
                    <th>Tanggal lahir </th>
                    <th>Alamat </th>
                    <th>Jenis Kelamin </th>
                    <th>Agama </th>
                    <th>Jabatan </th>
                    <th>No telpon </th>
                    <th>email </th>

                    <th>Kelola </th>
                  </tr>
                </thead>

                <?php

                foreach ($guru as $value) {

                  ?>
                  <tr>
                    <td><?php echo $value['nip']; ?></td>
                    <td><?php echo $value['nama_guru']; ?></td>
                    <td><?php echo $value['tempat_lahir']; ?></td>
                    <td><?php echo $value['tanggal_lahir']; ?></td>
                    <td><?php echo $value['alamat']; ?></td>
                    <td><?php echo $value['jenis_kelamin']; ?></td>
                    <td><?php echo $value['nama_agama']; ?></td>
                    <td><?php echo $value['jabatan']; ?></td>
                    <td><?php echo $value['no_telp']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td>
                      <a class="btn btn-warning" href="<?php echo base_url() ?>index.php/guru/edit/<?php echo $value['nip'];  ?>">
                        Edit
                      </a>
                      <a class="btn btn-danger" href="<?php echo base_url() ?>index.php/guru/delete/<?php echo $value['nip']; ?>" onclick="return confirm('apa anda yakin');">
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
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->