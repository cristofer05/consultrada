<div class="modal fade" id="Entrada" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content modal-lg ent_left">
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
								<h1 class="text-center" id="barcode"> ENTRADA UPC:	</h1>

								<div class="row product-image">
									<div class="row col-xs-12">
										<div class="col-xs-3">
											<img src="images/productos/no-foto.png" id="img_result" height="133" alt="">
											</div>
										<div class="col-xs-9">
											<p id="title">Nombre del producto no disponible</p>
										</div>
									</div>
								</div>

                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" id="primero" aria-controls="step1" role="tab" title="Condicion">
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

						<form role="form" class="form-horizontal" method="POST" id="guardar_producto" name="guardar_producto">
						     <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
											<div class="row col-md-6">
                        <h3>Condition</h3>
												<div class="btn-group" data-toggle="buttons">
												  <label class="btn btn-primary active btn-esp">
												    <input type="radio" name="condicion" value="NEW" id="option1" autocomplete="off" checked> NEW
												  </label>
												  <label class="btn btn-primary btn-esp">
												    <input type="radio" name="condicion" value="O" id="option2" autocomplete="off"> LIKE NEW
												  </label>
												  <label class="btn btn-primary btn-esp">
												    <input type="radio" name="condicion" value="GA" id="option3" autocomplete="off"> GA
												  </label>
												  <label class="btn btn-primary btn-esp">
												    <input type="radio" name="condicion" value="GB" id="option4" autocomplete="off"> GB
												  </label>
												  <label class="btn btn-primary btn-esp">
												    <input type="radio" name="condicion" value="GC" id="option5" autocomplete="off"> GC
												  </label>
												  <label class="btn btn-primary btn-esp">
												    <input type="radio" name="condicion" value="RE" id="option6" autocomplete="off"> RE
												  </label>
												</div>
												<br />
												<br />
													<h3>Missing?</h3>
													<div class="clearfix"></div>
												<label for="nombre" class="col-sm-2 control-label"><!--Missing--></label>
											  <div class="btn-group" data-toggle="buttons">
												  <label class="btn btn-primary btn-esp">
												    <input type="checkbox" name="missing-b" value="B" id="option1" autocomplete="off"> Box
												  </label>
												  <label class="btn btn-primary btn-esp">
												    <input type="checkbox" name="missing-m" value="M" id="option2" autocomplete="off"> Manual
												  </label>
												  <label class="btn btn-primary btn-esp">
												    <input type="checkbox" name="missing-by" value="BY" id="option3" autocomplete="off"> Battery
												  </label>
												  <label class="btn btn-primary btn-esp">
												    <input type="checkbox" name="missing-w" value="W" id="option4" autocomplete="off"> Wallmount
												  </label>
												  <label class="btn btn-primary btn-esp">
												    <input type="checkbox" name="missing-ch" value="CH" id="option4" autocomplete="off"> Charger
												  </label>
												  <label class="btn btn-primary btn-esp">
												    <input type="checkbox" name="missing-rc" value="RC" id="option4" autocomplete="off"> Remote
												  </label>
												  <label class="btn btn-primary btn-esp">
												    <input type="checkbox" name="missing-ink" value="INK" id="option4" autocomplete="off"> Ink
												  </label>
												  <label class="btn btn-primary btn-esp">
												    <input type="checkbox" name="missing-esp" value="ESP" id="option4" autocomplete="off" > Especial
												  </label>
												</div>
												</div>
												<div class="row col-md-6">
												  <div class="form-group">
														<h3>Missing (special)</h3>
													<div class="col-sm-12">
													  <input type="text" class="form-control" id="special" name="special" placeholder="What is it?">
													</div>
												  </div>
												  <div class="form-group">
														<h3>Coment</h3>
													<div class="col-sm-12">
														<textarea class="form-control" rows="2" id="coment" name="coment" placeholder="Try to be clear and precise when describing the problem"></textarea>
													</div>
												  </div>
											  	</div>
											  	<div class="clearfix"></div>
										  	<div class="clearfix"></div>

                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step btn-lg">Next</button></li>
														<li><button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Close</button></li>
												</ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
											<div class="row col-md-12">
											<div class="form-group col-md-12">
												<h3>Quantity</h3>
												<input type="number" class="form-control" id="qty" name="qty" placeholder="you know how to count, right?" required>
											</div>
										</div>
										<div class="row col-md-12">
											<div class="form-group col-md-12">
											<h3>Location</h3>
												<input type="text" class="form-control" id="location" name="location" placeholder="Let's focus on communicatin'" required>
											</div>
										</div>
										<div class="clearfix"></div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step btn-lg">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step btn-lg">Next</button></li>
														<li><button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Close</button></li>
												</ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
												<div class="row col-md-12">
													<div class="form-group col-md-8">
													<h3>Weight</h3>
														<input type="number" class="form-control" id="weight" name="weight" placeholder=" Please enter the Weight" required>
													</div>
													<div class="form-group col-md-4">
														<h3>Mass Unit</h3>
														<select class="form-control" id="unit" name="unit" required>
															<option>LB</option>
															<option>OZ</option>
														</select>
													</div>
												</div>
												<div class="clearfix"></div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step btn-lg">Previous</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step btn-lg">Next</button></li>
														<li><button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Close</button></li>
												</ul>
                    </div>
										<?php
										$query = mysqli_query($mysqli, "SELECT nu_foto FROM productos ORDER BY id_producto DESC LIMIT 1")
																										or die('error: '.mysqli_error($mysqli));
										$count = mysqli_num_rows($query);
										if ($count <> 0) {
											$data  = mysqli_fetch_assoc($query);
											$nu_foto = $data['nu_foto']+1;
										} else {
											$nu_foto = "1";
										}

										?>
										<input type="hidden" id="bcode" name="bcode" value="">
										<input type="hidden" id="titl" name="titl" value="">
										<input type="hidden" id="img_res" name="img_res" value="">
										<input type="hidden" id="user" name="user" value="<?php echo substr($_SESSION['name_user'],0,1); ?>">
										<input type="hidden" id="nu_foto" name="nu_foto" value="<?php echo $nu_foto; ?>">
                    <div class="tab-pane" role="tabpanel" id="complete">
											<div id="resultados_ajax_productos"></div>
                        <h3>Almost done!</h3>
                        <p> Make sure the data entered is correct before saving and print. </p>
												<ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step btn-lg">Previous</button></li>
                            <li><button type="submit" class="btn btn-primary btn-info-full btn-lg" id="guardar_datos">Save and Print</button></li>
												</ul>
										</div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
		</div>
	  </div>
	</div>
