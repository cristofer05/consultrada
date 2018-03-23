<!-- Content Header (Page header) -->
<!-- EJEMPLO DE INPUT FORM CON CALENDARIO
<div class="col-sm-4">
  <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tgl_awal" autocomplete="off">
</div>
-->
<?php
//NOMBRE E ID DE ULTIMO CORTE
  $sql="SELECT id_corte, nombre_corte from cortes ORDER BY id_corte DESC LIMIT 1";
  $query_corte = mysqli_query($mysqli,$sql);
  $datas = mysqli_fetch_assoc($query_corte);
  $nCorte=$datas['nombre_corte'];
  $idCorte=$datas['id_corte'];
//NOMBRE E ID DE ULTIMO CORTE
  $sql="SELECT COUNT(*) as total FROM productos WHERE id_corte=".$idCorte."";
  $result = mysqli_query($mysqli,$sql);
  $rows = mysqli_fetch_assoc($result);
  $numProductos=$rows['total'];
//  $numProductos=$result;
?>

<section class="content-header">
  <h1>
    <i class="fa fa-file-text-o icon-title"></i>Preparar Corte
  </h1>
  <ol class="breadcrumb">
    <li><a href="?module=start"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="active">cortes</li>
    <li class="active"> crear corte</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <!-- form start -->
        <!--
        <div class="tab">
          <button class="btn btn-primary active tablinks" onclick="cambiarTab(event, 'fecha')" active>FILTRAR POR FECHA</button>
          <button class="btn btn-primary tablinks" onclick="cambiarTab(event, 'nuevos')">NUEVOS SOCIOS</button>
          <button class="btn btn-primary tablinks" onclick="cambiarTab(event, 'expirar')">ESTATUS DE MEMBRESIA</button>
        </div>
      -->
        <!-- PRIMER TAB -->
        <div id="fecha" class="tabcontent" style="display: block;">
        <form role="form" class="form-horizontal" method="POST" action="modules/crear_corte/corte.php">
          <div class="box-body">
            <h3>A continuacion ingrese los datos relaciones al corte que esta preparando </h3>
            <hr>
            <div class="form-group">
              <label class="col-sm-2">Nombre del corte</label>
              <div class="col-sm-4">
                <input type="text" class="form-control " name="nombreCorte" value="<?php echo $nCorte;?>" autocomplete="off" readonly>
              </div>

              <label class="col-sm-2">Enlace para descargar fotos</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="enlaceCorte" autocomplete="off">
              </div>
            </div>
          </div>
          <input type="hidden" name="id_corte" value="<?php echo $idCorte; ?>">
          <input type="hidden" name="num_productos" value="<?php echo $numProductos; ?>">

          <div class="box-footer">
            <div class="form-group">
              <div class="col-lg-11">
                <button type="submit" class="btn btn-primary btn-social btn-submit" style="width: 300px; height:50px">
                  <i class="fa fa-print"></i> PREPARAR CORTE
                </button>
              </div>
            </div>
          </div>
        </form>
        </div>
        <!-- SEGUNDO TAB -->
        <!--
        <div id="nuevos" class="tabcontent">
          <form role="form" class="form-horizontal" method="GET" action="modules/filtro_socios/print_nuevos.php" target="_blank">
          <div class="box-body">
            <h3>Selecciona el rango de los ultimos socios "Creados" que quieres mostrar</h3>
            <hr>
            <div class="form-group">
              <label class="col-sm-3 radio-inline">
                <input type="radio" name="rango" value="3dias" checked> Ultimos Tres Dias<br>
              </label>
              <label class="col-sm-3 radio-inline">
                <input type="radio" name="rango" value="semana"> Ultima Semana<br>
              </label>
              <label class="col-sm-3 radio-inline">
                <input type="radio" name="rango" value="mes"> Ultimo Mes<br>
              </label>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Formato de exportacion</label>
                <div class="col-sm-6">
                  <input type="radio" name="print" value="pdf" checked> PDF <br>
                  <input type="radio" name="print" value="csv"> CSV
              </div>
            </div>
          </div>

          <div class="box-footer">
            <div class="form-group">
              <div class="col-sm-offset-1 col-sm-11">
                <button type="submit" class="btn btn-primary btn-social btn-submit" style="width: 150px;">
                  <i class="fa fa-print"></i> Imprimir
                </button>
              </div>
            </div>
          </div>
        </form>
        </div>
      -->
        <!-- TERCER TAB -->
        <!--
        <div id="expirar" class="tabcontent">
          <form role="form" class="form-horizontal" method="GET" action="modules/filtro_socios/print_expirar.php" target="_blank">
          <div class="box-body">
           <h3>Selecciona el rango de los proximos socios a "Expirar" que quieres mostrar</h3>
            <hr>
            <div class="form-group">
              <label class="col-sm-3 radio-inline">
                <input type="radio" name="rango" value="3dias" checked> Proximos Tres Dias<br>
              </label>
              <label class="col-sm-3 radio-inline">
                <input type="radio" name="rango" value="semana" checked> Proxima Semana<br>
              </label>
              <label class="col-sm-3 radio-inline">
                <input type="radio" name="rango" value="mes" checked> Proximo Mes<br>
              </label>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Formato de exportacion</label>
                <div class="col-sm-6">
                  <input type="radio" name="print" value="pdf" checked> PDF <br>
                  <input type="radio" name="print" value="csv"> CSV
                </div>
              </div>
          </div>

          <div class="box-footer">
            <div class="form-group">
              <div class="col-sm-offset-1 col-sm-11">
                <button type="submit" class="btn btn-primary btn-social btn-submit" style="width: 150px;">
                  <i class="fa fa-print"></i> Imprimir
                </button>
              </div>
            </div>
          </div>
        -->
        </form>
        <!--
        </div>
        -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content -->
