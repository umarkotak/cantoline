<?php session_start(); ?>

<?php include "pages/head.php"; ?>

<?php if (isset($_SESSION['error'])) { 
        $pesan = $_SESSION['data']['pesan']; 
        unset($_SESSION['error']); ?>

<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <?php echo $pesan; ?>
</div>

 <?php } ?>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>CANTO</b>LINE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="pages/user/user_controller.php" method="post">

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="NIM" name="nim" required>
        <span class="fa fa-credit-card form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nomor Telepon" name="telepon" required>
        <span class="fa fa-phone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password" name="cpassword" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <div class="checkbox">
            <label>
              <input type="checkbox" required> *Saya sudah mengecek kembali data yang saya masukkan
            </label>
          </div>
      </div>

      <div>
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit" value="register">Register</button>
        </div>
      </div>
      <br>
    </form>
  </div>

</div>
</body>

<?php include "pages/footer.php"; ?>