<div class="modal fade" id="EntradaExistente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
					  <input type="number" class="form-control" id="barcode" name="barcode" placeholder="Código del producto" required>
					</div>
				  </div>

				  <div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto" required maxlength="200" >

					</div>
				  </div>
			  	</div>
			  	<div class="row col-md-6">
				  <div class="form-group">
					<label for="codigo" class="col-sm-2 control-label">Barcode</label>
					<div class="col-sm-9">
					  <input type="number" class="form-control" id="barcode" name="barcode" placeholder="Código del producto" required>
					</div>
				  </div>

				  <div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto" required maxlength="200" >

					</div>
				  </div>
			  	</div>


			  <div class="form-group">
				<label for="categoria" class="col-sm-3 control-label">Categoría</label>
				<div class="col-sm-8">
					<select class='form-control' name='categoria' id='categoria' required>
						<option value="">Selecciona una categoría</option>
							<?php
							$query_categoria=mysqli_query($con,"select * from categorias order by nombre_categoria");
							while($rw=mysqli_fetch_array($query_categoria))	{
								?>
							<option value="<?php echo $rw['id_categoria'];?>"><?php echo $rw['nombre_categoria'];?></option>
								<?php
							}
							?>
					</select>
				</div>
			  </div>

			<div class="form-group">
				<label for="stock" class="col-sm-3 control-label">Qty Almacen</label>
				<div class="col-sm-8">
				  <input type="number" min="0" class="form-control" id="stock" name="stock" placeholder="Cantidad en almacen" required  maxlength="8">
				</div>
			</div>

			<div class="form-group">
				<label for="stock" class="col-sm-3 control-label">Qty Tienda</label>
				<div class="col-sm-8">
				  <input type="number" min="0" class="form-control" id="tienda" name="tienda" placeholder="Cantidad en tienda" required  maxlength="8">
				</div>
			</div>

			<div class="form-group">
				<label for="stock" class="col-sm-3 control-label">Ubicación</label>
				<div class="col-sm-8">
				  <input type="text" min="0" class="form-control" id="ubicacion" name="ubicacion" placeholder="Nombre de ubicacion" required maxlength="8">
				</div>
			</div>

			<div class="form-group">
				<label for="precio" class="col-sm-3 control-label">Precio</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio de venta del producto" required pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="8">
				</div>
			</div>

			<div class="form-group">
				<label for="precio" class="col-sm-3 control-label">Al por mayor</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="xmayor" name="xmayor" placeholder="Al por mayor" required pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$"  maxlength="10">
				</div>
			</div>

			<div class="form-group">
				<label for="precio" class="col-sm-3 control-label">MSRP</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="msrp" name="msrp" placeholder="MSRP" required pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$"  maxlength="10">
				</div>
			</div>


		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
