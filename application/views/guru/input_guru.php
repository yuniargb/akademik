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
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Input Guru</h3>
            </div>
            <div class="panel-body">
                <?php
                if ($this->session->flashdata('error')) {
                    echo '<div class="alert alert-danger">
                    ' . $this->session->flashdata('error') . '
                    </div>';
                }
                ?>
                <form action="<?php echo base_url() ?>index.php/guru/insert" method="POST">

                    <div class="form-group">
                        <label for="id_kelas">NIP</label>
                        <input type="text" class="form-control" name="nip" id="nip" placeholder="nip">
                    </div>

                    <div class="form-group">
                        <label for="nama_kelas">Nama Guru</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="nama guru">
                    </div>

                    <div class="form-group">
                        <label for="nama_kelas">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="email">
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="nama_kelas">No Telp</label>
                            <input type="text" class="form-control" name="notelp" id="notelp" placeholder="Nomor Telepon">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="nama_kelas">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="tahun_akademik">Agama</label>
                            <select name="agama" id="agama" class="form-control" required>
                                <option value="">-- PILIH AGAMA --</option>
                                <?php foreach ($agama as $t) { ?>
                                    <option value="<?= $t['id_agama'] ?>"><?= $t['nama_agama'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="nama_kelas">Tempat Lahir</label>
                            <input type="text" class="form-control" name="lahir" id="lahir" placeholder="Tempat Lahir">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="nama_kelas">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgllahir" id="tgllahir" placeholder="Tempat Lahir">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="nama_kelas">Jenis Kelamin</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="laki-laki" value="laki-laki">
                                <label class="form-check-label" for="laki-laki">Laki-Laki</label>
                                <input class="form-check-input" type="radio" name="jk" id="perempuan" value="perempuan">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="nama_kelas">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" cols="5" rows="5" placeholder="alamat"></textarea>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-small">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</center>