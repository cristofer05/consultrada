<?php

	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['barcode'])) {
           $errors[] = "Código vacío";
        } else if (empty($_POST['nombre'])){
			$errors[] = "Campo nombre vacío";
		} else if ($_POST['qty']==""){
			$errors[] = "Campo cantidad vacío";
		} else if (empty($_POST['condicion'])){
			$errors[] = "Campo condicion vacío";
		} else if (empty($_POST['missing'])){
			$errors[] = "Campo missing vacío";
		} else if (empty($_POST['ubicacion'])){
			$errors[] = "Campo ubicacion vacío";
		} else if (empty($_POST['peso'])){
			$errors[] = "Campo peso vacío";
		} else if (
			!empty($_POST['barcode']) &&
			!empty($_POST['condicion']) &&
			!empty($_POST['qty']) &&
			!empty($_POST['nu_foto']) &&
			!empty($_POST['ubicacion'])
		){
		/* Connect To Database*/
		require_once ("../config/database.php");//Contiene funcion que conecta a la base de datos
		include("../funciones.php");
		// escaping, additionally removing everything that could be (html/javascript-) code
		$barcode=mysqli_real_escape_string($mysqli,(strip_tags($_POST["barcode"],ENT_QUOTES)));
		if ($barcode == "LC") { $barcode = "Does not apply"; }
		//$nombre=mysqli_real_escape_string($mysqli,(strip_tags($_POST["nombre"],ENT_QUOTES)));
		$ubicacion=mysqli_real_escape_string($mysqli,(strip_tags($_POST["ubicacion"],ENT_QUOTES)));
		$especial=mysqli_real_escape_string($mysqli,(strip_tags($_POST["especial"],ENT_QUOTES)));
		$comentario=mysqli_real_escape_string($mysqli,(strip_tags($_POST["comentario"],ENT_QUOTES)));
		$qty=intval($_POST['qty']);
		$peso=intval($_POST['peso']);
		$formato=strval($_POST['formato']);
		$condicion=strval($_POST['condicion']);
		if ($condicion == "new") {	$bar_condicion = "";}else {	$bar_condicion = $condicion;	}
		$missing=strval($_POST['missing']);
		$nu_foto=strval($_POST['nu_foto']);
		$date_added=date("Y-m-d H:i:s");
		$img="no-foto.png";

		$sql="INSERT INTO productos (barcode, barcode_final, nombre_producto, condicion, missing, qty, ubicacion, nu_foto, comentario, realizado, imagen, qty_total) VALUES ('$barcode', '$barcode $bar_condicion $missing','$nombre', '$condicion', '$missing', $qty, '$ubicacion','$nu_foto', '$comentario', 'NO', '$img', $qty)";
		$query_new_insert = mysqli_query($mysqli,$sql);
			if ($query_new_insert){
				$messages[] = "Producto ha sido ingresado satisfactoriamente.";
				$id_producto=get_row('productos','id_producto', 'barcode', $barcode);
			//	$user_id=$_SESSION['id_user'];
			//	$firstname=$_SESSION['name_user'];
				$nota="Articulo creado";
			//	echo guardar_historial($id_producto,$user_id,$date_added,$nota,$codigo,$stock,$ubicacion);

			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($mysqli);
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
