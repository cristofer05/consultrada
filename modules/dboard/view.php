  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-home icon-title"></i> Inicio
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=beranda"><i class="fa fa-home"></i> Inicio</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <p style="font-size:15px">
            <i class="icon fa fa-user"></i> Bienvenido <strong><?php echo $_SESSION['name_user']; ?></strong> a la aplicación de administracion de membresias.
          </p>
        </div>
      </div>
    </div>

    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-4 col-sm-6 col-xs-12">
        <!-- small box -->
        <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-green">
           <i class="glyphicon glyphicon-user"></i>
          </div>
        <div class="panel-value pull-right">
          <?php
          $query = mysqli_query($mysqli, "SELECT COUNT(id_user) as numero FROM usuarios")
                                          or die('Error'.mysqli_error($mysqli));
          $data = mysqli_fetch_assoc($query);
          ?>
          <h2 class="margin-top"> <?php echo $data['numero']; ?> </h2>
          <p class="text-muted">Usuarios</p>
        </div>
       </div>
      </div><!-- ./col -->

      <div class="col-lg-4 col-sm-6 col-xs-12">
        <!-- small box -->
        <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-red">
          <i class="glyphicon glyphicon-list"></i>
        </div>
        <div class="panel-value pull-right">
          <?php
          $query = mysqli_query($mysqli, "SELECT COUNT(id_corte) as numero FROM cortes")
                                          or die('Error'.mysqli_error($mysqli));
          $data = mysqli_fetch_assoc($query);
          ?>
          <h2 class="margin-top"> <?php echo $data['numero']; ?> </h2>
          <p class="text-muted">Cortes</p>
        </div>
       </div>
      </div><!-- ./col -->

      <div class="col-lg-4 col-sm-6 col-xs-12">
        <!-- small box -->
        <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-blue">
          <i class="glyphicon glyphicon-shopping-cart"></i>
        </div>
        <div class="panel-value pull-right">
          <?php
          $query = mysqli_query($mysqli, "SELECT COUNT(id_producto) as numero FROM productos")
                                          or die('Error'.mysqli_error($mysqli));
          $data = mysqli_fetch_assoc($query);
          ?>
          <h2 class="margin-top"> <?php echo $data['numero']; ?> </h2>
          <p class="text-muted">Productos</p>
        </div>
       </div>
      </div><!-- ./col -->

      <div class="col-lg-4 col-sm-6 col-xs-12">
        <!-- small box -->
        <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-yellow">
          <i class="glyphicon glyphicon-usd"></i>
        </div>
        <div class="panel-value pull-right">
          <?php
          $query = mysqli_query($mysqli, "SELECT COUNT(id_corte) as numero FROM cortes")
                                          or die('Error'.mysqli_error($mysqli));
          $data = mysqli_fetch_assoc($query);
          ?>
          <h2 class="margin-top"> <?php  echo $data['numero']; ?></h2>
          <p class="text-muted">Cortes</p>
        </div>
       </div>
      </div><!-- ./col -->
      <div class="col-lg-4 col-sm-6 col-xs-12">
        <!-- small box -->
        <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-orange">
          <i class="glyphicon glyphicon-usd"></i>
        </div>
        <div class="panel-value pull-right">
          <?php
      //    $query = mysqli_query($mysqli, "SELECT COUNT(id_malo) as numero FROM malos")
      //                                    or die('Error'.mysqli_error($mysqli));
      //    $data = mysqli_fetch_assoc($query);
          ?>
          <h2 class="margin-top"> <?php // echo $data['numero']; ?></h2>
          <p class="text-muted">Malos</p>
        </div>
       </div>
      </div><!-- ./col -->
      <div class="col-lg-4 col-sm-6 col-xs-12">
        <!-- small box -->
        <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-purple">
          <i class="glyphicon glyphicon-usd"></i>
        </div>
        <div class="panel-value pull-right">
          <?php
        //  $query = mysqli_query($mysqli, "SELECT COUNT(id_return) as numero FROM returns")
        //                                  or die('Error'.mysqli_error($mysqli));
        //  $data = mysqli_fetch_assoc($query);
          ?>
          <h2 class="margin-top"> <?php // echo $data['numero']; ?></h2>
          <p class="text-muted">Returns</p>
        </div>
       </div>
      </div><!-- ./col -->

    </div><!-- /.row -->
    <div class="row">
      <div class="col-lg-6 col-xs-12">
        <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">TODAY ENTRIES</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <canvas id="creomashoy" style="height: 403px; width: 807px;" width="807" height="403"></canvas>
                </div>
                <!-- /.box-body -->
              </div>

      </div>
      <div class="col-lg-6 col-xs-12">
        <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">LAST 30 DAYS </h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <canvas id="creomasmes" style="height: 403px; width: 807px;" width="807" height="403"></canvas>
                </div>
                <!-- /.box-body -->
              </div>

      </div>
      <div class="col-lg-6 col-xs-12">
        <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">SUMO MAS</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <canvas id="sumomasmes" style="height: 403px; width: 807px;" width="807" height="403"></canvas>
                </div>
                <!-- /.box-body -->
              </div>

      </div>
      <div class="col-lg-6 col-xs-12">

        <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">THIS YEAR</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <canvas id="loganual" style="height: 403px; width: 807px;" width="807" height="403"></canvas>
                </div>
                <!-- /.box-body -->
              </div>
      </div>
    </div>
  </section><!-- /.content -->
