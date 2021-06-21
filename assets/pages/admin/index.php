<?php
session_start();
include '../../config/db.php';
$id=$_SESSION['login'];
  $perintah = "SELECT * FROM tb_user where id='$id'";
  $dataw = mysqli_query($conn, $perintah);
  $data = mysqli_fetch_array($dataw);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.thedevelovers.com/dashboard/klorofilpro-v2.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 23:44:08 GMT -->
<head>
  <title>Rumah.com</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link href="../../plugins/datatables.net-bs4/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

  <!-- Datatables extensions css -->
  <link href="../../plugins/datatables.net-buttons-bs4/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <link href="../../plugins/datatables.net-colreorder-bs4/colreorder.bootstrap4.min.html" rel="stylesheet" type="text/css" />
  <!-- jQuery UI required by datepicker editable -->
  <link href="../../plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />

  <!-- JQVMap css -->
  <link href="../../plugins/jqvmap/jqvmap.min.css" rel="stylesheet" type="text/css" />

  <!-- Bootstrap Tour css -->
  <link href="../../plugins/bootstrap-tour/bootstrap-tour-standalone.min.css" rel="stylesheet" type="text/css" />

  <!-- App css -->
  <link href="../../css/bootstrap-custom.min.css" rel="stylesheet" type="text/css" />
  <link href="../../css/app.min.css" rel="stylesheet" type="text/css" />

  <link href="../../plugins/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../images/favicon.png">
