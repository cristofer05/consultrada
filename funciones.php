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
	$sql="INSERT INTO historial (id_historial, id_producto, user_id, fecha, nota, referencia, cantidad, ubicacion)
	VALUES (NULL, '$id_producto', '$user_id', '$fecha', '$nota', '$reference', '$quantity', '$ubicacion');";
	$query=mysqli_query($mysqli,$sql);
}

?>
