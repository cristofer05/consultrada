<section class="content-header">
  <h1>
    <i class="fa fa-folder-o icon-title"></i> Entrada Corte

    <a class="btn btn-primary btn-social pull-right" href="?module=form_socios&form=add" title="agregar" data-toggle="tooltip">
      <i class="fa fa-plus"></i> Agregar
    </a>
  </h1>

</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">

    <?php

    if (empty($_GET['alert'])) {
      echo "";
    }

    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
             Nuevos datos del miembro han sido  almacenados correctamente.
            </div>";
    }

    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
             Datos del Miembro modificados correcamente.
            </div>";
    }

    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
            Se eliminaron los datos del Miembro
            </div>";
    }

    elseif ($_GET['alert'] == 4) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
            Tarjeta de membresia enviada satisfactoriamente
            </div>";
    }

    elseif ($_GET['alert'] == 5) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> ERROR!</h4>
            No se pudo enviar el correo
            </div>";
    }

    elseif ($_GET['alert'] == 6) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
            Nuevos datos del miembro han sido  almacenados correctamente y Tarjeta de membresia enviada satisfactoriamente.
            </div>";
    }

    elseif ($_GET['alert'] == 7) {
      echo "<div class='alert alert-warning alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Advertencia!</h4>
            Nuevos datos del miembro han sido  almacenados correctamente pero NO se pudo enviar el correo
            </div>";
    }
    ?>

      <div class="box box-primary">
        <div class="box-body">

          <table id="dataTables1" class="table table-bordered table-striped table-hover">

            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center"># Foto</th>
                <th class="center">Bcode</th>
                <th class="center">Comentario</th>
                <th class="center">QTY</th>
                <th class="center">Nombre</th>
            <!--    <th class="center">Localidad</th> -->
                <th class="center">Realizado</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($mysqli, "SELECT id_producto,nu_foto,qty_total,barcode,barcode_final,comentario,imagen,nombre_producto FROM productos ORDER BY nu_foto DESC")
                                            or die('error: '.mysqli_error($mysqli));

            while ($data = mysqli_fetch_assoc($query)) {
            echo "<tr>
                      <td width='5' class='center'>$no</td>
                      <td width='100' class='center'><spam class='nufoto'>$data[nu_foto]</spam></td>
                      <td width='150'>$data[barcode_final]</td>
                      <td width='110'>$data[comentario]</td>
                      <td width='20' class='center'>$data[qty_total]</td>
                      <td width='350'>$data[nombre_producto]</td>
                      <td width='100' class='center'><input type='checkbox' data-toggle='toggle' data-on='LISTO' data-off='NO LISTO' data-onstyle='success' data-offstyle='danger'></td>
                      <td class='center' width='360'>
                        <div>
                          <a data-toggle='tooltip' data-placement='top' title='Ver/Editar' style='margin-right:5px' target='_blank' class='btn btn-warning btn-sm' href='https://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$data[barcode]'>
                              <i style='color:#fff' class='glyphicon glyphicon-search'> Amazon</i>
                          </a>";
            ?>
                         <a data-toggle="tooltip" data-placement="top" target="_blank" title="Imprimir" class="btn btn-primary btn-sm" href="https://www.ebay.com/sch/i.html?LH_BIN=1&_nkw=<?php echo $data['barcode'];?>">
                              <i style="color:#fff" class="glyphicon glyphicon-search"> eBay</i>
                          </a>

                          <a data-toggle="tooltip" data-placement="top" target='_blank' title="Eliminar" class="btn btn-danger btn-sm" href="https://www.google.com.do/search?q=<?php echo $data['barcode'];?>">
                              <i style="color:#fff" class="glyphicon glyphicon-search"> Google</i>
                          </a>
            <?php
              echo "    </div>
                      </td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content
