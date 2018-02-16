<?php
 if (isset($_GET['id'])) {
     $id = $_GET['id'];
     $query = mysqli_query($mysqli, "SELECT id_producto,nu_foto,qty_total,barcode,ubicacion,barcode_final,comentario,imagen,nombre_producto,realizado FROM productos WHERE id_producto = $id")
                                     or die('error: '.mysqli_error($mysqli));
     $data  = mysqli_fetch_assoc($query);
     $sku = $data['barcode_final'];
     $mage = get_magento($sku);
     $mage_qty = get_magento_qty($sku);
//Asignar valores a los atributos
     for ($i=0; $i < count($mage->custom_attributes) ; $i++) {
       switch ($mage->custom_attributes[$i]->attribute_code) {
         case 'warehouse_location':
           $mage_location = $mage->custom_attributes[$i]->value;
           break;
         case 'mpn':
           $mage_mpn = $mage->custom_attributes[$i]->value;
           break;
         case 'brand':
           $mage_brand = $mage->custom_attributes[$i]->value;
           break;
         case 'upc':
           $mage_upc = $mage->custom_attributes[$i]->value;
           break;
         case 'asin_amazon':
           $mage_asin = $mage->custom_attributes[$i]->value;
           break;
         case 'url_key':
           $mage_url = $mage->custom_attributes[$i]->value;
           break;

         default:
           # code...
           break;
       }
     }
   }

   //Observaciones
   $observations = "";
   if ($data['ubicacion'] != $mage_location ) {
     $observations = "The warehouse location in consultrada is different (".$data['ubicacion'].")";
   }elseif ($observations == "") {
     $observations = "TODO APARENTA BIEN";
   }
?>
 <section class="content-header">
   <h1>
     <i class="fa fa-edit icon-title"></i> Detalles del Articulo en Magento
   </h1>
    <a data-toggle="tooltip" data-placement="top" target="_blank" title="Print" class="btn btn-primary btn-lg" href="bcode/vendor/spipu/html2pdf/examples/barcode.php?make_pdf=&bcode=<?php echo $data['barcode_final'];?>&ent=F&coment=<?php echo $data['comentario'];?>&location=<?php echo $data['ubicacion'];?>&pic=<?php echo $data['nu_foto'];?>&qty=3"><i style="color:#fff" class="glyphicon glyphicon-print"></i> Print Labels</a>
    <a data-toggle="tooltip" data-placement="top" target="_blank" title="See in the Web" class="btn btn-primary btn-lg" href="https://lordcomputer.com/<?php echo $mage_url; ?>.html"><i style="color:#fff" class="glyphicon glyphicon-print"></i> WEB</a>

   <ol class="breadcrumb">
     <li><a href="?module=consultrada"><i class="fa fa-home"></i> Inicio </a></li>
     <li class="active"> Detalles </li>
   </ol>
 </section>
 <!-- Main content -->
 <section class="content">
   <div class="row">
     <div class="col-md-12">
       <div class="col-md-7">
       <div class="box box-primary">
       <div class="black-background" id="myBackground"></div>

       <!-- FORMULARIO DE SOLO VER -->
         <form class="form-horizontal" id="Ver">
           <div class="box-body">
             <div class="form-group">
               <label class="col-sm-3 control-label">ID:</label>
               <div class="col-sm-5">
                 <?php echo $mage->id; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-3 control-label">BARCODE:</label>
               <div class="col-sm-5">
                 <?php echo $mage->sku; ?>
               </div>
             </div>

             <div class="form-group">
               <label class="col-sm-3 control-label">UPC:</label>
               <div class="col-sm-5">
                 <?php echo $mage_upc; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-3 control-label">NAME:</label>
               <div class="col-sm-8">
                 <?php echo $mage->name; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-3 control-label">BRAND:</label>
               <div class="col-sm-5">
                 <?php echo $mage_brand; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-3 control-label">MPN:</label>
               <div class="col-sm-5">
                 <?php echo $mage_mpn; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-3 control-label">LOCATION:</label>
               <div class="col-sm-5">
                <?php echo $mage_location; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-3 control-label">QUANTITY:</label>
               <div class="col-sm-5">
                 <?php echo $mage_qty->qty; ?>
               </div>
             </div>
               <div class="form-group">
                 <label class="col-sm-3 control-label">STOCK:</label>
                 <div class="col-sm-5">
                   <?php if ($mage_qty->qty==TRUE) {
                     echo "ACTIVO";
                   }else{
                     echo "INACTIVO";
                   }?>
                 </div>
             </div>
             <div class="form-group">
               <label class="col-sm-3 control-label">PRICE:</label>
               <div class="col-sm-5">
                 <?php echo $mage->price; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-3 control-label">WEIGHT:</label>
               <div class="col-sm-5">
                 <?php echo $mage->weight." LB"; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-3 control-label">ASIN:</label>
               <div class="col-sm-5">
                 <?php echo $mage_asin; ?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-3 control-label">STATUS:</label>
               <div class="col-sm-5">
                 <?php
                    if ($mage->status == 1) {
                      echo "ENABLE";
                    }else{
                      echo "DISABLE";
                    }?>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-3 control-label">CREATED:</label>
               <div class="col-sm-5">
                <?php echo $mage->created_at; ?>
               </div>
             </div>
           </div><!-- /.box body -->
         </form>
         <div class="bgubicacion">
           <p>
             <?php echo $mage_location; ?>
           </p>
         </div>
           </div>

           </div>
           <div class="col-md-5">
             <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Magento Gallery</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <?php
                        for ($i=0; $i < count($mage->media_gallery_entries); $i++) {
                          $status = "";
                          if ($i == 0) {
                            $status = "active";
                          }
                          echo "
                              <div class='item ".$status."'>
                                <img src='http://lordcomputer.com/pub/media/catalog/product".$mage->media_gallery_entries[$i]->file."'>
                              </div>
                          ";
                        }

                     ?>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-arrow-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-arrow-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
             </div>
               <div class="col-md-5 col-sm-6 col-xs-12">
                 <div class="box box-warning box-solid">
                   <div class="box-header with-border">
                     <h3 class="box-title">Obervations</h3>
                     <div class="box-tools pull-right">
                       <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                       </button>
                     </div>
                     <!-- /.box-tools -->
                   </div>
                   <!-- /.box-header -->
                   <div class="box-body" style="">
                     <?php
                        echo $observations;
                      ?>
                   </div>
             <!-- /.box-body -->
           </div>
              </div>
           </div>
         <div class="clearfix"></div>

           <!-- /.box -->
                </div>
                <!-- /.box -->
      </div>
     </div><!--/.col -->
   </div>   <!-- /.row -->
 </section><!-- /.content -->
   </div>   <!-- /.row -->
       </div>
     </div>
