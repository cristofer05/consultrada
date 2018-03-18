<?php
function nombre_usuario($user_id){
	global $mysqli;
	$query=mysqli_query($mysqli,"select id_user,name_user from usuarios where id_user=$user_id");
	$datas  = mysqli_fetch_assoc($query);
	$value=$datas['name_user'];
	return $value;
}
function get_row($table,$row, $campo, $equal){
	global $mysqli;
	$query=mysqli_query($mysqli,"select $row from $table where $campo='$equal'");
	$rw=mysqli_fetch_array($query);
	$value=$rw[$row];
	return $value;
}
/*******************CREACION DE LOG***************************/
function guardar_historial($id_producto,$user_id,$fecha,$registro,$quantity,$edicion,$ubicacion,$qty_total){
	global $mysqli;
	$sql="INSERT INTO logs (id_producto, id_user, fecha_log, registro, qty, edicion, ubicacion, qty_total)
	VALUES ($id_producto, $user_id, '$fecha', '$registro', $quantity, '$edicion', '$ubicacion', $qty_total)";
	$query=mysqli_query($mysqli,$sql);
	return $query;

}
/*******************EDICION PARA LOG***************************/
function edicion($id_producto,$qty,$ubicacion,$realizado){
	global $mysqli;
	$query=mysqli_query($mysqli,"select ubicacion from productos where id_producto=$id_producto");
	$datas  = mysqli_fetch_assoc($query);
	$ubi_original=$datas['ubicacion'];
		if ($qty > 0) {
			$value=$qty." (+)";
			if ($ubi_original != $ubicacion) {
				$value=$value." / Movido a (".$ubicacion.")";
			}
		}elseif ($ubi_original != $ubicacion) {
			$value="Movido a (".$ubicacion.")";
		}elseif ($realizado==1) {
			$value="Despublicado";
		}elseif ($realizado==0) {
			$value="Publicado";
		}else {
			$value="OTRO";
		}

	return $value;
}
/*******************ACCION AL SUMAR***************************/
function seccion($id_producto){
	global $mysqli;
	$query=mysqli_query($mysqli,"select realizado,seccion from productos where id_producto=$id_producto");
	$datas = mysqli_fetch_assoc($query);
	$realizado=$datas['realizado'];
	$seccion=$datas['seccion'];
	if ($seccion=="none") {
		$value="Ssumar";
	}elseif ($realizado=="NO") {
		$value="Osumar";
	}else {
		$value="Ssumar";
	}
	return $value;
}

function get_bcode($id_producto){
	global $mysqli;
	$query = mysqli_query($mysqli, "SELECT id_producto,ubicacion,barcode_final FROM productos WHERE id_producto = $id_producto");
	$datas  = mysqli_fetch_assoc($query);
	return $datas;
}
// Funcion optener datos de Magento
function get_magento($sku_producto){
	global $api;
	include ("mage.php");
	$retour = $api->get("products/$sku_producto");
	return $retour;
}
// Funcion optener ubicacion Magento
function get_magento_qty($sku_producto){
	global $api;
	$retour = $api->get("stockItems/$sku_producto");
	return $retour;
}
// Funcion Cambiar ubicacion en Magento
function put_magento_location($sku_producto,$sku_location){
	global $api;
	$datos = array(
	  "product" => array(
	      'custom_attributes'  => array(
	        'warehouse_location' => $sku_location
	      ),
	  ));
	return $retour = $api->put("products/$sku_producto",$datos);
}

function get_total_log($user,$edition){
	global $mysqli;
	$query = mysqli_query($mysqli, "SELECT count(*) as numero FROM logs WHERE id_user='$user' AND edicion='$edition' AND DATE(fecha_log) = DATE(CURRENT_DATE()- INTERVAL 30 DAYS) ");
	$datas  = mysqli_fetch_assoc($query);
	return $datas;
}

function get_total_log_hoy($user){
	global $mysqli;
	$query = mysqli_query($mysqli, "SELECT count(*) as numero FROM logs WHERE id_user='$user' AND DATE(fecha_log) = DATE(NOW()) ");
	$datas  = mysqli_fetch_assoc($query);
	return $datas;
}

function get_total_log_mes($user,$fecha,$fecha2){
	global $mysqli;
	$fecha2 = date("Y-m-d",strtotime($fecha2));
	$query = mysqli_query($mysqli, "SELECT count(*) as numero FROM logs WHERE id_user='$user' AND DATE(fecha_log) BETWEEN DATE('$fecha2') AND DATE('$fecha')");
	$datas  = mysqli_fetch_assoc($query);
	return $datas;
}

function get_total_log_365($user,$fecha,$fecha2){
	global $mysqli;
	$fecha2 = date("Y-m-d",strtotime('-364 day'));
	$query = mysqli_query($mysqli, "SELECT count(*) as numero FROM logs WHERE id_user='$user' AND DATE(fecha_log) BETWEEN DATE('$fecha2') AND DATE('$fecha')");
	$datas  = mysqli_fetch_assoc($query);
	return $datas;
}

function get_total_log_days($user,$fecha,$fecha2){
	global $mysqli;
	$fecha2 = date("Y-m-d",strtotime($fecha2));
	$query = mysqli_query($mysqli, "SELECT count(*) as numero FROM logs WHERE id_user='$user' AND DATE(fecha_log) BETWEEN DATE('$fecha2') AND DATE('$fecha')");
	$datas  = mysqli_fetch_assoc($query);
	return $datas;
}

function get_total_log_everydays($fecha,$res){
	global $mysqli;
		$fecha2 = date("Y-m-d",strtotime($res));
	//	echo "<script> alert('".$fecha2."'); </script>";
		$query = mysqli_query($mysqli, "SELECT count(*) as numero FROM logs WHERE DATE(fecha_log) = DATE('$fecha2')");
		$datas  = mysqli_fetch_assoc($query);
	return $datas;
}

?>
