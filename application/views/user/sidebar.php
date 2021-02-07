<aside class="main-sidebar">

  <section class="sidebar">

    <div class="user-panel">

      <div class="pull-left image">
        <img src="<?php echo base_url("assets/admin/img/user2-160x160.jpg"); ?>" class="img-circle" alt="User Image">
      </div>
      
      <div class="pull-left info">
        <p><?php echo $profil['nama_user']; ?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>

    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU</li>
      <li <?php if($halaman=="home"){echo "class='active'";} ?>>
        <a href="<?php echo base_url("user"); ?>"><i class="fa fa-link"></i> <span>Home</span></a>
      </li>
      <li <?php if($halaman=="berita"){echo "class='active'";} ?>>
        <a href="<?php echo base_url("user/berita"); ?>"><i class="fa fa-newspaper-o"></i> <span>Berita</span></a>
      </li>
      <li <?php if($halaman=="guru"){echo "class='active'";} ?>>
        <a href="<?php echo base_url("user/guru"); ?>"><i class="fa fa-users"></i> <span>Guru</span></a>
      </li>
      <li <?php if($halaman=="profil"){echo "class='active'";} ?>>
        <a href="<?php echo base_url("user/profil/edit"); ?>"><i class="fa fa-user"></i> <span>Profil</span></a>
      </li>
      <li>
        <a href="<?php echo base_url("user/logout"); ?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a>
      </li>
    </ul>
  </section>
  
</aside>