<div class="modal fade" id="Entrada" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content modal-lg">
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
								<H1 class="text-center">
									ENTRADA UPC:
									 <input type="text" style="border:0px;" class="form-control36" id="barcode" name="barcode" placeholder="Código del producto" value="" readonly>
								</H1>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Condicion">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Cantidad y Ubicacion">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-list-alt"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Peso">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-scale"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Guardar e Imprimir">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

						<form role="form" class="form-horizontal" method="post" id="guardar_producto" name="guardar_producto">
						<div id="resultados_ajax_productos"></div>
						     <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
											<div class="row col-md-6">
                        <h3>Condicion</h3>
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
												<br />
												<br />
													<h3>Le falta algo?</h3>
													<div class="clearfix"></div>
												<label for="nombre" class="col-sm-2 control-label"><!--Missing--></label>
											  <div class="btn-group" data-toggle="buttons">
												  <label class="btn btn-primary btn-esp">
												    <input type="checkbox" name="options" id="option1" autocomplete="off"> Box
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
												    <input type="checkbox" name="options" id="option4" autocomplete="off" > Especial
												  </label>
												</div>
												</div>
												<div class="row col-md-6">
												  <div class="form-group">
														<h3>Especial</h3>
													<label for="codigo" class="col-sm-2 control-label"></label>
													<div class="col-sm-9">
													  <input type="text" class="form-control" id="espacial" name="especial" placeholder="Tiene algo en especial?">
													</div>
												  </div>
												  <div class="form-group">
														<h3>Comentario</h3>
													<label for="nombre" class="col-sm-2 control-label"></label>
													<div class="col-sm-9">
														<textarea class="form-control" rows="2" id="comentario" name="comentario" placeholder="Escribe un Comentario"></textarea>
													</div>
												  </div>
											  	</div>
											  	<div class="clearfix"></div>
										  	<div class="clearfix"></div>

                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Continuar</button></li>
														<li><button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button></li>
												</ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">

											<div class="row col-md-6">
											<div class="form-group col-md-6">
												<label for="nombre" class="col-sm-2 control-label">Qty</label>
												<input type="number" class="form-control" id="barcode" name="especial" placeholder="Qty" required>
											</div>
										</div>
										<div class="row col-md-6">
											<div class="form-group col-md-6">
											<label for="nombre" class="col-sm-2 control-label">Ubicacion</label>
												<input type="text" class="form-control" id="barcode" name="especial" placeholder="Ubicacion" required>
											</div>
										</div>
										<div class="clearfix"></div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Atras</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Continuar</button></li>
														<li><button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button></li>
												</ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
												<div class="row col-md-12">
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
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Atras</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Continuar</button></li>
														<li><button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button></li>
												</ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Completado</h3>
                        <p> Asegurate que los datos introducidos sean correctos antes de Guardar</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
		</div>
	  </div>
	</div>
