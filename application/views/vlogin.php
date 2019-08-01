<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Halaman Login</title>

	<!-- Bootstrap 3.3.7 -->
	<!-- <link rel="stylesheet" href="<?php echo base_url('assets/assetss/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>"> -->

	<link href="<?php echo base_url('assets/css/style.css?v=1.1') ?>" rel="stylesheet">


</head>

<body>
<!-- new -->
	<div class="wrapper">
		<div class="container">
			<h1>SMA Al-Husna Tangerang</h1><br>
			<h1>Silahkan Login</h1>


			<?php echo form_open('welcome/ceklogin') ?>
			<input type="text" name="user" placeholder="Masukkan Username" />
			<input type="password" name="pass" placeholder="Masukkan Password">
			<button type="submit" name="login" value="LOGIN">LOGIN</button>
			<?php echo form_close() ?>

		</div>

		<ul class="bg-bubbles">

		</ul>
	</div>
	<script src="<?php echo base_url('assets/ajax/libs/jquery/2.1.3/jquery.min.js') ?>"></script>



	<script src="<?php echo base_url('assets/js/index.js') ?>"></script>




</body>

</html>