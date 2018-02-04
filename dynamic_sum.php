<?php
require_once "config/database.php";

if(!empty($_GET['id'])){

    
    if ($mysqli ->connect_error) {
        die("No se pudo conectar a la base de datos: " . $db->connect_error);
    }
    
    //get content from database
    $query = $mysqli->query("SELECT nombre_producto, qty_total, ubicacion, imagen FROM productos WHERE id_producto = {$_GET['id']}");
    
    if($query->num_rows > 0){
        $cmsData = $query->fetch_assoc();
        ?>
        	<form class="form-horizontal" method="post" id="sumar_producto" name="sumar_producto">
       		<div id="mensaje_ajax"></div>
        <?php
        echo '<h4>'.$cmsData['nombre_producto'].'</h4>';
        ?>
			

			<div class="row col-md-6">
			  <div class="form-group">
			  	<div class="text-center">
				  <img src="images/productos/<?php echo $cmsData['imagen']; ?>" class="rounded img-thumbnail" alt="Imagen" width="200">
				</div>
			  </div>
			</div>  

			<div class="row col-md-6">
			  <div class="form-group">
				<label for="nombre" class="col-sm-2 control-label">Qty</label>
			  	<input type="number" class="form-control col-sm-8" id="barcode" name="mod_qty" placeholder="Qty" value="<?php echo $cmsData['qty_total']; ?>" required>
			  </div>
			  <div class="form-group">
				<label for="nombre" class="col-sm-2 control-label">Ubicacion</label>
			  	<input type="text" class="form-control col-sm-8" id="barcode" name="mod_ubi" placeholder="Ubicacion" value="<?php echo $cmsData['ubicacion']; ?>" required>
			  	<input type="hidden" name="mod_id" value="<?php echo $_GET['id']; ?>">
				</div>
			  </div>
            </form>		
			<div class="clearfix"></div>
			<div class="modal-footer">
	            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	            <button type="submit" class="btn btn-primary" id="enviar_sum" onclick="submitiendo();">Guardar datos</button>
	        </div>

        <?php
    }else{
        echo 'Contenido no encontrado....';
    }
}else{
    echo 'Contenido no encontrado....';
}
?>