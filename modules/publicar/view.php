<section class="content-header">
  <h1>
    <i class="fa fa-folder-o icon-title"></i> Entrada Corte

    <a class="btn btn-danger btn-social pull-right" href="?module=form_socios&form=add" title="Corte listo" data-toggle="tooltip">
      <i class="fa fa-angellist"></i> CORTE LISTO
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

            <thead class="cabecera">
              <tr>
                <th class="center">No.</th>
                <th class="center"># PIC</th>
                <th class="center">Bcode</th>
                <th class="center">Coment</th>
                <th class="center">QTY</th>
                <th class="center">Location</th>
                <th class="center">Name</th>
            <!--    <th class="center">Localidad</th> -->
                <th class="center">Realizado</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            $seccion=1;
            $query = mysqli_query($mysqli, "SELECT id_corte,estado FROM cortes ORDER BY id_corte DESC LIMIT 1")
                                            or die('error: '.mysqli_error($mysqli));
             $data = mysqli_fetch_assoc($query);
             if ($data["estado"]!="finalizado") {
               $id_corte=$data["id_corte"];
               if ($data["estado"]=="actual") {
                 $eCorte=0;
               }else {
                 $eCorte=1;
               }
             }else {
               $id_corte=0;
             }


            $query = mysqli_query($mysqli, "SELECT id_producto,nu_foto,qty_total,barcode,ubicacion,barcode_final,comentario,imagen,nombre_producto,realizado,id_corte,seccion FROM productos WHERE id_corte=$id_corte AND seccion!='sumar' ORDER BY realizado ASC, nu_foto DESC ")
                                            or die('error: '.mysqli_error($mysqli));


            while ($data = mysqli_fetch_assoc($query)) {
              $estado="";
              $claseRealizado="<tr>";
              $claseInput="";
              $aRealizado="";
              $ready=0;

              if ($data['realizado']=="SI") {
                $estado = "Checked";
                $claseRealizado="<tr class='realizado'>";
                $claseInput="class='codeInput'";
                $aRealizado="realizadito";
                $ready=1;
              }

              if ($data['seccion']=="pendiente") {
                $claseRealizado="<tr class='pendiente'>";
                $claseInput="class='codeInputPen'";
                $aRealizado="pendientito";
              }

            echo "<SCRIPT>
                  function myFunction$no() {
                  var copyText = document.getElementById('myInput$no');
                  copyText.select();
                  document.execCommand('Copy');
                }</SCRIPT>
            ";
            echo "$claseRealizado
                      <td width='5' class='center'>$no</td>
                      <td width='100' class='center'><spam class='nufoto'>$data[nu_foto]</spam></td>
                      <td width='150' onclick='myFunction$no()'>
                      <input $claseInput type='text' style='border:0px;' value='$data[barcode_final]' id='myInput$no' readOnly>

                      <td width='110'>$data[comentario]</td>
                      <td width='20' class='center'>$data[qty_total]</td>
                      <td width='45' class='center'>$data[ubicacion]</td>
                      <td width='350'><a class='$aRealizado' href='main.php?module=detalles&id=$data[id_producto]' target='_blank'>$data[nombre_producto]</a></td>
                      <td width='100' class='center' onclick='chgRealizado($data[id_producto], $ready, $seccion, $eCorte)'><input type='checkbox' data-toggle='toggle' data-on='LISTO' data-off='NO LISTO' data-onstyle='success' data-offstyle='danger' ".$estado." ></td>
                      <td class='center' width='360'>
                        <div>
                          <a data-toggle='tooltip' data-placement='top' title='Buscar en Amazon ' style='margin-right:5px' target='_blank' class='btn btn-warning btn-lg $aRealizado' href='https://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$data[barcode]'>
                              <i style='color:#fff' class='fa fa-fw fa-amazon'></i>
                          </a>";
            ?>
                         <a data-toggle="tooltip" data-placement="top" target="_blank" title="Buscar en eBay" class="btn btn-default btn-lg <?php echo $aRealizado ?>" href="https://www.ebay.com/sch/i.html?LH_BIN=1&_nkw=<?php echo $data['barcode'];?>">
                              <img width="23.141" src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAUrSURBVGhD7ZZvbBNlHMdPYL2hxDlE2k5FzBbdJgLa3Y3pzKRtWNuNLL5A4xs1MVviK3X0zwRixYl0fzo00wTDC4IRB1PCErMMRGx7LWhguvU6CTHRNxIJuuG2dtONcOfvee55jv4TfWVSfT7JL9f7Pr+7/L73e/6UYzAYDAaDwWAwGP95ytwTG80euQ1FtX/CQOTCw+yTO8xeWUVR6hstIXLhwYz82yibNi2f3vxo+dzmWstcg3gPkXX+yojZN7HG3CFbjL6xtRyn3kLkvKgqt0SNFq9Ro0UWJcRXqCGuGOn+UMOy3miTBUUg2vgQTr4J3TFHOc4POx4hEsclbTXPpKxiLGkTlZRNVGnA/eWkVXxzur6+FOWlG1n9mmw0e+I7TF75EtVIXDF55K7sjimn+XI1wg8qYX4erioNuFeUCH8OTL0UlByRnqhL7ZGc13vPNFeSR3PYF2q5ozvq/E3LdR3GYsomvKcXbhXHUOFJa+3LcN+btAmX8JhVuIA6lG7E7I1/B6GYvPGTcN1t8sR3gbGjMLaIxz3xH7QOQRdChkolYpjEhUf4lBI2HIDwgYlO0EeoqVmp5AQuLr3APHRLLj813CM5qrk5m9hCTUBHgqqfW0JyMZMO8XYw8zU2aROG041A4QtGT6KZpOoYvWMiGJvFOd74GLdtcCkUvA/iKjKjRIs2kFQdMOWnZj6N1Eq0yEDYVUVSdLK6cQSLUNxJXKRV/FndVp33XEjaBRs1W/fK50FqBKKPpOQA3fDpeb54C5Ez0NYKV4pCCRc/QY38ElkZwF8aCoWCB0i6Dmi79W6caVqHRejCJCnyIqyHQL6AadVHjTzXeuj4jQLH6/FL8nCXO1FO86Bz/UhDnYBp1aWGDWE6zfIF5OyBYj/M15W90aZS0Kc1k65PiIw7co0W+U+itfXACd1I++gq8pq8gIHfUV6Zb/xjKC6IFjUuNMwvwv15mE4HwdAHWvCHdSNhfm9PZOv9YGIhuyvdkrMTa5JL6ZYc64mMF/pVrUhhAO1MfxdrPd/sokbQWiCvyWHVjgtmmvfGfvdw2tc+pnxxm5Gk6SiS4YF0I0iDYvv1rsB2HDy7ZSVoM5oR5zH8IAXWxgg2AlNMcVTwRM5gxibcic8ViAr3OT8tELbdAEnJAbrxKs07P1RzXC/ydPF9JCUDtPVmG3nnq61GmD4pUvhR+L1H70bMtRE/SEnZhUY6bWCa7c/etdRmy63QLYmMz1e3xzp1Ix55zuxOPE5SdUwdCQF2rRli9vs/vlyx80aRRU+TNB10KML0upxtBNETdb5Fu0JNgTZEhjNJWoW3dTNW8Vsw1wHFPw+LfCeM/Uj069C1FzO2X698Ea6LYGgAYrvJm3DDdnsEadp4fOput7weTSUo9FdSJKwPw/tKqOhZuH8B1kk/aDMw5cbgig/KdCOBU/YS6MCUZkDrBjrNyXAuc1bhKSg4ArtU5sluFRfQFj1rr2lAeWlGUms65FK49tGvTwN3yisfLGtP3ItfDqBTHQocQkbolydFT4GJd9VTXAkY/CnbCALOitepEYjPiHxzrjQ0rJi111bN24S62S2WSjS1yBAGndRlbtlu9CWeJBL6k7TMuH18HZpmq73xh7m20SIykoNyllsOXaiCc6MOL/BBbikZ4pRI8WNqiLejqUYkDFrY1EhXzFlD5MIC7Vb44ENGJNcwkQsPWBMf0W6AkVoiFxbobzoYuKYZcY4QufAIRps2wA7VhqIr1vggkRkMBoPBYDAYjP81HPcnj/EXmUZnvboAAAAASUVORK5CYII='>
                          </a>

                          <a data-toggle="tooltip" data-placement="top" target='_blank' title="Buscar en Google" class="btn btn-danger btn-lg <?php echo $aRealizado ?>" href="https://www.google.com.do/search?q=<?php echo $data['barcode'];?>">
                              <i style="color:#fff" class="fa fa-fw fa-google"></i>
                          </a>
                          <a href="#" onclick="chgPendiente(<?php echo $data["id_producto"]; ?>, '<?php echo $data["seccion"]; ?>')" style="font-size:15px"> Pendiente</a>
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
