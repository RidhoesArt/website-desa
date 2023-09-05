<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | Desa Keude Krueng Geukueh</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/css/be/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="../assets/css/ionicons.min.css">
  <!-- Main CSS -->
  <link rel="stylesheet" href="../assets/css/be/adminlte.min.css">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <style>
    .table tr td {
      width: 20px;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a href="logout.php" class="nav-link text-primary"><i class="fas fa-sign-out-alt"></i>&nbsp;Log Out</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php?page=beranda" class="brand-link">
      <img src="../assets/img/be/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light h6">Keude Krueng Geukueh</span>
    </a>

    <?php
        include "../config/config.php";

        $sql = mysqli_query($con, "SELECT * FROM tbl_users WHERE id_user='$_SESSION[id]'");
        $data = mysqli_fetch_array($sql);
     ?>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/img/<?= $data['img'] ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $_SESSION['pengguna'] ?></a>
        </div>
      </div>

<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<!-- Add icons to the links using the .nav-icon class
    with font-awesome or any other icon font library -->
<?php if($_SESSION['lvluser'] == 1) { ?>
    <li class="nav-item menu-open">
      <a href="index.php?page=home" class="nav-link active">
      <i class="bi bi-speedometer"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li>

    <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="bi bi-file-earmark-post"></i>
      <p> Posting<i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>
            Post Beranda
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.php?page=tampil-beranda" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>Data Beranda</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=tambah-beranda" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>Tambah Data</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>
            Post Berita
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.php?page=tampil-berita" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>Data Berita</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=tambah-berita" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>Tambah Berita</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
</li>

    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="bi bi-person-square"></i>
        <p>
          Profile
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="index.php?page=visiMisi" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Visi Misi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Sejarah Desa
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Gambaran Umum
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Struktur Organisasi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?page=galeri" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
                Galeri
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
      </ul>
    </li>
    
    <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="bi bi-bar-chart-line-fill"></i>
      <p>Data Desa<i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>
            Penduduk
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.php?page=data-penduduk" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>Data Penduduk</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=tambah-data-penduduk" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>Tambah Data</p>
            </a>
          </li>
        </ul>
      </li>
      <!-- <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>
            Post Berita
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.php?page=tampil-berita" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>Data Berita</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=tambah-berita" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>Tambah Berita</p>
            </a>
          </li>
        </ul>
      </li> -->
    </ul>

    <li class="nav-item">
      <a href="index.php?page=kebijakan" class="nav-link">
      <i class="bi bi-cone-striped"></i>
        <p>
          Kebijakan
          <!-- <span class="right badge badge-danger">New</span> -->
        </p>
      </a>
    </li>
<li class="nav-item">
  <a href="#" class="nav-link">
  <i class="bi bi-info-square-fill"></i>
    <p>
      Informasi Tambahan
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
      <p>
        Aparatur Desa
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="index.php?page=data-informasi" class="nav-link">
          <i class="far fa-dot-circle nav-icon"></i>
          <p>Data Informasi</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="index.php?page=tambah-data-informasi" class="nav-link">
          <i class="far fa-dot-circle nav-icon"></i>
          <p>Tambah Data Informasi</p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
      <p>
        Galeri Album
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="index.php?page=tampil-berita" class="nav-link">
          <i class="far fa-dot-circle nav-icon"></i>
          <p>Data Berita</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="index.php?page=tambah-berita" class="nav-link">
          <i class="far fa-dot-circle nav-icon"></i>
          <p>Tambah Berita</p>
        </a>
      </li>
    </ul>
  </li>
</ul>


            
        <?php } elseif($_SESSION['lvluser'] == 2) { ?>
          <li class="nav-item menu-open">
              <a href="index.php?page=home" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Posting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Post Berita
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="index.php?page=tampil-berita" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Data Berita</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?page=tambah-berita" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Tambah Berita</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        <?php } ?>
          <li class="nav-item">
              <a href="index.php?page=user" class="nav-link">
              <i class="bi bi-person-fill"></i>
                <p>
                  Akun
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active"><?= $_GET['page'] ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->