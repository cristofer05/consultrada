<?php
include("includes/sum_process.php");
 ?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="?module=consultrada"><i class="fa fa-home"></i> Inicio </a></li>
    </ol>
  </section>
  <!-- Main content -->
  <?php
  //include("modal/entrada.php");
  include("modal/entradatab.php");
  ?>
<center>
  <section class="content text-center">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <img id="logo" src="assets/img/logo-consultrada.png" alt="Consultrada logo"/>
        <?php include("includes/sum_message.php"); ?>
        <div id="resultados_final"></div>
        <form class="form-horizontal" role="form" id="datos">
  				<div class="row">
  					<div class="col-md-5 upc">
  						<input type="text" class="form-control" id="q" placeholder="UPC del articulo" onkeyup="load(1);" onkeypress="return pulsar(event)" autofocus="">
  					</div>
  					<div class="col-md-12 text-center">
  						<span id="loader"></span>
  					</div>
  				</div>
				<hr>
				<div class="row-fluid">
          <div id="botonEntrada">
            <a data-toggle="modal" data-target="#Entrada"  title='Dar Entrada' class='btn btn-primary btn-sm' href=''>
              <i style='color:#fff' class='glyphicon glyphicon-edit'> ENTRADA</i>
            </a>
          </div>
					<div class="mostrar">

					</div><!-- Carga los datos ajax -->
				</div>
				</div>
			</form>
      <div class="modal fade" id="sumar" role="dialog" tabindex="-1" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
              <!-- Modal content-->
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                      <h3 class="modal-title">Adding more products</h3>
                  </div>

                  <div class="modal-body-sum">

                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- /.content -->
</center>

<script>

function pulsar(e) {
  tecla = (document.all) ? e.keyCode :e.which;
  return (tecla!=13);
}


/**************Enviar cambios de sumar******************/
// function submitiendo() {
  /*
$("#sumar_producto").submit(function( event ) {
  $('#enviar_sum').attr("disabled", true);
  alert("En proceso");
 var parametros = $(this).serialize();
   $.ajax({
      type: "POST",
      url: "ajax/enviar_sum.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#mensaje_ajax").html("Mensaje: Enviando cambios...");
        },
      success: function(datos){
      $("#mensaje_ajax").html(datos);
      $('#enviar_sum').attr("disabled", false);
      window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();});
        location = window.location.href;
      }, 3000);
      }
  });
  event.preventDefault();
}

*/

/*ENTRADA STEPS MODAL */

$(document).ready(function () {
//Initialize tooltips
$('.nav-tabs > li a[title]').tooltip();

//Wizard
$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

var $target = $(e.target);
if ($target.parent().hasClass('disabled')) {
  return false;
}

});

$(".next-step").click(function (e) {

var $active = $('.wizard .nav-tabs li.active');
$active.next().removeClass('disabled');
nextTab($active);

});
$(".prev-step").click(function (e) {

var $active = $('.wizard .nav-tabs li.active');
prevTab($active);

});
});

function nextTab(elem) {
$(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
$(elem).prev().find('a[data-toggle="tab"]').click();
}

</script>
