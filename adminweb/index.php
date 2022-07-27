<?php 
session_start();
if (empty($_SESSION['namauser']) and empty($_SESSION['passuser'])) {
	header('location: ../login.php');
}else{
?>

<!DOCTYPE html>
<html>
<?php include"../layouts/backend/head.php"?>
<body class="hold-transition sidebar-mini wysihtml5-supported skin-purple-light fixed">
<div class="wrapper">

 <?php include"../layouts/backend/header.php"?>
  <!-- Left side column. contains the logo and sidebar -->

 <?php include"../layouts/backend/sidebar.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php include"content.php"?>
  </div>
  <!-- /.content-wrapper -->
  <?php include"../layouts/backend/footer.php"?>
  <?php }?>