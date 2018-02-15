<?php
 //include("funciones.php");
?>
<?php
 if (isset($_GET['id'])) {
     $id = $_GET['id'];
     $query = mysqli_query($mysqli, "SELECT id_producto,nu_foto,qty_total,barcode,ubicacion,barcode_final,comentario,imagen,nombre_producto,realizado FROM productos WHERE id_producto = $id")
                                     or die('error: '.mysqli_error($mysqli));
     $data  = mysqli_fetch_assoc($query);
     $dproducto = $data['id_producto'];
   }
?>
 <section class="content-header">
   <h1>
     <i class="fa fa-edit icon-title"></i> Detalles del Articulo
   </h1>
    <a data-toggle="tooltip" data-placement="top" target="_blank" title="Print" class="btn btn-primary btn-lg" href="bcode/vendor/spipu/html2pdf/examples/barcode.php?make_pdf=&bcode=<?php echo $data['barcode_final'];?>&ent=F&coment=<?php echo $data['comentario'];?>&location=<?php echo $data['ubicacion'];?>&pic=<?php echo $data['nu_foto'];?>&qty=3"><i style="color:#fff" class="glyphicon glyphicon-print"></i> Print</a>
    <a data-toggle="tooltip" data-placement="top" target="_blank" title="Change Location" class="btn btn-primary btn-lg" href="bcode/vendor/spipu/html2pdf/examples/barcode.php?make_pdf=&bcode=<?php echo $data['barcode_final'];?>&ent=F&coment=<?php echo $data['comentario'];?>&location=<?php echo $data['ubicacion'];?>&pic=<?php echo $data['nu_foto'];?>&qty=3"><i style="color:#fff" class="fa fa-compass"></i> Change location</a>
    <a title='Sumar y Revivir' class='btn btn-primary btn-lg openBtn_$data[id_producto]'>
      <i style='color:#fff' class='glyphicon glyphicon-edit'> ENTRADA</i></a>

   <ol class="breadcrumb">
     <li><a href="?module=consultrada"><i class="fa fa-home"></i> Inicio </a></li>
     <li class="active"> Detalles </li>
   </ol>
 </section>
 <!-- Main content -->
 <?php
 //include("modal/entrada.php");
 //include("modal/suma.php");
 ?>
 <section class="content">
   <div class="row">
     <div class="col-md-12">
       <div class="col-md-8">
       <div class="box box-primary">
       <div class="black-background" id="myBackground"></div>

       <!-- FORMULARIO DE SOLO VER -->
         <form class="form-horizontal" id="Ver">
           <div class="box-body">

             <div class="form-group">
               <label class="col-sm-3 control-label">BARCODE:</label>
               <div class="col-sm-5">
                 <?php echo $data['barcode_final']; ?>
               </div>
             </div>

             <div class="form-group">
               <label class="col-sm-3 control-label">UPC:</label>
               <div class="col-sm-5">
                 <?php echo $data['barcode']; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-3 control-label">NAME:</label>
               <div class="col-sm-8">
                 <?php echo $data['nombre_producto']; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-3 control-label">LOCATION:</label>
               <div class="col-sm-5">
                <?php echo $data['ubicacion']; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-3 control-label"># PIC:</label>
               <div class="col-sm-5">
                <?php echo $data['nu_foto']; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-3 control-label">COMMENT:</label>
               <div class="col-sm-5">
                 <?php echo $data['comentario']; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-3 control-label">READY</label>
               <div class="col-sm-5">
                <?php echo $data['realizado']; ?>
               </div>
             </div>
           </div><!-- /.box body -->
         </form>
         <div class="bgubicacion">
           <p>
             <?php echo $data['ubicacion']; ?>
           </p>
         </div>
           </div>

           </div>
           <div class="col-md-4">
             <div class="form-group">
               <?php
               if ($data['realizado'] == "SI"){
                 $sku= get_img($data['barcode_final']);

                   if (gettype($sku) != "object"){
                     echo "<img src='http://lordcomputer.com/pub/media/catalog/product".
                   	 $sku[0]->file."'class='rounded img-thumbnail' alt='Imagen'>";
                   }else{
                      echo "<img src='images/productos/no-foto.png' class='rounded img-thumbnail' alt='Imagen' width='100%'>";
                      echo "<br /><br /><div class='alert alert-danger alert-dismissible'>
                        <button type='button' class='close data-dismiss='alert' aria-hidden='true'>×</button>
                        <h4><i class='icon fa fa-ban'></i> Alert!</h4>
                        <p>Revisar: Barcode no coincide en Magento</p>
                      </div>";
                    }
                }else{
                   echo "<img src='images/productos/no-foto.png' class='rounded img-thumbnail' alt='Imagen' width='100%'>";
                 }
                ?>
             </div>
           </div>
         <div class="clearfix"></div>
           <div class="logdetalles">
             <h1 class='text-center'>
               <i class="fa fa-edit icon-title"></i> PRODUCT LOG
             </h1>
             <div class="row">
               <div class="col-md-12">
                 <div class="box box-primary">
                   <div class="box-body">

                     <table id="dataTables1" class="table table-bordered table-striped table-hover">

                       <thead>
                         <tr>
                           <th class="center">ID</th>
                           <th class="center">DATE</th>
                           <th class="center">USER</th>
                           <th class="center">REGISTER</th>
                           <th class="center">QTY</th>
                           <th class="center">EDITION</th>
                         </tr>
                       </thead>
                       <tbody>
                       <?php
                       $no = 1;
                       $query = mysqli_query($mysqli, "SELECT id_log,id_producto,id_usuario,fecha_log,registro,qty,edicion FROM logs where id_producto = $dproducto ORDER BY fecha_log DESC")
                                                       or die('error: '.mysqli_error($mysqli));

                       while ($data = mysqli_fetch_assoc($query)) {
                         $usuario = nombre_usuario($data['id_usuario']);
                       echo "<tr>
                                 <td width='5' class='center'>$data[id_log]</td>
                                 <td width='100' class='center'>$data[fecha_log]</td>
                                 <td width='110'>$usuario</td>
                                 <td width='110'>$data[registro]</td>
                                 <td width='20' class='center'>$data[qty]</td>
                                 <td width='45' class='center'>$data[edicion]</td>";
                       ?>
                       <?php
                         echo "    </div>
                                 </td>
                               </tr>";
                         $no++;
                       }
                       ?>
                       </tbody>
                     </table>
                  </div>
                 </div>
      </div>
  </div>
           <!-- /.box -->
                </div>
                <!-- /.box -->
      </div>

     </div><!--/.col -->

   </div>   <!-- /.row -->

 </section><!-- /.content -->

   </div>   <!-- /.row -->
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
<script type="text/javascript">
   function loading() {
       var popup = document.getElementById("myPopup");
       popup.classList.toggle("show");

       var background = document.getElementById("myBackground");
       background.classList.toggle("show-background");
   }
</script>
