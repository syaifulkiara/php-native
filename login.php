<?php 
session_start();
include "adminweb/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin WEB | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/backend/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/backend/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/backend/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/backend/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/backend/plugins/iCheck/square/blue.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
  
<div class="login-box">
  <div class="login-logo">
    <a href="login.php"><b>Admin</b>WEB</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <?php
        if(!empty($_GET['msg'])){
        if($_GET['msg'] == 1){
        echo'<div class="alert alert-danger alert-dismissible">Silakan Masukan Username dan Password</div>';
        }elseif($_GET['msg'] == 2){
        echo'<div class="alert alert-danger alert-dismissible">Akun anda diblokir !!!</div>';
        }elseif($_GET['msg'] == 3){
         echo'<div class="alert alert-warning alert-dismissible">Username atau Password Salah !</div>';
        }
        }
        ?>
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="adminweb/cek_login.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="assets/backend/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
