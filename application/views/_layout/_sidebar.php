<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $userdata->nama; ?></p>
        <!-- Status -->
        <a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">LIST MENU</li>
      <!-- Optionally, you can add icons to the links -->
      <?php if($userdata->akses=="operator"){ ?>
      <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li>
      <li <?php if ($page == 'Artikel') {echo 'class="active"';} ?>>
        <a href="<?PHP echo base_url();?>Artikel">
          <i class="fa fa-database"></i>
          <span>Artikel</span>
        </a>
      </li>
      
      <?PHP }else if($userdata->akses=="mahasiswa" and $userdata->kelas==4){ ?>
        <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
       </li>
        <li <?php if ($page == 'LihatRewiew') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Skripsi/LihatRewiew'); ?>">
          <i class="fa fa-book"></i>
          <span>Lihat Hasil Rewiew</span>
        </a>
        </li>
      <?PHP }else if($userdata->akses=="kaprodi"){ ?>
        <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
       </li>
        <li <?php if ($page == 'LihatRewiew') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Skripsi/LihatRewiew'); ?>">
          <i class="fa fa-book"></i>
          <span>Cek Skripsi</span>
        </a>
        </li>
      <?PHP }?>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>