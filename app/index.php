<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!$_SESSION['nama']) {
    header('Location:../index.php?session=expired');
}
include 'header.php';
?>

<?php include '../conf/config.php'; ?>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php include 'preloader.php'; ?>

  <!-- Navbar -->
  <?php include 'navbar.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php include 'logo.php'; ?>

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include 'content_header.php'; ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php if (isset($_GET['page'])) {
        if ($_GET['page'] == 'dahsboard') {
            include 'dahsboard.php';
        } elseif ($_GET['page'] == 'data-mahasiswa') {
            include 'datamahasiswa.php';
        } elseif ($_GET['page'] == 'edit-data') {
            include 'edit/edit_data.php';
        } elseif ($_GET['page'] == 'users-data') {
            include 'users.php';
        } else {
            include 'data-matakuliah.php';
        }
    } else {
        include 'dahsboard.php';
    } ?>
    <!-- /.content -->

  </div>


  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php include 'footer.php'; ?>
</div>
<!-- ./wrapper -->


</body>
</html>
