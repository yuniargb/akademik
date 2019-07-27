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

    <?php echo validation_errors(); ?>

    <!-- Main content -->
    <!-- /.content -->
    <!-- Main content -->
    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Profile Guru</h3>
            </div>
            <div class="panel-body">
                <table>
                    <tr class="dl-horizontal">
                        <th>NIP</th>
                        <td> : <?= $g->nip ?></td>
                    </tr>
                    <tr>
                        <td>Nama</dt>
                        <td> : <?= $g->nama_guru ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td> : <?= $g->email ?></td>
                    </tr>
                    <tr>
                        <th>Tempat Tanggal Lahir </th>
                        <td> : <?= $g->tempat_lahir . "," . date('d-m-Y', strtotime($g->tanggal_lahir)) ?></td>
                    </tr>
                    <tr>
                        <th>Agama</th>
                        <td> : <?= $g->nama_agama ?></td>
                    </tr>
                    <tr>
                        <th>Jabatan</th>
                        <td> : <?= $g->jabatan ?></td>
                    </tr>
                    <tr>
                        <th>Nomor Telepon</th>
                        <td> : <?= $g->no_telp ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td> : <?= $g->alamat ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>