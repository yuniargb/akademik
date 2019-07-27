<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">

      </div>

    </div>
    <!-- search form -->

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">



      <!-- <li class="treeview">
        <a href="?php echo base_url();?>index.php/welcome/vadmin.php"">
            <i class=" fa fa-pie-chart"></i>
          <span>Dasbor</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
          <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
          <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
          <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
        </ul>
      </li> -->
      <?php
      if ($this->session->userdata('status') == "admin") {
        ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>index.php/jurusan/"><i class="fa fa-circle-o"></i> jurusan</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/tahun_akademik/"><i class="fa fa-circle-o"></i> Tahun Akademik</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/kelas/"><i class="fa fa-circle-o"></i> Kelas</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/guru/"><i class="fa fa-circle-o"></i> Guru</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/siswa/"><i class="fa fa-circle-o"></i> Siswa</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/mapel/"><i class="fa fa-circle-o"></i> Mata Pelajaran</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/agama/"><i class="fa fa-circle-o"></i> Agama</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/jadwal/"><i class="fa fa-circle-o"></i> Jadwal</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/user/"><i class="fa fa-circle-o"></i> User</a></li>
          </ul>
        </li>
      <?php
      }
      ?>

      <?php
      if ($this->session->userdata('status') == "keuangan") {
        ?>
        <li><a href="<?php echo base_url(); ?>index.php/keuangan/"><i class="fa fa-edit"></i> Keuangan</a></li>
      <?php
      }
      ?>
      <?php
      if ($this->session->userdata('status') == "kepalasekolah" || $this->session->userdata('status') == "admin") {
        ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Laporan Keuangan</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Laporan Jadwal</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Laporan Nilai</a></li>
          </ul>
        </li>
      <?php
      }
      ?>
      <li><a href="<?php echo base_url(); ?>index.php/user/form_password"><i class="fa fa-edit"></i> Ubah Password</a></li>


  </section>
  <!-- /.sidebar -->
</aside>