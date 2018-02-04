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
					<label for="codigo" class="col-sm-2 control-label">Barcode</label>
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
			  	  <label for="nombre" class="col-sm-2 control-label"><!--Condicion--></label>
				  <div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-primary active btn-esp">
					    <input type="radio" name="options" id="option1" autocomplete="off" checked> NEW
					  </label>
					  <label class="btn btn-primary btn-esp">
					    <input type="radio" name="options" id="option2" autocomplete="off"> LIKE NEW
					  </label>
					  <label class="btn btn-primary btn-esp">
					    <input type="radio" name="options" id="option3" autocomplete="off"> GA
					  </label>
					  <label class="btn btn-primary btn-esp">
					    <input type="radio" name="options" id="option4" autocomplete="off"> GB
					  </label>
					  <label class="btn btn-primary btn-esp">
					    <input type="radio" name="options" id="option5" autocomplete="off"> GC
					  </label>
					  <label class="btn btn-primary btn-esp">
					    <input type="radio" name="options" id="option6" autocomplete="off"> RE
					  </label>
					</div>

					<label for="nombre" class="col-sm-2 control-label"><!--Missing--></label>
				  <div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-primary active btn-esp">
					    <input type="checkbox" name="options" id="option1" autocomplete="off" checked> Box
					  </label>
					  <label class="btn btn-primary btn-esp">
					    <input type="checkbox" name="options" id="option2" autocomplete="off"> Manual
					  </label>
					  <label class="btn btn-primary btn-esp">
					    <input type="checkbox" name="options" id="option3" autocomplete="off"> Battery
					  </label>
					  <label class="btn btn-primary btn-esp">
					    <input type="checkbox" name="options" id="option4" autocomplete="off"> Wallmount
					  </label>
					  <label class="btn btn-primary btn-esp">
					    <input type="checkbox" name="options" id="option4" autocomplete="off"> Charger
					  </label>
					  <label class="btn btn-primary btn-esp">
					    <input type="checkbox" name="options" id="option4" autocomplete="off"> Remote
					  </label>
					  <label class="btn btn-primary btn-esp">
					    <input type="checkbox" name="options" id="option4" autocomplete="off"> Ink
					  </label>
					  <label class="btn btn-primary btn-esp">
					    <input type="checkbox" name="options" id="option4" autocomplete="off"> Especial
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
				<label for="codigo" class="col-sm-2 control-label">Especial</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" id="barcode" name="especial" placeholder="especial" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="nombre" class="col-sm-2 control-label">Comentario</label>
				<div class="col-sm-9">
					<textarea class="form-control" rows="2" id="comentario" name="comentario" placeholder="Comentario"></textarea>
				</div>
			  </div>
		  	</div>
		  	<div class="clearfix"></div>

		  	<div class="row col-md-3">
			  <div class="form-group col-md-10">
			  	<label for="nombre" class="col-sm-2 control-label">Qty</label>
			  	<input type="number" class="form-control" id="barcode" name="especial" placeholder="Qty" required>
			  </div>
			</div> 
			<div class="row col-md-3">
			  <div class="form-group col-md-10">
			  <label for="nombre" class="col-sm-2 control-label">Ubicacion</label>
			  	<input type="text" class="form-control" id="barcode" name="especial" placeholder="Ubicacion" required>
			  </div>
			</div> 
			<div class="row col-md-6">
			  <div class="form-group col-md-8">
			  <label for="nombre" class="col-sm-2 control-label">Peso</label>
			  	<input type="number" class="form-control" id="barcode" name="especial" placeholder="Peso" required>
			  </div>
			  <div class="form-group col-md-4">
			  <label for="nombre" class="col-sm-2 control-label">Formato</label>
			   	<select class="form-control" id="peso" name="peso">
			      <option>LB</option>
			      <option>OZ</option>
			  	</select>
			  </div>
			</div> 
			  		

			<div class="clearfix"></div>	 
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>