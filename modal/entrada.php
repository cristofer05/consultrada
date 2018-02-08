<div class="modal fade" id="Entrada" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content modal-lg">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo producto</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_producto" name="guardar_producto">
				<div id="resultados_ajax_productos"></div>
					<div class="row col-md-6">
					  <div class="form-group">
						<label for="barcode" class="col-sm-2 control-label">Barcode</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" id="barcode" name="barcode" placeholder="Código del producto" value="" required autofocus>
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="nombre" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto" required maxlength="200" value="E--639--13803269536 GA--">
						</div>
					  </div>
				  	</div>
				  	<div class="row col-md-6">
				  	  <label for="condicion" class="col-sm-2 control-label"><!--Condicion--></label>
					  <div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary active btn-esp">
						    <input type="radio" name="condicion" id="option1" value="new" autocomplete="off" checked> NEW
						  </label>
						  <label class="btn btn-primary btn-esp">
						    <input type="radio" name="condicion" id="option2" value="like" autocomplete="off"> LIKE NEW
						  </label>
						  <label class="btn btn-primary btn-esp">
						    <input type="radio" name="condicion" id="option3" value="ga" autocomplete="off"> GA
						  </label>
						  <label class="btn btn-primary btn-esp">
						    <input type="radio" name="condicion" id="option4" value="gb" autocomplete="off"> GB
						  </label>
						  <label class="btn btn-primary btn-esp">
						    <input type="radio" name="condicion" id="option5" value="gc" autocomplete="off"> GC
						  </label>
						  <label class="btn btn-primary btn-esp">
						    <input type="radio" name="condicion" id="option6" value="re" autocomplete="off"> RE
						  </label>
						</div>

						<label for="missing" class="col-sm-2 control-label"><!--Missing--></label>
					  <div class="btn-group" data-toggle="buttons">
						  <label class="btn btn-primary active btn-esp">
						    <input type="checkbox" name="missing" id="option1" value="b" autocomplete="off" checked> Box
						  </label>
						  <label class="btn btn-primary btn-esp">
						    <input type="checkbox" name="missing" id="option2" value="m" autocomplete="off"> Manual
						  </label>
						  <label class="btn btn-primary btn-esp">
						    <input type="checkbox" name="missing" id="option3" value="ba" autocomplete="off"> Battery
						  </label>
						  <label class="btn btn-primary btn-esp">
						    <input type="checkbox" name="missing" id="option4" value="w" autocomplete="off"> Wallmount
						  </label>
						  <label class="btn btn-primary btn-esp">
						    <input type="checkbox" name="missing" id="option4" value="ch" autocomplete="off"> Charger
						  </label>
						  <label class="btn btn-primary btn-esp">
						    <input type="checkbox" name="missing" id="option4" value="rem" autocomplete="off"> Remote
						  </label>
						  <label class="btn btn-primary btn-esp">
						    <input type="checkbox" name="missing" id="option4" value="ink" autocomplete="off"> Ink
						  </label>
						  <label class="btn btn-primary btn-esp">
						    <input type="checkbox" name="missing" id="option4" value="esp" autocomplete="off"> Especial
						  </label>
						</div>
				  	</div>
				  	<div class="clearfix"></div>

				<div class="row col-md-6">
				  <div class="form-group">
				  	<div class="text-center">
					  <img src="images/productos/no-foto.png" class="rounded img-thumbnail" alt="Imagen" width="200">
					</div>
				  </div>
				</div>  

				<div class="row col-md-6">
				  <div class="form-group">
					<label for="especial" class="col-sm-2 control-label">Especial</label>
					<div class="col-sm-9">
					  <input type="text" class="form-control" id="especial" name="especial" placeholder="especial">
					</div>
				  </div>
				  <div class="form-group">
					<label for="comentario" class="col-sm-2 control-label">Comentario</label>
					<div class="col-sm-9">
						<textarea class="form-control" rows="2" id="comentario" name="comentario" placeholder="Comentario"></textarea>
					</div>
				  </div>
			  	</div>
			  	<div class="clearfix"></div>

			  	<div class="row col-md-3">
				  <div class="form-group col-md-10">
				  	<label for="qty" class="col-sm-2 control-label">Qty</label>
				  	<input type="number" class="form-control" id="qty" name="qty" placeholder="Qty" required>
				  </div>
				</div> 
				<div class="row col-md-3">
				  <div class="form-group col-md-10">
				  <label for="ubicacion" class="col-sm-2 control-label">Ubicacion</label>
				  	<input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="Ubicacion" required>
				  </div>
				</div> 
				<div class="row col-md-6">
				  <div class="form-group col-md-8">
				  <label for="peso" class="col-sm-2 control-label">Peso</label>
				  	<input type="number" class="form-control" id="peso" name="peso" placeholder="Peso" required>
				  </div>
				  <div class="form-group col-md-4">
				  <label for="formato" class="col-sm-2 control-label">Formato</label>
				   	<select class="form-control" id="formato" name="formato">
				      <option value="lb">LB</option>
				      <option value="oz">OZ</option>
				  	</select>
				  </div>
				</div> 
				  		
				<div class="clearfix"></div>	
				<?php 
					$query_nu_foto=mysqli_query($mysqli,"SELECT nu_foto FROM productos ORDER BY id_producto DESC LIMIT 1");
					$count = mysqli_num_rows($query_nu_foto);
				    if ($count <> 0) {
				        $data_nu_foto = mysqli_fetch_assoc($query_nu_foto);
				        $nu_foto = $data_nu_foto['nu_foto']+1;
				    } else {
				        $nu_foto = "0";
				    }
				?> 
				<input type="hidden" name="nu_foto" value="<?php echo $nu_foto; ?>">

			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
			  </div>
		  	</form>
		</div>
	  </div>
	</div>