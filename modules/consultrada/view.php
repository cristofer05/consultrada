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
                          <th class="column5">Nombre</th>
                          <th class="column6">Comentario</th>
                          <th class="column7">Ubicacion</th>
                          <th class="column8">Accion</th>
                        </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td class="column1">1</td>
                            <td class="column2"><spam class='nufoto'>105</spam></td>
                            <td class="column3">08456312541 GA</td>
                            <td class="column5">RadioShack Cargador de laptop</td>
                            <td class="column6">Azul</td>
                            <td class="column7">A02</td>
                            <td class="column8">
                              <div>
                                <a data-toggle='tooltip' data-placement='top' title='Ver articulo' style='margin-right:5px' class='btn btn-primary btn-sm' href="https://www.amazon.com/s/?url=search-alias%3Daps&field-keywords=<?php echo "8888"; ?>">
                                    <i style='color:#fff' class='glyphicon glyphicon-eye-open'> VER</i>
                                </a>
                               <a data-toggle="tooltip" data-placement="top" target="_blank" title="Dar Entrada" class="btn btn-primary btn-sm" href="https://www.ebay.com/sch/i.html?LH_BIN=1&_nkw=<?php echo "8888"; ?>&rt=nc&LH_PrefLoc=1&_trksid=p2045573.m1684">
                                    <i style="color:#fff" class="glyphicon glyphicon-edit"> ENTRADA</i>
                                </a>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td class="column1">2</td>
                            <td class="column2"><spam class='nufoto'>106</spam></td>
                            <td class="column3">08456312541 GC B</td>
                            <td class="column5">RadioShack Cargador de laptop</td>
                            <td class="column6">Azul</td>
                            <td class="column7">B06</td>
                            <td class="column8">
                              <div>
                                <a data-toggle='tooltip' data-placement='top' title='Ver articulo' style='margin-right:5px' class='btn btn-primary btn-sm' href="https://www.amazon.com/s/?url=search-alias%3Daps&field-keywords=<?php echo "8888"; ?>">
                                    <i style='color:#fff' class='glyphicon glyphicon-eye-open'> VER</i>
                                </a>
                               <a data-toggle="tooltip" data-placement="top" target="_blank" title="Dar Entrada" class="btn btn-primary btn-sm" href="https://www.ebay.com/sch/i.html?LH_BIN=1&_nkw=<?php echo "8888"; ?>&rt=nc&LH_PrefLoc=1&_trksid=p2045573.m1684">
                                    <i style="color:#fff" class="glyphicon glyphicon-edit"> ENTRADA</i>
                                </a>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td class="column1">3</td>
                            <td class="column2"><spam class='nufoto'>107</spam></td>
                            <td class="column3">08456312541 GB</td>
                            <td class="column5">RadioShack Cargador de laptop</td>
                            <td class="column6">Azul</td>
                            <td class="column7">A24</td>
                            <td class="column8">
                              <div>
                                <a data-toggle='tooltip' data-placement='top' title='Ver articulo' style='margin-right:5px' class='btn btn-primary btn-sm' href="https://www.amazon.com/s/?url=search-alias%3Daps&field-keywords=<?php echo "8888"; ?>">
                                    <i style='color:#fff' class='glyphicon glyphicon-eye-open'> VER</i>
                                </a>
                               <a data-toggle="tooltip" data-placement="top" target="_blank" title="Dar Entrada" class="btn btn-primary btn-sm" href="https://www.ebay.com/sch/i.html?LH_BIN=1&_nkw=<?php echo "8888"; ?>&rt=nc&LH_PrefLoc=1&_trksid=p2045573.m1684">
                                    <i style="color:#fff" class="glyphicon glyphicon-edit"> ENTRADA</i>
                                </a>
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
          <!-- Carga los datos ajax -->
				</div>
			</form>
      </div>
    </div>
  </section><!-- /.content -->
</center>
