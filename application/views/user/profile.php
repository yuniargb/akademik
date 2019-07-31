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
                <h3 class="panel-title">Profile User</h3>
            </div>
            <div class="panel-body">
                <table>
                    <tr class="dl-horizontal">
                        <th>Username</th>
                        <td> : <?= $s->username ?></td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td> : <?= $s->nama_user ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td> : <?= $s->email ?></td>
                    </tr>
                    <tr>
                        <th>Level</th>
                        <td> : <?= $s->level ?></td>
                    </tr>
                    <tr>
                        <th>Nomor Telepon </th>
                        <td> : <?= $s->notelp ?></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td> : <?= $s->jekel ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td> : <?= $s->alamat ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>