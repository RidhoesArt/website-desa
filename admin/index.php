<?php 
  ob_start();
  session_start();

  include "../config/config.php";

  if(!$_SESSION['user']) {
    header("location: login.php");
  }


  require_once "template/header.php";

?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
        <?php 

          if(isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
              case 'home':
                include "dashboard/index.php";
                break;

              case 'tampil-beranda':
                include "beranda/data-beranda.php";
                break;

              case 'tambah-beranda':
                include "beranda/tambah-beranda.php";
                break;

              case 'hapus-beranda':
                include "beranda/hapus-beranda.php";
                break;

              case 'edit-beranda':
                include "beranda/edit-beranda.php";
                break;

              case 'tampil-berita':
                include "berita/data-berita.php";
                break;

              case 'tambah-berita':
                include "berita/tambah-berita.php";
                break;

              case 'hapus-berita':
                include "berita/hapus-berita.php";
                break;

              case 'edit-berita':
                include "berita/edit-berita.php";
                break;

              case 'kebijakan':
                include "kebijakan/index.php";
                break;

              case 'peraturan':
                include "peraturan/index.php";
                break;

              case 'galeri':
                include "galeri/index.php";
                break;

              case 'hapus-galeri':
                include "galeri/hapus-galeri.php";
                break;

              case 'struktur-organisasi':
                include "struktur/index.php";
                break;

              case 'user':
                include "akun/index.php";
                break;

              case 'visiMisi':
                include "profile/visiMisi.php";
                break;

              case 'data-penduduk':
                include "penduduk/index.php";
                break;

              case 'tambah-data-penduduk':
                include "penduduk/tambah-data.php";
                break;

              case 'hapus-data-penduduk':
                include "penduduk/hapus-data.php";
                break;

              case 'hapus-penduduk':
                include 'penduduk/hapus_data.php';
                break;

              case 'tambah-data-informasi':
                include 'informasi tambahan/tambah-data-informasi.php';
                break;

              case 'data-informasi':
                include 'informasi tambahan/data-informasi.php';
                break;


              default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
            }
          } else {
            include "dashboard/index.php";
          }

         ?>

      </div>
      <!-- /. New Row -->
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<?php 

  require_once "template/footer.php";

?>