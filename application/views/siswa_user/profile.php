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
				<h3 class="panel-title">Profile Siswa</h3>
			</div>
			<div class="panel-body">
				<table>
					<tr class="dl-horizontal">
						<th>NIS</th>
						<td> : <?= $s->nis ?></td>
					</tr>
					<tr>
						<th>Nama</th>
						<td> : <?= $s->nama_siswa ?></td>
					</tr>
					<tr>
						<th>Email</th>
						<td> : <?= $s->email ?></td>
					</tr>
					<tr>
						<th>Kelas</th>
						<td> : <?= $s->nama_kelas ?></td>
					</tr>
					<tr>
						<th>Tempat Tanggal Lahir </th>
						<td> : <?= $s->tempat_lahir . "," . date('d-m-Y', strtotime($s->tanggal_lahir)) ?></td>
					</tr>
					<tr>
						<th>Agama</th>
						<td> : <?= $s->nama_agama ?></td>
					</tr>
					<tr>
						<th>Jenis Kelamin</th>
						<td> : <?= $s->jenis_kelamin ?></td>
					</tr>
					<tr>
						<th>Nomor Telepon</th>
						<td> : <?= $s->no_telpon ?></td>
					</tr>
					<tr>
						<th>Nama Ayah</th>
						<td> : <?= $s->nama_ayah ?></td>
					</tr>
					<tr>
						<th>Nama Ibu</th>
						<td> : <?= $s->nama_ibu ?></td>
					</tr>
					<tr>
						<th>Sekolah Asal</th>
						<td> : <?= $s->asal_sekolah ?></td>
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