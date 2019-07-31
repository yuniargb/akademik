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

                            <!-- <a href="<?php echo base_url() ?>index.php/keuangan/form_input" class="btn btn-primary btn-small"> Tambah data </a> -->


                            <table id="example1" class="table table-striped table-bordered ">
                                <tr>
                                    <!-- <th>ID Pembayaran</th> -->
                                    <th>Tanggal Pembayaran</th>
                                    <!-- <th>NIS</th>
                                    <th>Siswa</th>
                                    <th>Kelas</th> -->
                                    <th>Bulan</th>
                                    <th>Jumlah</th>
                                    <th>Cetak</th>
                                    <!-- <th class="text-center">Cetak</th> -->
                                </tr>
                                <tr>
                                    <td width="100"><?= $this->keuangan_model->cekTglBayar($this->session->userdata('nis'), 'Januari') ?></td>
                                    <td width="400">Januari</td>
                                    <td><?= $this->keuangan_model->cekJmlBayar($this->session->userdata('nis'), 'Januari') ?> </td>
                                    <td><?= $this->keuangan_model->cetakKwitansi($this->session->userdata('nis'), 'Januari') ?> </td>
                                </tr>
                                <tr>
                                    <td width="100"><?= $this->keuangan_model->cekTglBayar($this->session->userdata('nis'), 'Februari') ?></td>
                                    <td width="400">Februari</td>
                                    <td><?= $this->keuangan_model->cekJmlBayar($this->session->userdata('nis'), 'Februari') ?> </td>
                                    <td><?= $this->keuangan_model->cetakKwitansi($this->session->userdata('nis'), 'Februari') ?> </td>
                                </tr>
                                <tr>
                                    <td width="100"><?= $this->keuangan_model->cekTglBayar($this->session->userdata('nis'), 'Maret') ?></td>
                                    <td width="400">Maret</td>
                                    <td><?= $this->keuangan_model->cekJmlBayar($this->session->userdata('nis'), 'Maret') ?> </td>
                                    <td><?= $this->keuangan_model->cetakKwitansi($this->session->userdata('nis'), 'Maret') ?> </td>
                                </tr>
                                <tr>
                                    <td width="100"><?= $this->keuangan_model->cekTglBayar($this->session->userdata('nis'), 'April') ?></td>
                                    <td width="400">April</td>
                                    <td><?= $this->keuangan_model->cekJmlBayar($this->session->userdata('nis'), 'April') ?> </td>
                                    <td><?= $this->keuangan_model->cetakKwitansi($this->session->userdata('nis'), 'April') ?> </td>
                                </tr>
                                <tr>
                                    <td width="100"><?= $this->keuangan_model->cekTglBayar($this->session->userdata('nis'), 'Mei') ?></td>
                                    <td width="400">Mei</td>
                                    <td><?= $this->keuangan_model->cekJmlBayar($this->session->userdata('nis'), 'Mei') ?> </td>
                                    <td><?= $this->keuangan_model->cetakKwitansi($this->session->userdata('nis'), 'Mei') ?> </td>
                                </tr>
                                <tr>
                                    <td width="100"><?= $this->keuangan_model->cekTglBayar($this->session->userdata('nis'), 'Juni') ?></td>
                                    <td width="400">Juni</td>
                                    <td><?= $this->keuangan_model->cekJmlBayar($this->session->userdata('nis'), 'Juni') ?> </td>
                                    <td><?= $this->keuangan_model->cetakKwitansi($this->session->userdata('nis'), 'Juni') ?> </td>
                                </tr>
                                <tr>
                                    <td width="100"><?= $this->keuangan_model->cekTglBayar($this->session->userdata('nis'), 'Juli') ?></td>
                                    <td width="400">Juli</td>
                                    <td><?= $this->keuangan_model->cekJmlBayar($this->session->userdata('nis'), 'Juli') ?> </td>
                                    <td><?= $this->keuangan_model->cetakKwitansi($this->session->userdata('nis'), 'Juli') ?> </td>
                                </tr>
                                <tr>
                                    <td width="100"><?= $this->keuangan_model->cekTglBayar($this->session->userdata('nis'), 'Agustus') ?></td>
                                    <td width="400">Agustus</td>
                                    <td><?= $this->keuangan_model->cekJmlBayar($this->session->userdata('nis'), 'Agustus') ?> </td>
                                    <td><?= $this->keuangan_model->cetakKwitansi($this->session->userdata('nis'), 'Agustus') ?> </td>
                                </tr>
                                <tr>
                                    <td width="100"><?= $this->keuangan_model->cekTglBayar($this->session->userdata('nis'), 'September') ?></td>
                                    <td width="400">September</td>
                                    <td><?= $this->keuangan_model->cekJmlBayar($this->session->userdata('nis'), 'September') ?> </td>
                                    <td><?= $this->keuangan_model->cetakKwitansi($this->session->userdata('nis'), 'September') ?> </td>
                                </tr>
                                <tr>
                                    <td width="100"><?= $this->keuangan_model->cekTglBayar($this->session->userdata('nis'), 'Oktober') ?></td>
                                    <td width="400">Oktober</td>
                                    <td><?= $this->keuangan_model->cekJmlBayar($this->session->userdata('nis'), 'Oktober') ?> </td>
                                    <td><?= $this->keuangan_model->cetakKwitansi($this->session->userdata('nis'), 'Oktober') ?> </td>
                                </tr>
                                <tr>
                                    <td width="100"><?= $this->keuangan_model->cekTglBayar($this->session->userdata('nis'), 'November') ?></td>
                                    <td width="400">November</td>
                                    <td><?= $this->keuangan_model->cekJmlBayar($this->session->userdata('nis'), 'November') ?> </td>
                                    <td><?= $this->keuangan_model->cetakKwitansi($this->session->userdata('nis'), 'November') ?> </td>
                                </tr>
                                <tr>
                                    <td width="100"><?= $this->keuangan_model->cekTglBayar($this->session->userdata('nis'), 'Desember') ?></td>
                                    <td width="400">Desember</td>
                                    <td><?= $this->keuangan_model->cekJmlBayar($this->session->userdata('nis'), 'Desember') ?> </td>
                                    <td><?= $this->keuangan_model->cetakKwitansi($this->session->userdata('nis'), 'Desember') ?> </td>
                                </tr>

                            </table>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->