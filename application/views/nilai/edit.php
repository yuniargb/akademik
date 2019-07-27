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
    <!-- /.content -->

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Edit Nilai</h3>
            </div>
            <div class="panel-body">
                <form action="<?php echo base_url() ?>index.php/nilai/update" method="POST">

                    <div class="form-group">
                        <label for="tahun_akademik">Nis</label>
                        <input type="hidden" class="form-control" name="id" id="id" placeholder="Pilih Siswa" value="<?= $nilai->id_nilai ?>" readonly>
                        <input type="text" class="form-control" name="nis" id="nis" placeholder="Pilih Siswa" value="<?= $nilai->nis ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tahun_akademik">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Pilih Siswa" value="<?= $nilai->nama_siswa ?>" readonly>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="tahun_akademik">Kelas</label>
                            <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Pilih Siswa" value="<?= $nilai->nama_kelas ?>" readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="tahun_akademik">Mata Pelajaran</label>
                            <input type="text" class="form-control" name="mapel" id="mapel" placeholder="Pilih Siswa" value="<?= $nilai->nama_mapel ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tahun_akademik">Nilai</label>
                        <input type="text" class="form-control" name="nilai" id="nilai" placeholder="Input Nilai" value="<?= $nilai->nilai ?>">
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-small">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->