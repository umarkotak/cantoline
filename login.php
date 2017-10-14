<?php session_start(); ?>

<?php include "pages/head.php"    ?>

<?php if (isset($_SESSION['error'])) { 
        $pesan = $_SESSION['data']['pesan']; 
         ?>

<?php if ($_SESSION['error']==FALSE): ?>
  <div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <?php echo $pesan; ?>
  </div>
<?php elseif ($_SESSION['error']==TRUE): ?>
  <div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <?php echo $pesan; ?>
  </div>
<?php endif; ?>
 <?php unset($_SESSION['error']); } ?>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>CANTO</b>LINE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="pages/user/user_controller.php" method="post">
      <div class="form-group has-feedback">
        <input type="username" class="form-control" placeholder="NIM" name="nim" required autofocus>
        <span class="fa fa-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-6">
          <a href="daftar.php" class="btn btn-primary btn-block btn-flat"><i class="fa fa-level-up"></i> Daftar</a>
        </div>
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit" value="login"><i class="fa fa-sign-in"></i> Login</button>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xs-12">
            <p align="center"><small>Jika belum mendaftar, silahkan mendaftar terlebih dahulu</small></p>
        </div>
      </div>

    </form>
  </div>

</div>
</body>

<?php include "pages/footer.php" ?>