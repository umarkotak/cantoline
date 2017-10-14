<?php session_start(); ?>

<?php include "user_model.php" ?>

<?php if (isset($_POST['submit'])) :?>

<!-- ============================================== REGISTER ============================================= -->

	<?php if ($_POST['submit'] == "register") {
		$nim = $_POST['nim'];
		$nama = strtolower($_POST['nama']);
		$telepon = $_POST['telepon'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];

		if ($password == $cpassword) {
			if(daftar_user($nim, $nama, $telepon, $email, $password)==TRUE){
				$_SESSION['error'] = FALSE;
				$_SESSION['data'] = array( 'pesan' => "$nim - $nama telah berhasil terdaftar" );
				//header("refresh: 0; url=../../login.php");
				header("location: ../../login.php");
			} else {
				$_SESSION['error'] = TRUE;
				$_SESSION['data'] = array( 'pesan' => "terjadi kesalahan dalam pendaftara, error : ".$_SESSION['data']['retdata'] );
				header("location: ../../daftar.php");
			}

		} else {
			$_SESSION['error'] = TRUE;
			$_SESSION['data'] = array( 'pesan' => "konfirmasi password anda salah" );
			header("location: ../../daftar.php");
		}
		
	} ?>

<!-- ============================================== LOGIN    ============================================= -->	

	<?php if ($_POST['submit'] == "login") {
		$nim = $_POST['nim'];
		$password = $_POST['password'];

		if (login_user($nim, $password)==TRUE) {
			$_SESSION['error']=FALSE;
			header("location: ../../");
		} else {
			$_SESSION['error']=TRUE;
			$_SESSION['data'] = array( 'pesan' => "nim atau password yang anda masukkan salah" );
			header("location: ../../login.php");
		}
	} ?>

<!-- ============================================== PESAN    ============================================= -->
<!-- ============================================== KONFIRMASI =========================================== -->

<?php endif; ?>

<!-- ============================================== LOGOUT   ============================================= -->

<?php if (isset($_GET['logout']) && $_GET['logout']==TRUE): ?>
	<?php logout(); ?>
	<?php header("location: ../../"); ?>
<?php endif ?>