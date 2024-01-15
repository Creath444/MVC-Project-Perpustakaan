<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="<?=base_url?>/assets/images/faces/SATRIA.jpg" alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">Tampan Satria</span>
          <span class="text-secondary text-small">Administrator</span>
          <!-- <span class="font-weight-bold mb-2"><?=$data['nama'] ?></span>
          <span class="text-secondary text-small"><?=$data['username'] ?></span> -->
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?=base_url;?>/home">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-title">Data Buku</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?=base_url?>/kategori">Kategori</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?=base_url?>/buku">Buku</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?=base_url?>/user">
        <span class="menu-title">User</span>
        <i class="mdi mdi-contacts menu-icon"></i>
      </a>
    </li>
  </ul>
</nav>

<!-- HOME -->
<div class="main-panel">
<!-- NEXT HOME -->


