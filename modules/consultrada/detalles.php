<?php
include("modal/entradaexistente.php");
?>
<?php
 if (isset($_GET['id'])) {

     $query = mysqli_query($mysqli, "SELECT id_producto,nu_foto,qty_total,barcode,ubicacion,barcode_final,comentario,imagen,nombre_producto,realizado FROM productos WHERE id_producto=$id")
                                     or die('error: '.mysqli_error($mysqli));
     $data  = mysqli_fetch_assoc($query);
   }
?>
 <section class="content-header">
   <h1>
     <i class="fa fa-edit icon-title"></i> Detalles del Producto
   </h1>
   <a href="javascript:void(0)" onclick="HaEdicion();" class="btn btn-warning btn-reset">Ver/Editar</a>
   <a data-toggle="tooltip" data-placement="top" target="_blank" title="Imprimir" class="btn btn-primary" href="modules/socios/print.php?&id=<?php echo $data['codigo'];?>"><i style="color:#fff" class="glyphicon glyphicon-print"></i> Imprimir</a>

   <a data-toggle="tooltip" data-placement="top" title="Enviar tarjeta" class="btn btn-default" href="modules/socios/enviar_tarjeta.php?&id=<?php echo $data['codigo'];?>&enviar_email=si" onclick="loading()"><i style="color:#3c8dbc" class="glyphicon glyphicon-envelope"></i> Enviar Tarjeta</a>

   <ol class="breadcrumb">
     <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
     <li><a href="?module=socios"> socios </a></li>
     <li class="active"> Modificar </li>
   </ol>
 </section>

 <!-- Main content -->
 <section class="content">
   <div class="row">
     <div class="col-md-12">
       <div class="box box-primary">
       <div class="popup">
           <img class="popupimage" id="myPopup" src="assets/img/email.webp" width="400">
       </div>
       <div class="black-background" id="myBackground"></div>
         <!-- form start -->
         <form role="form" class="form-horizontal" action="modules/socios/proses.php?act=update" method="POST" id="Editar">
           <div class="box-body">

             <div class="form-group">
               <label class="col-sm-2 control-label">Codigo</label>
               <div class="col-sm-5">
                 <input type="text" class="form-control" name="codigo" value="<?php echo $data['codigo']; ?>" readonly required>
               </div>
             </div>

             <div class="form-group">
               <label class="col-sm-2 control-label">Nombres</label>
               <div class="col-sm-5">
                 <input type="text" id="hedicion1" class="form-control" name="nombres" autocomplete="off" value="<?php echo $data['nombres']; ?>" required>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Apellidos</label>
               <div class="col-sm-5">
                 <input type="text" id="hedicion2" class="form-control" name="apellidos" autocomplete="off" value="<?php echo $data['apellidos']; ?>" required>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Cedula / RNC</label>
               <div class="col-sm-5">
                 <input type="text" id="hedicion3" id="cedula" class="form-control" name="cedula" autocomplete="off" value="<?php echo $data['cedula']; ?>" required>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Fecha Nacimiento</label>
               <div class="col-sm-5">
                 <input type="date" id="hedicion4" name="fnacimiento" class="form-control" autocomplete="off" step="1" value="<?php echo $data['fnacimiento']; ?>">
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Sexo</label>
               <div class="col-sm-5">
                 <select class="chosen-select" id="hedicion5" name="sexo" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                   <option value="<?php echo $data['sexo']; ?>">
                   <?php switch ($data['sexo']) {
                       case "F": echo "Femenino"; break;
                       case "M": echo "Masculino"; break;
                       } ?>
                   </option>
                   <option value="M">Masculino</option>
                   <option value="F">Femenino</option>
                 </select>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Localidad</label>
               <div class="col-sm-5">
                 <select class="chosen-select" id="hedicion6" name="localidad" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                   <option value="<?php echo $data['localidad']; ?>"><?php echo $data['localidad']; ?></option>
                   <option value="Azua">Azua</option>
                 </select>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Ocupacion</label>
               <div class="col-sm-5">
                 <select class="chosen-select" id="hedicion7" name="ocupacion" autocomplete="off" required>
                   <option value="<?php echo $data['ocupacion']; ?>"><?php echo $data['ocupacion']; ?></option>
                   <option value=""></option>
                   <option value="Abogado">Abogado</option>
                   <option value="Académico">Académico</option>

                 </select>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Correo</label>
               <div class="col-sm-5">
                 <input type="text" id="hedicion8" class="form-control" name="correo" autocomplete="off" value="<?php echo $data['correo']; ?>" required>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Telefono</label>
               <div class="col-sm-5">
                 <input type="tel" id="hedicion9" class="form-control" name="telefono" autocomplete="off" value="<?php echo $data['telefono']; ?>" required>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Categoria</label>
               <div class="col-sm-5">
                 <select class="chosen-select" id="hedicion10" name="categoria" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                   <option value="<?php echo $data['categoria']; ?>">
                   <?php switch ($data['categoria']) {
                       case "A": echo "ALUMNO"; break;
                       case "B": echo "ALUMNO - PREMIUM"; break;
                       case "C": echo "CENTRO DE CAPACITACION"; break;
                       case "F": echo "FACILIADOR"; break;
                       case "E": echo "ESTABLECIMIENTO"; break;}  ?>
                   </option>
                   <option value="A">ALUMNO</option>
                   <option value="B">ALUMNO - PREMIUM</option>
                   <option value="C">CENTRO DE CAPACITACION</option>
                   <option value="F">FACILIADOR</option>
                   <option value="E">ESTABLECIMIENTO</option>
                 </select>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Fecha Creacion</label>
               <div class="col-sm-5">
                   <input type="date" name="created_date" class="form-control" autocomplete="off"  value="<?php echo $data['created_date']; ?>">
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Fecha Expiracion</label>
               <div class="col-sm-5">
                   <input type="date" id="hedicion11" name="fexpiracion" class="form-control" autocomplete="off" step="1" min="2018-01-01" max="2099-12-31" value="<?php echo $data['fexpiracion']; ?>">
               </div>
             </div>

           </div><!-- /.box body -->

           <div class="box-footer">
             <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10">
                 <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                 <a href="?module=socios" class="btn btn-default btn-reset">Cancelar</a>
               </div>
             </div>
           </div><!-- /.box footer -->
         </form>
       <!-- FORMULARIO DE SOLO VER -->

         <form class="form-horizontal" id="Ver">
           <div class="box-body">

             <div class="form-group">
               <label class="col-sm-2 control-label">Codigo</label>
               <div class="col-sm-5">
                 <?php echo $data['codigo']; ?>
               </div>
             </div>

             <div class="form-group">
               <label class="col-sm-2 control-label">Nombres</label>
               <div class="col-sm-5">
                 <?php echo $data['nombres']; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Apellidos</label>
               <div class="col-sm-5">
                 <?php echo $data['apellidos']; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Cedula / RNC</label>
               <div class="col-sm-5">
                <?php echo $data['cedula']; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Fecha Nacimiento</label>
               <div class="col-sm-5">
                <?php echo $data['fnacimiento']; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Sexo</label>
               <div class="col-sm-5">
                   <?php switch ($data['sexo']) {
                       case "F": echo "F"; break;
                       case "M": echo "M"; break;
                       } ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Localidad</label>
               <div class="col-sm-5">
                 <?php echo $data['localidad']; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Ocupacion</label>
               <div class="col-sm-5">
                <?php echo $data['ocupacion']; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Correo</label>
               <div class="col-sm-5">
                <?php echo $data['correo']; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Telefono</label>
               <div class="col-sm-5">
                 <?php echo $data['telefono']; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Categoria</label>
               <div class="col-sm-5">
                   <?php switch ($data['categoria']) {
                       case "A": echo "ALUMNO"; break;
                       case "B": echo "ALUMNO - PREMIUM"; break;
                       case "C": echo "CENTRO DE CAPACITACION"; break;
                       case "F": echo "FACILIADOR"; break;
                       case "E": echo "ESTABLECIMIENTO"; break;}  ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Fecha Expiracion</label>
               <div class="col-sm-5">
                   <?php echo $data['fexpiracion']; ?>
               </div>
             </div>
           </div><!-- /.box body -->
         <form>
       </div><!-- /.box -->
     </div><!--/.col -->
   </div>   <!-- /.row -->
 </section><!-- /.content -->
<?php
}
?>

<script type="text/javascript">
   function loading() {
       var popup = document.getElementById("myPopup");
       popup.classList.toggle("show");

       var background = document.getElementById("myBackground");
       background.classList.toggle("show-background");
   }
</script>
