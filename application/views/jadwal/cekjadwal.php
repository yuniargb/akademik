<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">


        <div class="box">
            <div class="box-header">
                <h1><b>
                        <center>Jadwal Sekolah</center>
                    </b></h1>
                <div class="box-body">
                    <div class="row" style="margin-bottom: 40px">
                        <div class="col-md-12">


                            <table id="example1" class="table table-striped table-bordered ">
                                <tr>
                                    <!-- <th>Tahun Akademik</th>
                                    <th>Kelas</th> -->
                                    <th>Mata Pelajaran</th>
                                    <th>Nama guru</th>
                                    <th>Jam</th>
                                    <th>Ruangan</th>
                                    <th>Hari</th>
                                </tr>

                                <?php
                                foreach ($j as $v) {
                                    ?>
                                    <tr>
                                        <!-- <td><?= $v->tahun_akademik ?></td>
                                            <td><?= $v->nama_kelas ?></td> -->
                                        <td><?= $v->nama_mapel ?></td>
                                        <td><?= $v->nama_guru ?></td>
                                        <td><?= $v->jam ?></td>
                                        <td><?= $v->ruangan ?></td>
                                        <td><?= $v->hari ?></td>
                                    </tr>

                                <?php
                                }
                                ?>

                            </table>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->