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
            <center>Data Keuangan</center>
          </b></h1>
        <div class="box-body">
          <div class="row" style="margin-bottom: 20px">
            <div class="col-md-12">

              <a href="<?php echo base_url() ?>index.php/keuangan/form_input" class="btn btn-primary btn-small"> Tambah data </a>

              <br>
              <br>

              <table id="example1" class="table table-striped table-bordered ">
                <tr>
                  <th>ID Pembayaran</th>
                  <th>Tanggal Pembayaran</th>
                  <th>NIS</th>
                  <th>Siswa</th>
                  <th>Kelas</th>
                  <th>Jumlah</th>
                  <th class="text-center">Cetak</th>
                </tr>

                <?php
                foreach ($keuangan as $value) {
                  ?>
                  <tr>
                    <td><?= $value->id_keuangan ?></td>
                    <td><?= date('d-m-Y', strtotime($value->tgl_bayar)) ?></td>
                    <td><?= $value->nis ?></td>
                    <td><?= $value->nama_siswa ?></td>
                    <td><?= $value->nama_kelas ?></td>
                    <td><?= $value->bayar ?></td>
                    <td class="text-center">
                      <a class="btn btn-primary" target="_blank" href="<?php echo base_url() ?>index.php/keuangan/cetak/<?= $value->id_keuangan  ?>">
                        Cetak Kwitansi</a>

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