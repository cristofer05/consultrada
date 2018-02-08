  <?php
  if (isset($_POST['mod_id']) && $_POST['mod_id'] !=NULL) {
    if (empty($_POST['mod_qty'])) {
        $errors[] = "El campo cantidad estaba vacio";
    } else if (empty($_POST['mod_ubi'])) {
       $errors[] = "El campo ubicación estaba vacio";
    } else if (
      !empty($_POST['mod_qty']) &&
      !empty($_POST['mod_ubi'])
    ){
        $id_producto=$_POST['mod_id'];
        $qty=intval($_POST['mod_qty']);
        $ubicacion=mysqli_real_escape_string($mysqli,(strip_tags($_POST["mod_ubi"],ENT_QUOTES)));
        $referencia=strval("Editado");
        $date_added=date("Y-m-d H:i:s");

        $sql="UPDATE productos SET qty_total='".$qty."', ubicacion='".$ubicacion."' WHERE id_producto='".$id_producto."'";
        $query_update = mysqli_query($mysqli,$sql);

        if ($query_update){
          $messages[] = "Producto ha sido actualizado satisfactoriamente.";
          //$id_producto=get_row('productos','id_producto', 'barcode_final', $barcode_final);
          $user_id=$_SESSION['id_user'];
          $firstname=$_SESSION['name_user'];
          $nota="$firstname editó este producto";
          echo guardar_historial($id_producto,$user_id,$date_added,$nota,$referencia,$qty,$ubicacion); 
        } else{
          $errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
        }
    } else {
      $errors []= "Error desconocido.";
    }

  if (isset($errors)){    
  ?>
  <div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Error!</strong> 
      <?php
        foreach ($errors as $error) {
            echo $error;
          }
        ?>
  </div>
  <?php
  }
  if (isset($messages)){  
    ?>
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡Bien hecho!</strong>
        <?php
          foreach ($messages as $message) {
              echo $message;
            }
          ?>
    </div>
    <?php
  }
}
?>
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
                      <h4 class="modal-title">Editando producto</h4>
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
</script>
