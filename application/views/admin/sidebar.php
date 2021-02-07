<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">

      <div class="pull-left image">
        <img src="<?php echo base_url("assets/admin/img/user2-160x160.jpg"); ?>" class="img-circle" alt="User Image">
      </div>
      
      <div class="pull-left info">
        <p><?php echo $profil['nama_admin']; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>

    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU</li>

      <!-- Optionally, you can add icons to the links -->
      <li <?php if($halaman=="home"){echo "class='active'";} ?>>
        <a href="<?php echo base_url("admin"); ?>"><i class="fa fa-link"></i> <span>Home</span></a>
      </li>
      <li <?php if($halaman=="guru"){echo "class='active'";} ?>>
        <a href="<?php echo base_url("admin/guru"); ?>"><i class="fa fa-users"></i> <span>Guru</span></a>
      </li>
      <li <?php if($halaman=="kategori"){echo "class='active'";} ?>>
        <a href="<?php echo base_url("admin/kategori"); ?>"><i class="fa fa-tags"></i> <span>Kategori</span></a>
      </li>
      <li <?php if($halaman=="berita"){echo "class='active'";} ?>>
        <a href="<?php echo base_url("admin/berita"); ?>"><i class="fa fa-newspaper-o"></i> <span>Berita</span></a>
      </li>
      <li <?php if($halaman=="halaman"){echo "class='active'";} ?>>
        <a href="<?php echo base_url("admin/halaman"); ?>"><i class="fa fa-files-o"></i> <span>Halaman</span></a>
      </li>
      <li <?php if($halaman=="menu"){echo "class='active'";} ?>>
        <a href="<?php echo base_url("admin/menu"); ?>"><i class="fa fa-align-justify"></i> <span>Menu</span></a>
      </li>
      <li <?php if($halaman=="galeri"){echo "class='active'";} ?>>
        <a href="<?php echo base_url("admin/galeri"); ?>"><i class="fa fa-folder-open"></i> <span>Galeri</span></a>
      </li>
      <li <?php if($halaman=="media"){echo "class='active'";} ?>>
        <a href="<?php echo base_url("admin/media"); ?>"><i class="fa fa-folder-open"></i> <span>Media</span></a>
      </li>
      <li <?php if($halaman=="album"){echo "class='active'";} ?>>
        <a href="<?php echo base_url("admin/album"); ?>"><i class="fa fa-image"></i> <span>Album</span></a>
      </li>
      <li <?php if($halaman=="user"){echo "class='active'";} ?>>
        <a href="<?php echo base_url("admin/user"); ?>"><i class="fa fa-user"></i> <span>User</span></a>
      </li>
      <li <?php if($halaman=="pengaturan"){echo "class='active'";} ?>>
        <a href="<?php echo base_url("admin/pengaturan"); ?>"><i class="fa fa-gear"></i> <span>Pengaturan</span></a>
      </li>
      <li>
        <a href="<?php echo base_url("admin/logout"); ?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a>
      </li>
    </ul>

  </section>
  
</aside>