<script type="text/javascript">
  var users =[];
  var colors =[];
  var datahoy =[];
  var datames =[];
  var dataanual =[];
</script>
<?php
$fecha = DATE("Y-m-d");
$query = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE status='activo' AND permisos_acceso='Super Admin'");
$colors = ['#FE2E2E','#C8FE2E','#2E9AFE','#FE9A2E','#AC58FA','#2EFEC8','#80FF00','#F4FA58','#0040FF'];


 ?>





 <p id="demo"></p>
 <script type="text/javascript">
<?php

$i=0;
//Asignando Usuarios y Colores
while ($storers = mysqli_fetch_assoc($query)) {
  echo "users.push('".$storers['name_user']."');";
  $datos2 = get_total_log_hoy($storers['id_user']);
  $datos3 = get_total_log_mes($storers['id_user'],$fecha);


  echo "datahoy.push('".$datos2['numero']."');";
    echo "datames.push('".$datos3['numero']."');";
  echo "colors.push('".$colors[$i]."');";
  $i++;
}



?>




 document.getElementById("demo").innerHTML = datames;
 </script>


<?php


 ?>







<script>
var ctx = document.getElementById("creomashoy").getContext('2d');
var pieChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: users,
        datasets: [{
            label: '# of Entries',
            data: datahoy,
            backgroundColor: colors
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

var ct2 = document.getElementById("loganual").getContext('2d');
var pieChart2 = new Chart(ct2, {
    type: 'horizontalBar',
    data: {
        labels: users,
        datasets: [{
            label: '# of Entries',
            data: [12, 19, 3, 5, 2],
            backgroundColor: colors
        }]
    }
});

var ct3 = document.getElementById("creomasmes").getContext('2d');
var pieChart3 = new Chart(ct3, {
    type: 'doughnut',
    data: {
        labels:users,
        datasets: [{
            label: '# of Entries',
            data: datames,
            backgroundColor: colors
        }]
    }
});

var ct4 = document.getElementById("sumomasmes").getContext('2d');
var pieChart4 = new Chart(ct4, {
    type: 'pie',
    data: {
        labels:users,
        datasets: [{
            label: '# of Entries',
            data: [12, 19, 3, 5, 2],
            backgroundColor: colors
        }]
    }
});






</script>
<!-- <?php
    $resulta2= get_total_log(1,'cantidad');
    echo $resulta2['numero']
?> -->