</head>
<body>
  <!-- WRAPPER -->
  <div id="wrapper">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand fixed-top">
      <div class="navbar-brand d-none d-lg-block">
        <a href=""><img src="../../images/logo.png" class="img-fluid logo"></a>
      </div>
      <div class="container-fluid p-0">
        <button id="tour-fullwidth" type="button" class="btn btn-default btn-toggle-fullwidth"><i class="ti-menu"></i></button>
        <form class="form-inline search-form mr-auto d-none d-sm-block col-8">
          <div class="input-group">
            <input type="text" value="" class="form-control" placeholder="Search dashboard...">
            <div class="input-group-append">
              <button type="button" class="btn"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </form>
        <div id="navbar-menu">
          <ul class="nav navbar-nav align-items-center">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../../images/upload/profile/<?php echo $data['image']; ?>" class="user-picture" alt="Avatar"> <span><?php echo $data['nama']; ?></span></a>
                <ul class="dropdown-menu dropdown-menu-right logged-user-menu">
                <li><a href="?page=agen&aksi=editpp&id=<?php echo $data['id']; ?>"><i class="ti-tools"></i> <span>Edit Profile</span></a></li>
                <li><a href="../logout.php"><i class="ti-power-off"></i> <span>Logout</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
      <nav>
        <ul class="nav" id="sidebar-nav-menu">
          <li class="menu-group">Main</li>
          <?php 
          if (isset($_SESSION["login"])) 
            {
              $id = $_SESSION['login'];
            $cekusersql = "
              SELECT * FROM tb_user
              WHERE id = '$id'";
            $cekuser = mysqli_query($conn, $cekusersql);
            $datauser = mysqli_fetch_array($cekuser);
            
            $level = $datauser['level'];
            $namauser = $datauser['nama'];

            if ($level == '0') 
            {
              echo '
              <li><a href="index.php" class=""><i class="ti-dashboard"></i> <span class="title">Beranda</span></a></li>
              <li><a href="?page=agen&aksi=view" class=""><i class="ti-user"></i> <span class="title">Agen</span></a></li>
              <li><a href="?page=property&aksi=view" class=""><i class="ti-receipt"></i> <span class="title">Rumah</span></a></li>
              ';
            }else if ($level == '1') 
            {
              echo '
              <li><a href="index.php" class=""><i class="ti-dashboard"></i> <span class="title">Beranda</span></a></li>
              <li><a href="?page=property&aksi=view" class=""><i class="ti-receipt"></i> <span class="title">Rumah</span></a></li>
              ';
            }else  
            {
              echo '
              <li><a href="?page=property&aksi=view" class=""><i class="ti-receipt"></i> <span class="title">Rumah</span></a></li>
              ';
            }
          } 
          ?>
          <img src="../../images/logo2.png" style="width: 70%; padding-top: 80px; margin: auto;">
        </ul>

        <button type="button" class="btn-toggle-minified" title="Toggle Minified Menu"><i class="ti-arrows-horizontal"></i></button>
      </nav>
    </div>
    <!-- END LEFT SIDEBAR -->

    <!-- MAIN -->
    <div class="main">

      <!-- MAIN CONTENT -->
      <div class="main-content">

        <div class="content-heading">
          <div class="heading-left">
            <?php
              include '../../config/db.php';
              $id = $_SESSION['login'];
                  $cekusersql = "
                    SELECT * FROM tb_user
                    WHERE id = '$id'";
                  $cekuser = mysqli_query($conn, $cekusersql);
                  $datauser = mysqli_fetch_array($cekuser);
                  $level=$datauser['level'];
                  if ($level==0) {
                    $title='Admin';
                  }else if ($level==1) {
                    $title='Agen';
                  }else {
                    $title='Pemilik';
                  }
            ?>
            <h1 class="page-title">Selamat Datang <?php echo $title ?> || <?php echo $datauser['email'] ?></h1>
          </div>
        </div>

        <div class="container-fluid">
          <!-- MINI BAR CHARTS -->
          <div class="row">
            <?php 
                include '../../config/db.php';
                error_reporting(0);
                $page = $_GET['page'];
                $aksi = $_GET['aksi'];    
                        if ($page == "agen") {
                          if ($aksi == "view") {
                            include "agen-view.php";
                          }else if ($aksi == "input") {
                            include "agen-input.php";
                          }else if ($aksi == "editpp") {
                            include "agen-editpp.php";
                          }else if ($aksi == "edit") {
                            include "agen-edit.php";
                          }else if ($aksi == "delete") {
                            include "agen-delete.php";
                          }else if ($aksi == "detail") {
                            include "agen-detail.php";
                          }
                        }else if ($page == "pemilik") {
                          if ($aksi == "view") {
                            include "pemilik-view.php";
                          }else if ($aksi == "input") {
                            include "pemilik-input.php";
                          }else if ($aksi == "edit") {
                            include "pemilik-edit.php";
                          }else if ($aksi == "delete") {
                            include "pemilik-delete.php";
                          }
                        }else if ($page == "property") {
                          if ($aksi == "view") {
                            include "property-view.php";
                          }else if ($aksi == "input") {
                            include "property-input.php";
                          }else if ($aksi == "edit") {
                            include "property-edit.php";
                          }else if ($aksi == "delete") {
                            include "property-delete.php";
                          }else if ($aksi == "detail") {
                            include "property-detail.php";
                          }else if ($aksi == "terjual") {
                            include "property-terjual.php";
                          }
                        }else{
                            include "home.php";
                        }
                ?>
          </div>
          <!-- END MINI BAR CHARTS -->

          </div>
          <!-- END PERFORMANCE INDEX -->
        </div>
      </div>
      <!-- END MAIN CONTENT -->


    </div>
    <!-- END MAIN -->

    <div class="clearfix"></div>
    
    <!-- footer -->
    <footer>
      <div class="container-fluid bg-dark navbar-expand fixed-bottom text-center">
        <p>Follow Us On <span class="fa fa-facebook p-1" style="font-size: 20px;"></span> <span class="fa fa-instagram p-1" style="font-size: 20px;"></span>
        </p>
        <p>&copy; 2021 ||<a href=""> rumah.com</a> . All Rights Reserved.</p>
      </div>
    </footer>
    <!-- end footer -->


  </div>
  <!-- END WRAPPER -->

  <!-- Vendor -->
  <script src="../../js/vendor.min.js"></script>

  <!-- Plugins -->
  <script src="../../plugins/jquery-jeditable/jquery.jeditable.min.js"></script>
  <script src="../../plugins/jquery.maskedinput/jquery.maskedinput.js"></script>
  <script src="../../plugins/jquery-jeditable/jquery.jeditable.masked.min.js"></script>
  <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script> <!-- required by datepicker plugin -->
  <script src="../../plugins/jquery-jeditable/jquery.jeditable.datepicker.min.js"></script>
  <script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../../plugins/jqvmap/maps/jquery.vmap.world.js"></script>
  <script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <script src="../../plugins/flot/jquery.canvaswrapper.js"></script>
  <script src="../../plugins/flot/jquery.colorhelpers.js"></script>
  <script src="../../plugins/flot/jquery.flot.js"></script>
  <script src="../../plugins/flot/jquery.flot.saturated.js"></script>
  <script src="../../plugins/flot/jquery.flot.browser.js"></script>
  <script src="../../plugins/flot/jquery.flot.drawSeries.js"></script>
  <script src="../../plugins/flot/jquery.flot.uiConstants.js"></script>
  <script src="../../plugins/flot/jquery.flot.resize.js"></script>
  <script src="../../plugins/flot/jquery.flot.legend.js"></script>
  <script src="../../plugins/flot/jquery.flot.hover.js"></script>
  <script src="../../plugins/flot/jquery.flot.time.js"></script>
  <script src="../../plugins/jquery.flot.tooltip/jquery.flot.tooltip.min.js"></script>
  <script src="../../plugins/justgage/raphael.min.js"></script>
  <script src="../../plugins/justgage/justgage.min.js"></script>
  <script src="../../plugins/datatables.net/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables.net-bs4/dataTables.bootstrap4.min.js"></script>
  <script src="../../plugins/jquery.appear/jquery.appear.js"></script>
  <script src="../../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="../../plugins/bootstrap-tour/bootstrap-tour-standalone.js"></script>
  <!-- Datables Core -->
  <script src="../../plugins/datatables.net/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables.net-bs4/dataTables.bootstrap4.min.js"></script>

  <!-- Datables Extension -->
  <script src="../../plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../../plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="../../plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="../../plugins/jszip/jszip.min.js"></script>
  <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../../plugins/datatables.net-buttons-bs4/buttons.bootstrap4.min.js"></script>
  <script src="../../plugins/datatables.net-colreorder/dataTables.colReorder.min.js"></script>
  <script src="../../plugins/datatables.net-colreorder-bs4/colReorder.bootstrap4.min.js"></script>
  <!-- Sweet Alerts Plugin -->
  <script src="../../plugins/sweetalert2/sweetalert2.all.min.js"></script>

  <!-- Sweet Alerts Init -->
  <script src="../../js/pages/sweetalert2.init.min.js"></script>

  <!-- Datatables Init -->
  <script src="../../js/pages/tables-dynamic.init.min.js"></script>

  <script src="../../plugins/dropify/js/dropify.min.js"></script>

  <!-- Uploader Init -->
  <script src="../../js/pages/forms-dragdropupload.init.min.js"></script>

  <!-- Init -->
  <script src="../../js/pages/dashboard.init.js"></script>
  <script src="../../js/pages/ui-dragdroppanel.init.min.js"></script>

  <!-- App -->
  <script src="../../js/app.min.js"></script>
</body>

<!-- Mirrored from demo.thedevelovers.com/dashboard/klorofilpro-v2.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 23:45:23 GMT -->
</html>