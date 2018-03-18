<?php
session_start();
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
				if (!is_dir('../images/productos/'.$_POST['bcode'])) {
		    	mkdir('../images/productos/'.$_POST['bcode'], 0777, true);
					}
				file_put_contents('../images/productos/'.$_POST['bcode'].'/'.$img_name, $imagen);
				$img=$_POST['bcode'].'/'.$img_name;
			}else {
				$img='no-foto.png';
			}
		/* Connect To Database*/
		require_once ("../config/database.php");//Contiene funcion que conecta a la base de datos
		include("../funciones.php");
		// escaping, additionally removing everything that could be (html/javascript-) code
		$barcode=mysqli_real_escape_string($mysqli,(strip_tags($_POST["bcode"],ENT_QUOTES)));
		$condicion=strval($_POST['condicion']);
		$especial=mysqli_real_escape_string($mysqli,(strip_tags($_POST["otro"],ENT_QUOTES)));
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
		if (!empty($especial)) {
			$missing=$missing.$especial." ";
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

		$ubicacion=mysqli_real_escape_string($mysqli,(strip_tags($_POST["location"],ENT_QUOTES)));
		$comentario=mysqli_real_escape_string($mysqli,(strip_tags($_POST["coment"],ENT_QUOTES)));
		if (empty($comentario)) {
			$comentario="N/A";
		}
		$qty=intval($_POST['qty']);
		$peso=intval($_POST['weight']);
		$formato=strval($_POST['unit']);
		$nu_foto=strval($_POST['nu_foto']);
		date_default_timezone_set('America/Santo_Domingo');
		$date_added=date("Y-m-d H:i:s");

		$sql="SELECT id_corte from cortes ORDER BY id_corte DESC LIMIT 1";
		$query_corte = mysqli_query($mysqli,$sql);
		$datas = mysqli_fetch_assoc($query_corte);
		$corte=$datas['id_corte'];
		/*********************/

		$sql="INSERT INTO productos (barcode, barcode_final, nombre_producto, condicion, missing, qty, ubicacion, nu_foto, comentario, realizado, imagen, id_corte, qty_total, seccion) VALUES ('$barcode', '$barcode_final','$titulo', '$condicion', '$missing', $qty, '$ubicacion','$nu_foto', '$comentario', 'NO', '$img', $corte, $qty, 'publicar')";
		$query_new_insert = mysqli_query($mysqli,$sql);
			if ($query_new_insert){
				$messages[] = "Producto ha sido ingresado satisfactoriamente.";
				$id_producto=get_row('productos','id_producto', 'barcode_final', $barcode_final);
				$qty_total=get_row('productos','qty_total', 'barcode_final', $barcode_final);
				$user_id=$_SESSION['id_user'];
				$firstname=$_SESSION['name_user'];
				$nota="Articulo creado";
				$edicion="creado";
				guardar_historial($id_producto,$user_id,$date_added,$nota,$qty,$edicion,$ubicacion,$qty_total);

				//Abrir ventana con etiqueta a Imprimir
				$barcode_final=str_replace(" ", "%20", $barcode_final);
				$inicial=$_POST['user'];
				echo "<script>
				window.open('https://lordcomputer.com/bcode/vendor/spipu/html2pdf/examples/barcode.php?make_pdf=&bcode=".$barcode_final."&ent=".$inicial."&coment=".$comentario."&location=".$ubicacion."&pic=".$nu_foto."&qty=".$qty."', '_blank', 'width=800,height=800');
				</script>";

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
