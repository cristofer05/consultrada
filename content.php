<?php
require_once "config/database.php";
require_once "config/fungsi_tanggal.php";
require_once "config/fungsi_rupiah.php";


if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
else {
	if ($_GET['module'] == 'dashboard') {
		include "modules/dboard/view.php";
	}

	elseif ($_GET['module'] == 'socios') {
		include "modules/socios/view.php";
	}

	elseif ($_GET['module'] == 'form_socios') {
		include "modules/socios/form.php";
	}


	elseif ($_GET['module'] == 'escanear') {
		include "modules/escanear/form.php";
	}


	elseif ($_GET['module'] == 'crear_corte') {
		include "modules/crear_corte/view.php";
	}

	elseif ($_GET['module'] == 'ver_cortes') {
		include "modules/ver_cortes/view.php";
	}

	elseif ($_GET['module'] == 'user') {
		include "modules/user/view.php";
	}

	elseif ($_GET['module'] == 'form_user') {
		include "modules/user/form.php";
	}

	elseif ($_GET['module'] == 'profile') {
		include "modules/profile/view.php";
	}

	elseif ($_GET['module'] == 'form_profile') {
		include "modules/profile/form.php";
	}

	elseif ($_GET['module'] == 'password') {
		include "modules/password/view.php";
	}

	elseif ($_GET['module'] == 'entrada_corte') {
		include "modules/entrada_corte/view.php";
	}

	elseif ($_GET['module'] == 'consultrada') {
		include "modules/consultrada/view.php";
	}
	elseif ($_GET['module'] == 'detalles') {
		include "modules/consultrada/detalles.php";
	}
	elseif ($_GET['module'] == 'vermagento') {
		include "modules/consultrada/vermagento.php";
	}
}
?>
