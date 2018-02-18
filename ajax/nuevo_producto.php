<?php
	/*Inicia validacion del lado del servidor*/
		if (empty($_POST['bcode'])) {
      $errors[] = "Código vacío";
    } else if ($_POST['qty']==""){
			$errors[] = "Campo cantidad vacío";
		} else if (empty($_POST['condicion'])){
			$errors[] = "Campo condicion vacío";
		} else if (empty($_POST['location'])){
			$errors[] = "Campo ubicacion vacío";
		} else if (empty($_POST['weight'])){
			$errors[] = "Campo peso vacío";
		} else if (
			!empty($_POST['bcode']) &&
			!empty($_POST['condicion']) &&
			!empty($_POST['qty']) &&
			!empty($_POST['nu_foto']) &&
			!empty($_POST['location'])
		){

			if (empty($_POST['titl'])){
				$titulo=$_POST['user']."--".$_POST['nu_foto']."--".$_POST['bcode']."--";
			}elseif (!empty($_POST['titl'])){
				$titulo=$_POST['titl'];
			}

			if (!empty($_POST['img_res'])) {
				$imagen=file_get_contents($_POST['img_res']);
				$img_name='img_'.time().'.jpg';
				file_put_contents('../images/productos/'.$img_name, $imagen);
				$img=$img_name;
			}else {
				$img="no-foto.png";
			}
		/* Connect To Database*/
		require_once ("../config/database.php");//Contiene funcion que conecta a la base de datos
		include("../funciones.php");
		// escaping, additionally removing everything that could be (html/javascript-) code
		$barcode=mysqli_real_escape_string($mysqli,(strip_tags($_POST["bcode"],ENT_QUOTES)));
		$condicion=strval($_POST['condicion']);
		$missing="";

		if (!empty($_POST['missing-b'])) {
			$missing=$missing.$_POST['missing-b']." ";
		}
		if (!empty($_POST['missing-m'])) {
			$missing=$missing.$_POST['missing-m']." ";
		}
		if (!empty($_POST['missing-by'])) {
			$missing=$missing.$_POST['missing-by']." ";
		}
		if (!empty($_POST['missing-w'])) {
			$missing=$missing.$_POST['missing-w']." ";
		}
		if (!empty($_POST['missing-ch'])) {
			$missing=$missing.$_POST['missing-ch']." ";
		}
		if (!empty($_POST['missing-rc'])) {
			$missing=$missing.$_POST['missing-rc']." ";
		}
		if (!empty($_POST['missing-ink'])) {
			$missing=$missing.$_POST['missing-ink']." ";
		}

		if ($condicion == "NEW") {
			$barcode_final=$barcode;
		} else {
			$barcode_final=$barcode." ".$condicion;
			if (!empty($missing)) {
				$barcode_final=$barcode_final." ".$missing;
				$barcode_final=substr($barcode_final, 0, -1);
			}
		}
		if (substr($barcode,0,2) == "LC") { $barcode = "Does not apply"; }

		//$nombre=mysqli_real_escape_string($mysqli,(strip_tags($_POST["nombre"],ENT_QUOTES)));
		$ubicacion=mysqli_real_escape_string($mysqli,(strip_tags($_POST["location"],ENT_QUOTES)));
		$especial=mysqli_real_escape_string($mysqli,(strip_tags($_POST["special"],ENT_QUOTES)));
		$comentario=mysqli_real_escape_string($mysqli,(strip_tags($_POST["coment"],ENT_QUOTES)));
		if (empty($comentario)) {
			$comentario="N/A";
		}
		$qty=intval($_POST['qty']);
		$peso=intval($_POST['weight']);
		$formato=strval($_POST['unit']);
		if ($condicion == "new") {	$bar_condicion = "";}else {	$bar_condicion = $condicion;	}
		$nu_foto=strval($_POST['nu_foto']);
		$date_added=date("Y-m-d H:i:s");
		/*********************/

		$sql="INSERT INTO productos (barcode, barcode_final, nombre_producto, condicion, missing, qty, ubicacion, nu_foto, comentario, realizado, imagen, qty_total) VALUES ('$barcode', '$barcode_final','$titulo', '$condicion', '$missing', $qty, '$ubicacion','$nu_foto', '$comentario', 'NO', '$img', $qty)";
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
