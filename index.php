<?php
    //Mulai Sesion
    session_start();
    if (isset($_SESSION["ses_username"])==""){
	header("location: login.php");
    
    }else{
      $data_id = $_SESSION["ses_id"];
      $data_nama = $_SESSION["ses_nama"];
      $data_user = $_SESSION["ses_username"];
	  $data_level = $_SESSION["ses_level"];
    }

    //KONEKSI DATABASE
    include "inc/koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RT12</title>
    <link rel="icon" href="dist/img/login.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Alert -->
    <script src="plugins/alert.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-cyan navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#">
                        <i class="fas fa-bars text-white"></i>
                    </a>
                </li>

            </ul>

            <!-- SEARCH FORM -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">
                        <font color="black">
                            <b>SISTEM INFORMASI DATA KEPENDUDUKAN RT</b>
                        </font>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-lightblue elevation-2">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="dist/img/login.png" alt="Logo" class="brand-image" style="opacity: .8">
                <span class="brand-text"> Aplikasi RT</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-2 pb-2 mb-2 d-flex">
                    <div class="image">
                        <img src="dist/img/admin.png">
                    </div>
                    <div class="info">
                        <a href="index.php" class="d-block">
                            <?php echo $data_nama; ?>
                        </a>
                        <span class="badge badge-success">
                            <?php echo $data_level; ?>
                        </span>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <!-- Level  -->
                        <?php
          if ($data_level=="Administrator"){
        	?>
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                <i class="nav-icon fa fa-desktop -alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-folder-open"></i>
                                <p>
                                    Kelola Data
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="?page=data-pend" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Penduduk</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?page=data-kartu" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Kartu Keluarga</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-desktop"></i>
                                <p>
                                    Sirkulasi Penduduk
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="?page=data-lahir" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Lahir</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?page=data-mendu" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Meninggal</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="?page=data-datang" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Pendatang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?page=data-pindah" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Pindah</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Kelola Surat
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="?page=suket-domisili" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Su-Ket Domisili</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?page=suket-lahir" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Su-Ket Kelahiran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?page=suket-mati" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Su-Ket Kematian</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?page=suket-datang" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Su-Ket Pendatang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?page=suket-pindah" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Su-Ket Pindah</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- pembukaan kelola laporan -->
                        <li class="nav-item has-treeview">-->
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-print"></i>
                                <p>
                                    Kelola Laporan
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Penduduk</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Kartu Keluarga</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Lahir</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Meninggal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Pendatang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Pindah</p>
                                    </a>
                                </li>
                            </ul>
                        </li>-->




                        <!-- penutup kelola laporan -->



                        <li class="nav-item">
                            <a href="?page=data-tagihan" class="nav-link">
                                <i class="nav-icon fas fa-money-check-alt"></i>
                                <p>
                                    Iuran Bulanan
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="?page=data-acara" class="nav-link">
                                <img src="dist/img/computer (1).png" alt="Logo" class="brand-image"
                                    style="width: 25px ">
                                <p>
                                    Acara Kegiatan
                                </p>
                            </a>
                        </li>


                        <!-- <li class="nav-header">tentang developments</li>
                        <li class="nav-item">
                            <a href="# " class="nav-link">
                                <i class="fa fa-forward" aria-hidden="true"></i>
                                <p>
                                    tentang website
                                </p>
                            </a>
                        </li> -->

                        <li class="nav-header">Setting</li>

                        <li class="nav-item">
                            <a href="?page=data-pengguna" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Pengguna Sistem
                                </p>
                            </a>
                        </li>

                        <?php
          				} elseif($data_level=="Ketua RT"){
          				?>

                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Kelola Data
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="?page=data-pend" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Penduduk</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?page=data-kartu" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Kartu Keluarga</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Sirkulasi Penduduk
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="?page=data-lahir" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Lahir</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?page=data-mendu" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Meninggal</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="?page=data-datang" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Pendatang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?page=data-pindah" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Pindah</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Kelola Surat
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Su-Ket Domisili</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Su-Ket Kelahiran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Su-Ket Kematian</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Su-Ket Pendatang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Su-Ket Pindah</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-header">Setting</li>

                        <?php
							}
						?>

                        <li class="nav-item">
                            <a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php"
                                class="nav-link">
                                <i class="nav-icon fas fa-arrow-circle-right"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>

                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- /. WEB DINAMIS DISINI NGAB ############################################################################### -->
                <div class="container">

                    <?php 
      if(isset($_GET['page'])){
          $hal = $_GET['page'];
  
          switch ($hal) {
              
				//Pengguna
				case 'data-pengguna':
					include "admin/pengguna/data_pengguna.php";
					break;
				case 'add-pengguna':
					include "admin/pengguna/add_pengguna.php";
					break;
				case 'edit-pengguna':
					include "admin/pengguna/edit_pengguna.php";
					break;
				case 'del-pengguna':
					include "admin/pengguna/del_pengguna.php";
					break;

				//kartu KK
				case 'data-kartu':
					include "admin/kartu/data_kartu.php";
					break;
				case 'add-kartu':
					include "admin/kartu/add_kartu.php";
					break;
				case 'edit-kartu':
					include "admin/kartu/edit_kartu.php";
					break;
				case 'anggota':
					include "admin/kartu/anggota.php";
					break;
				case 'del-anggota':
					include "admin/kartu/del_anggota.php";
					break;
				case 'del-kartu':
					include "admin/kartu/del_kartu.php";
					break;

				//Laki-laki
				case 'laki-laki':
					include "admin/pend/detail_pend.php";
					break;
				//penduduk
				case 'data-pend':
					include "admin/pend/data_pend.php";
					break;
				case 'add-pend':
					include "admin/pend/add_pend.php";
					break;
				case 'edit-pend':
					include "admin/pend/edit_pend.php";
					break;
				case 'del-pend':
					include "admin/pend/del_pend.php";
					break;
				case 'detail-pend':
					include "admin/pend/detail_pend.php";
					break;

				//lahir
				case 'data-lahir':
					include "admin/lahir/data_lahir.php";
					break;
				case 'add-lahir':
					include "admin/lahir/add_lahir.php";
					break;
				case 'edit-lahir':
					include "admin/lahir/edit_lahir.php";
					break;
				case 'del-lahir':
					include "admin/lahir/del_lahir.php";
					break;

                    
				//mendu
				case 'data-mendu':
					include "admin/mendu/data_mendu.php";
					break;
				case 'add-mendu':
					include "admin/mendu/add_mendu.php";
					break;
				case 'edit-mendu':
					include "admin/mendu/edit_mendu.php";
					break;
				case 'del-mendu':
					include "admin/mendu/del_mendu.php";
					break;

				//pindah
				case 'data-pindah':
					include "admin/pindah/data_pindah.php";
					break;
				case 'add-pindah':
					include "admin/pindah/add_pindah.php";
					break;
				case 'edit-pindah':
					include "admin/pindah/edit_pindah.php";
					break;
				case 'del-pindah':
					include "admin/pindah/del_pindah.php";
					break;

				//datang
				case 'data-datang':
					include "admin/datang/data_datang.php";
					break;
				case 'add-datang':
					include "admin/datang/add_datang.php";
					break;
				case 'edit-datang':
					include "admin/datang/edit_datang.php";
					break;
				case 'del-datang':
					include "admin/datang/del_datang.php";
					break;
					
				//suket
				case 'suket-domisili':
					include "surat/suket_domisili.php";
					break;
				case 'suket-lahir':
					include "surat/suket_lahir.php";
					break;
				case 'suket-mati':
					include "surat/suket_mati.php";
					break;
				case 'suket-datang':
					include "surat/suket_datang.php";
					break;
				case 'suket-pindah':
					include "surat/suket_pindah.php";
					break;
				
				//laporan
				case 'laporan-lahir':
					include "report/cetak_lahir.php";
					break;
				case 'suket-lahir':
					include "surat/suket_lahir.php";
					break;
				case 'suket-mati':
					include "surat/suket_mati.php";
					break;
				case 'suket-datang':
					include "surat/suket_datang.php";
					break;
				case 'suket-pindah':
					include "surat/suket_pindah.php";
					break;

				//Tagihan
				case 'data-tagihan':
					include "admin/tagihan/data_tagihan.php";
					break;
				case 'add-tagihan':
					include "admin/tagihan/add_tagihan.php";
					break;
				case 'del-tagihan':
					include "admin/tagihan/del_tagihan.php";
					break;
				case 'edit-tagihan':
					include "admin/tagihan/edit_tagihan.php";
					break;

				//Acara Kegiatan
				case 'data-acara':
					include "admin/acara/data_acara.php";
					break;
				case 'add-acara':
					include "admin/acara/add_acara.php";
					break;
				case 'del-acara':
					include "admin/acara/del_acara.php";
					break;
				case 'edit-acara':
					include "admin/acara/edit_acara.php";
					break;

          
              //default
              default:
                  echo "<center><h1> ERROR !</h1></center>";
                  break;    
          }
      }else{
        // Auto Halaman Home Pengguna
          if($data_level=="Administrator"){
              include "home/admin.php";
              }
          elseif($data_level=="Ketua RT"){
              include "home/ketua_rt.php";
              }
          }
    ?>

                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="text-center p-2">
                © 2023 Copyright:
                <a class="text-black fw-bold" href="index.php">made in Mahasiswa esa unggul</a>
                </a>
                <b> Faishol </b>
            </div>

        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="plugins/select2/js/select2.full.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- page script -->
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <script>
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
    </script>

    <script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    })
    </script>

</body>

</html>