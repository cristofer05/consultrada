<?php 
require_once "../config/database.php";
include ("../funciones.php");

if (empty($_POST['mod_qty'])) {
    $errors[] = "El campo cantidad esta vacio";
} else if (empty($_POST['mod_ubi'])) {
   $errors[] = "El campo ubicación esta vacio";
} else if (
	!empty($_POST['mod_qty']) &&
	!empty($_POST['mod_ubi'])
){
	$id_producto=$_POST['mod_id'];
	$qty=intval($_POST['mod_qty']);
	$ubicacion=mysqli_real_escape_string($con,(strip_tags($_POST["mod_ubi"],ENT_QUOTES)));
	$referencia=strval("Editado");
	$date_added=date("Y-m-d H:i:s");

	$sql="UPDATE productos SET qty_total='".$qty."', ubicacion='".$ubicacion."' WHERE id_producto='".$id_producto."'";
	$query_update = mysqli_query($mysqli,$sql);

	if ($query_update){
		$messages[] = "Producto ha sido actualizado satisfactoriamente.";
		//$id_producto=get_row('productos','id_producto', 'barcode_final', $barcode_final);
		$user_id=$_SESSION['id_user'];
		$firstname=$_SESSION['name_user'];
		$nota="$firstname editó este producto en el inventario";
		echo guardar_historial($id_producto,$user_id,$date_added,$nota,$referencia,$qty,$ubicacion);
		
	} else{
		$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
	}
	
} else {
			$errors []= "Error desconocido.";
}

if (isset($errors)){		
?>
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Error!</strong> 
		<?php
			foreach ($errors as $error) {
					echo $error;
				}
			?>
</div>
<?php
}
if (isset($messages)){	
	?>
	<div class="alert alert-success" role="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>¡Bien hecho!</strong>
			<?php
				foreach ($messages as $message) {
						echo $message;
					}
				?>
	</div>
	<?php
}

?>