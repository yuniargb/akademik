<!DOCTYPE html>
<html>
<?php
if (!$this->session->userdata('username')) {
  redirect('welcome');
}

?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/assetss/bower_components/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/assetss/bower_components/Ionicons/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/assetss/css/AdminLTE.min.css') ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/assetss/css/skins/_all-skins.min.css') ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('assets/assetss/bower_components/morris.js/morris.css') ?>">
  <!-- jvectormap -->
  <!-- <link rel="stylesheet" href="<?php echo base_url('assets/assetss/bower_components/jvectormap/jquery-jvectormap.css') ?>"> -->
  <!-- Date Picker -->
  <!-- <link rel="stylesheet" href="<?php echo base_url('assets/assetss/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>"> -->
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="<?php echo base_url('assets/assetss/bower_components/bootstrap-daterangepicker/daterangepicker.css') ?>"> -->
  <!-- bootstrap wysihtml5 - text editor -->
  <!-- <link rel="stylesheet" href="<?php echo base_url('assets/assetss/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>"> -->

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->


<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>L </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Al-Husna</b>Tangerang</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">

              <ul class="dropdown-menu">
                <li class="header"></li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <!-- start message -->

                    </li>
                    <!-- end message -->
                    <li>

                    </li>
                    <li>

                    </li>
                    <li>

                    </li>
                    <li>

                    </li>
                  </ul>
                </li>

              </ul>
            </li>

            <li class="dropdown tasks-menu">


            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">

              <a href="<?php echo site_url('welcome/logout') ?>">Sign out</a>

            </li>

    </header>