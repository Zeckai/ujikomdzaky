<?php
$id = $_SESSION['admin']['id_member'];
$hasil_profil = $lihat->member_edit($id);
?>

<aside class="navbar-nav  sidebar-dark-primary elevation-4 ">


  <ul class=" bg-dark sidebar sidebar-dark accordion nav nav-pills nav-sidebar flex-column" id="accordionSidebar             data-widget=" treeview" role="menu" data-accordion="false">

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

        </div>
        <div class="info">
          <span class="brand-text font-weight-light font-weight-bold">Kasir Ritel</span>
        </div>
      </div>



      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">



          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard

              </p>
            </a>
          </li>
          <hr class="sidebar-divider d-none d-md-block">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=barang">
                  <i class="fas fa-box-open nav-icon"></i>
                  <p>Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=jual">
                  <i class="fas fa-exchange-alt nav-icon"></i>
                  <p>Transaksi</p>
                </a>
              </li>
            </ul>
          </li>
          <hr class="sidebar-divider d-none d-md-block">
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=laporan">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Laporan

              </p>
            </a>
          </li>
        </ul>
      </nav>

    </div>









  </ul>
</aside>

<div id="content-wrapper" class="d-flex flex-column">


  <div id="content">

 
    <nav class="navbar navbar-expand navbar-dark navbar-light static-top shadow">

      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>
      <!-- <h5 class="d-lg-block d-none mt-2"><b><?php echo $toko['nama_toko']; ?></b></h5> -->
    

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link" href="logout.php">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </li>
      </ul>

      </ul>
    </nav>

    <div class="container-fluid">