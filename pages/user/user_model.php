<?php 

function daftar_user($nim, $nama, $telepon, $email, $pass){
	include "../connect.php";

	$sql = "insert into tbl_user values('$nim','$nama','$pass','user','$telepon','$email',0)";

	if ($conn->query($sql)==FALSE) {
		$_SESSION['data'] = array( 'retdata' => $conn->error );
		return FALSE;
	} else {
		return TRUE; 
	}
}

function login_user($nim, $pass){
	include "../connect.php";

	$sql = "select * from tbl_user where nim='$nim'";

	$result = $conn->query($sql);

	foreach ($result as $row) {
		if ($row['nim']==$nim && $row['password']==$pass) {
			$_SESSION['userdata'] = array( 'nim' => $row['nim'],
										   'nama' => $row['nama'],
										   'saldo' => $row['saldo']
										 );
			$_SESSION['status'] = $row['status'];
			$_SESSION['logged'] = TRUE;
			return TRUE;
		} else {
			$_SESSION['logged'] = FALSE;
			return FALSE;
		}
	}
}

function logout(){
	unset($_SESSION['userdata']);
	unset($_SESSION['status']);
	unset($_SESSION['logged']);
	unset($_SESSION['error']);
}

 ?>