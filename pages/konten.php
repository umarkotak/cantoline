<?php 
if (isset($_GET['page'])) {
	
	if ($_GET['page'] == "makanminum") 		{ include "user/makanminum.php"; 		}
	if ($_GET['page'] == "pesan") 	   		{ include "user/pesan.php"; 			}
	if ($_GET['page'] == "settingmenu") 	{ include "admin/setting-menu.php"; 	}
	if ($_GET['page'] == "settingorder") 	{ include "admin/setting-order.php"; 	}
	if ($_GET['page'] == "settinguser") 	{ include "admin/setting-user.php"; 	}

} else {

	include "user/dashboard.php";

}
?>