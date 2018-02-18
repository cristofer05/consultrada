<?php
function nombre_usuario($user_id){
	global $mysqli;
	$query=mysqli_query($mysqli,"select id_user,name_user from usuarios where id_user=$user_id");
	$datas  = mysqli_fetch_assoc($query);
	$value=$datas['name_user'];
	return $value;
}
function get_row($table,$row, $id, $equal){
	global $mysqli;
	$query=mysqli_query($mysqli,"select $row from $table where $id='$equal'");
	$rw=mysqli_fetch_array($query);
	$value=$rw[$row];
	return $value;
}
function guardar_historial($id_producto,$user_id,$fecha,$registro,$quantity,$edicion,$ubicacion){
	global $mysqli;
	$sql="INSERT INTO logs (id_historial, id_producto, id_user, fecha_log, registro, qty, edicion, ubicacion)
	VALUES (NULL, $id_producto, $user_id, '$fecha', '$registro', $quantity, '$edicion', '$ubicacion');";
	$query=mysqli_query($mysqli,$sql);
	return $query;

}/*
function sumar_cantidad($id_producto,$qty,$ubicacion){
	global $mysqli;
	$sql="UPDATE productos SET qty_total='".$qty."', ubicacion='".$ubicacion."' WHERE id_producto='".$id_producto."'";
	$query_update = mysqli_query($mysqli,$sql);
} */
function get_bcode($id_producto){
	global $mysqli;
	$query = mysqli_query($mysqli, "SELECT id_producto,ubicacion,barcode_final FROM productos WHERE id_producto = $id_producto");
	$datas  = mysqli_fetch_assoc($query);
	return $datas;
}

function get_magento($sku_producto){
	global $api;
	include ("mage.php");
	$retour = $api->get("products/$sku_producto");
	return $retour;
}

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

?>
