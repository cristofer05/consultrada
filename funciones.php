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
function guardar_historial($id_producto,$user_id,$fecha,$nota,$reference,$quantity,$ubicacion){
	global $mysqli;
	$sql="INSERT INTO logs (id_historial, id_producto, user_id, fecha, nota, referencia, cantidad, ubicacion)
	VALUES (NULL, '$id_producto', '$user_id', '$fecha', '$nota', '$reference', '$quantity', '$ubicacion');";
	$query=mysqli_query($mysqli,$sql);
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
?>
