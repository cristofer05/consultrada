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
