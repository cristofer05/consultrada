  <!-- Content Header (Page header) -->
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="?module=consultrada"><i class="fa fa-home"></i> Inicio </a></li>
    </ol>
  </section>
  <!-- Main content -->
<center>
  <section class="content text-center">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
          <img id="logo" src="assets/img/logo-consultrada.png" alt="Consultrada logo"/>
          <form class="form-horizontal" role="form" id="datos">
				<div class="row">
					<div class="col-md-5 upc">
						<input type="text" class="form-control" placeholder="UPC del articulo" onkeyup="load(1);" onkeypress="return pulsar(event)" autofocus="">
					</div>
					<div class="col-md-12 text-center">
						<span id="loader"></span>
					</div>
				</div>
				<hr>
				<div class="row-fluid">
					<div id="resultados">
						<!-- MENSAJE DE SUCESS PARA LISTA DE PRODUCTOS -->
            <div class="limiter">
              <div class="container-table100">
                <div class="wrap-table100">
                  <div class="table100">
                    <table>
                      <thead>
                        <tr class="table100-head">
                          <th class="column1">#</th>
                          <th class="column2">Foto</th>
                          <th class="column3">Barcode</th>
                          <th class="column4">Qty</th>
                          <th class="column5">Nombre</th>
                          <th class="column6">Comentario</th>
                          <th class="column7">Realizado</th>
                          <th class="column8">Accion</th>
                        </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td class="column1">1</td>
                            <td class="column2"><spam class='nufoto'>105</spam></td>
                            <td class="column3">08456312541 GA</td>
                            <td class="column4">8</td>
                            <td class="column5">RadioShack Cargador de laptop</td>
                            <td class="column6">Azul</td>
                            <td class="column7"><input class='input-toggle' type='checkbox'></td>
                            <td class="column8">
                              <div>
                                <a data-toggle='tooltip' data-placement='top' title='Ver en Amazon' style='margin-right:5px' class='btn btn-primary btn-sm' href="https://www.amazon.com/s/?url=search-alias%3Daps&field-keywords=<?php echo "8888"; ?>">
                                    <i style='color:#fff' class='glyphicon glyphicon-edit'>Amazon</i>
                                </a>
                               <a data-toggle="tooltip" data-placement="top" target="_blank" title="Ver en eBay" class="btn btn-primary btn-sm" href="https://www.ebay.com/sch/i.html?LH_BIN=1&_nkw=<?php echo "8888"; ?>&rt=nc&LH_PrefLoc=1&_trksid=p2045573.m1684">
                                    <i style="color:#fff" class="glyphicon glyphicon-print">eBay</i>
                                </a>

                                <a data-toggle="tooltip" data-placement="top" title="Ver en Google" class="btn btn-danger btn-sm" href="https://www.google.com.do/search?q=<?php echo "888"; ?>">
                                    <i style="color:#fff" class="glyphicon glyphicon-trash">Google</i>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td class="column1">1</td>
                            <td class="column2"><spam class='nufoto'>105</spam></td>
                            <td class="column3">08456312541 GA</td>
                            <td class="column4">8</td>
                            <td class="column5">RadioShack Cargador de laptop</td>
                            <td class="column6">Azul</td>
                            <td class="column7"><input class='input-toggle' type='checkbox'></td>
                            <td class="column8">
                              <div>
                                <a data-toggle='tooltip' data-placement='top' title='Ver en Amazon' style='margin-right:5px' class='btn btn-primary btn-sm' href="https://www.amazon.com/s/?url=search-alias%3Daps&field-keywords=<?php echo "8888"; ?>">
                                    <i style='color:#fff' class='glyphicon glyphicon-edit'>Amazon</i>
                                </a>
                               <a data-toggle="tooltip" data-placement="top" target="_blank" title="Ver en eBay" class="btn btn-primary btn-sm" href="https://www.ebay.com/sch/i.html?LH_BIN=1&_nkw=<?php echo "8888"; ?>&rt=nc&LH_PrefLoc=1&_trksid=p2045573.m1684">
                                    <i style="color:#fff" class="glyphicon glyphicon-print">eBay</i>
                                </a>

                                <a data-toggle="tooltip" data-placement="top" title="Ver en Google" class="btn btn-danger btn-sm" href="https://www.google.com.do/search?q=<?php echo "888"; ?>">
                                    <i style="color:#fff" class="glyphicon glyphicon-trash">Google</i>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td class="column1">1</td>
                            <td class="column2"><spam class='nufoto'>105</spam></td>
                            <td class="column3">08456312541 GA</td>
                            <td class="column4">8</td>
                            <td class="column5">RadioShack Cargador de laptop</td>
                            <td class="column6">Azul</td>
                            <td class="column7"><input class='input-toggle' type='checkbox'></td>
                            <td class="column8">
                              <div>
                                <a data-toggle='tooltip' data-placement='top' title='Ver en Amazon' style='margin-right:5px' class='btn btn-primary btn-sm' href="https://www.amazon.com/s/?url=search-alias%3Daps&field-keywords=<?php echo "8888"; ?>">
                                    <i style='color:#fff' class='glyphicon glyphicon-edit'>Amazon</i>
                                </a>
                               <a data-toggle="tooltip" data-placement="top" target="_blank" title="Ver en eBay" class="btn btn-primary btn-sm" href="https://www.ebay.com/sch/i.html?LH_BIN=1&_nkw=<?php echo "8888"; ?>&rt=nc&LH_PrefLoc=1&_trksid=p2045573.m1684">
                                    <i style="color:#fff" class="glyphicon glyphicon-print">eBay</i>
                                </a>

                                <a data-toggle="tooltip" data-placement="top" title="Ver en Google" class="btn btn-danger btn-sm" href="https://www.google.com.do/search?q=<?php echo "888"; ?>">
                                    <i style="color:#fff" class="glyphicon glyphicon-trash">Google</i>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td class="column1">1</td>
                            <td class="column2"><spam class='nufoto'>105</spam></td>
                            <td class="column3">08456312541 GA</td>
                            <td class="column4">8</td>
                            <td class="column5">RadioShack Cargador de laptop</td>
                            <td class="column6">Azul</td>
                            <td class="column7"><input class='input-toggle' type='checkbox'></td>
                            <td class="column8">
                              <div>
                                <a data-toggle='tooltip' data-placement='top' title='Ver en Amazon' style='margin-right:5px' class='btn btn-primary btn-sm' href="https://www.amazon.com/s/?url=search-alias%3Daps&field-keywords=<?php echo "8888"; ?>">
                                    <i style='color:#fff' class='glyphicon glyphicon-edit'>Amazon</i>
                                </a>
                               <a data-toggle="tooltip" data-placement="top" target="_blank" title="Ver en eBay" class="btn btn-primary btn-sm" href="https://www.ebay.com/sch/i.html?LH_BIN=1&_nkw=<?php echo "8888"; ?>&rt=nc&LH_PrefLoc=1&_trksid=p2045573.m1684">
                                    <i style="color:#fff" class="glyphicon glyphicon-print">eBay</i>
                                </a>

                                <a data-toggle="tooltip" data-placement="top" title="Ver en Google" class="btn btn-danger btn-sm" href="https://www.google.com.do/search?q=<?php echo "888"; ?>">
                                    <i style="color:#fff" class="glyphicon glyphicon-trash">Google</i>
                                </a>
                              </div>
                            </td>
                          </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

						<!-- FIN MENSAJE DE SUCESS PARA LISTA DE PRODUCTOS -->
					</div><!-- Carga los datos ajax -->
				</div>

        <!-- Ejemplo de como se podrian mostrar los resultados -->
				<div class="row">
					<div class="outer_div">
            <div class="col-xs-4">
                <button class="btn btn-primary sku" type="button">
                  75489562654896 GA MB
                </button>
              </div>
              <div class="col-xs-4">
                <button class="btn btn-primary sku" type="button">
                  75489562654896 GA B
                </button>
              </div>
              <div class="col-xs-4">
                <button class="btn btn-primary sku" type="button">
                  75489562654896 GA B
                </button>
              </div>
              <div class="col-xs-4">
                <button class="btn btn-primary sku" type="button">
                  75489562654896 GA B
                </button>
              </div>
			    </div>
          <!-- Carga los datos ajax -->
				</div>
			</form>
      </div>
    </div>
  </section><!-- /.content -->
</center>
