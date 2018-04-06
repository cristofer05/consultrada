
      <form class="form-horizontal" method="post" action="includes/edit_process.php" id="editar_producto" name="editar_producto">
       		<div id="mensaje_ajax"></div>
        <?php
        echo '<h4 class="text-center">'.$data['nombre_producto'].'</h4>';
        ?>


			<div class="row col-md-6">
			  <div class="form-group">
			  	<div class="text-center">
				  <img src="images/productos/<?php echo $data['imagen']; ?>" class="rounded img-thumbnail" alt="Imagen" width="200">
				</div>
			  </div>
			</div>

			<div class="row col-md-6">
			  <div class="form-group">
				  <label for="nombre" class="col-sm-2 control-label lbl_sum">Qty</label>
			  	<input type="number" class="form-control col-sm-8 inp_sum" id="barcode" name="mod_qty" placeholder="qty" value="<?php echo $data['qty_total']; ?>" required>
			  </div>
			  <div class="form-group">
				  <label for="nombre" class="col-sm-2 control-label lbl_sum">Ubi</label>
			  	<input type="text" class="form-control col-sm-8 inp_sum" id="barcode" name="mod_ubi" placeholder="Ubicacion" value="<?php echo $data['ubicacion']; ?>" required>
			 </div>
       <div class="form-group">
         <label for="nombre" class="col-sm-2 control-label lbl_sum">UPC</label>
         <input type="text" class="form-control col-sm-8 inp_sum" id="upc" name="mod_upc" placeholder="UPC" value="<?php echo $data['barcode']; ?>" required>
      </div>
      <div class="form-group">
        <label for="nombre" class="col-sm-2 control-label lbl_sum">Barc</label>
        <input type="text" class="form-control col-sm-8 inp_sum" id="barcode_final" name="mod_barcode_final" placeholder="Barcode" value="<?php echo $data['barcode_final']; ?>" required>
     </div>
     <div class="form-group">
       <label for="nombre" class="col-sm-2 control-label lbl_sum">Comment</label>
       <input type="text" class="form-control col-sm-8" id="comentario" name="mod_comentario" placeholder="Comentario" value="<?php echo $data['comentario']; ?>" required>
    </div>
		</div>

			<div class="clearfix"></div>
			<div class="modal-footer">
              <input type="hidden" name="mod_id" value="<?php echo $data['id_producto']; ?>">
	            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	            <button type="submit" class="btn btn-primary" id="enviar_sum">Guardar datos</button>
	        </div>
			</form>
