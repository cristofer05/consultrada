  <!-- Content Header (Page header) -->
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="?module=consultrada"><i class="fa fa-home"></i> Inicio </a></li>
    </ol>
  </section>
  <!-- Main content -->
  <?php
  include("modal/entrada.php");
  ?>
<center>
  <section class="content text-center">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <img id="logo" src="assets/img/logo-consultrada.png" alt="Consultrada logo"/>
        <form class="form-horizontal" role="form" id="datos">
  				<div class="row">
  					<div class="col-md-5 upc">
  						<input type="text" class="form-control" id="q" placeholder="UPC del articulo" onkeyup="load(1);" onkeypress="return pulsar(event)" autofocus="">
  					</div>
  					<div class="col-md-12 text-center">
  						<span id="loader"><img src="images/loader.gif" width="70px"></span>
  					</div>
  				</div>
				<hr>
				<div class="row-fluid">
					<div class="mostrar">
						<!-- MENSAJE DE SUCESS PARA LISTA DE PRODUCTOS -->

						<!-- FIN MENSAJE DE SUCESS PARA LISTA DE PRODUCTOS -->
					</div><!-- Carga los datos ajax -->
				</div>
				</div>
			</form>
      </div>
    </div>
  </section><!-- /.content -->
</center>

<script>
function pulsar(e) { 
  tecla = (document.all) ? e.keyCode :e.which; 
  return (tecla!=13); 
} 
</script>