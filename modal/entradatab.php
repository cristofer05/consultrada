<div class="modal fade" id="Entrada" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content modal-lg">
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
								<h1 class="text-center" background-color="#000" id="barcode"> ENTRADA UPC:	</h1>

								<div class="row product-image">
									<div class="row col-xs-12">
										<div class="col-xs-3">
											<img src="images/productos/no-foto.png" alt="">
											</div>
										<div class="col-xs-9">
											<p id="title"></p>
										</div>

									</div>
								</div>

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
                        <h3>Condition</h3>
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
													<h3>Missing?</h3>
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
														<h3>Special</h3>
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
                            <li><button type="button" class="btn btn-primary next-step">Next</button></li>
														<li><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></li>
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
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Next</button></li>
														<li><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></li>
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
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Next</button></li>
														<li><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></li>
												</ul>
                    </div>
										<input type="hidden" id="bcode" name="bcode" value="">
										<input type="hidden" id="titl" name="titl" value="">
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Almost done!</h3>
                        <p> Make sure the data entered is correct before saving and print. </p>
												<ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="submit" class="btn btn-primary btn-info-full">Save and Print</button></li>
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
