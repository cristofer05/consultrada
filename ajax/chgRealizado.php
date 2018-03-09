<?php
require_once "../config/database.php";

if (!empty($_POST['action'])) {
    $id_producto=$_POST['id'];
    $realizado=$_POST['realizado'];
    if ($realizado == 1) {
      $newRealizado="NO";
    }else {
      $newRealizado="SI";
    }

    $sql="UPDATE productos SET realizado='".$newRealizado."' WHERE id_producto=".$id_producto;
  	$query=mysqli_query($mysqli,$sql);
  	return $query;
}


/*

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
*/
?>
