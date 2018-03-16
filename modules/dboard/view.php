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


      </div>

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

      <div class="col-lg-6 col-xs-12">

            <canvas id="line-chart" width="800" height="450"></canvas>

        </div>
      <div class="col-lg-3 col-sm-6 col-xs-12">
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

      <div class="col-lg-3 col-sm-6 col-xs-12">
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

      <div class="col-lg-3 col-sm-6 col-xs-12">
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

      <div class="col-lg-3 col-sm-6 col-xs-12">
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
      <div class="col-lg-3 col-sm-6 col-xs-12">
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
      <div class="col-lg-3 col-sm-6 col-xs-12">
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

      <div class="col-lg-6 col-xs-6">
        <h1><i class="fa fa-bar-chart icon-title"></i> Entries</h1>
                <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">TODAY</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <canvas id="hoy1" style="height: 403px; width: 807px;" width="807" height="403"></canvas>
                </div>
                <!-- /.box-body -->
              </div>

      </div>
      <div class="col-lg-3 col-xs-6">
        <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">LAST 7 DAYS </h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <canvas id="7dias" style="height: 403px; width: 807px;" width="807" height="403"></canvas>
                </div>
                <!-- /.box-body -->
              </div>

      </div>
      <div class="col-lg-3 col-xs-6">
        <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">LAST 30 DAYS</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <canvas id="30dias" style="height: 403px; width: 807px;" width="807" height="403"></canvas>
                </div>
                <!-- /.box-body -->
              </div>

      </div>
      <div class="col-lg-3 col-xs-6">

        <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Last 90 Days</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <canvas id="90dias" style="height: 403px; width: 807px;" width="807" height="403"></canvas>
                </div>
                <!-- /.box-body -->
              </div>
      </div>
      <div class="col-lg-3 col-xs-6">

        <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">LAST 365 DAYS</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <canvas id="365dias" style="height: 403px; width: 807px;" width="807" height="403"></canvas>
                </div>
                <!-- /.box-body -->
              </div>
      </div>
  </div>
  </section><!-- /.content -->
<script type="text/javascript">
  var users =[];
  var colors =[];
  var datadays_1 = [];
  var datadays_2 = [];
  var datadays_3 = [];
  var datadays_4 = [];
  var datadays_5 = [];
  var labels_f = [];
  var data_f = [20,35,66,98,50];

</script>
<?php
$fecha = DATE("Y-m-d");
$query = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE status='activo' AND permisos_acceso='Super Admin'");
$colors = ['#FE2E2E','#2E9AFE','#C8FE2E','#FE9A2E','#AC58FA','#2EFEC8','#80FF00','#F4FA58','#0040FF'];

 ?>


 <p id="demo"></p>
 <script type="text/javascript">
<?php

$i=0;
//Asignando Usuarios y Colores
while ($storers = mysqli_fetch_assoc($query)) {
    echo "users.push('".$storers['name_user']."');";

    //Grafico sumo mas Hoy
    $datos1 = get_total_log_hoy($storers['id_user']);
    //Grafico sumo mas Mes
    $datos2 = get_total_log_days($storers['id_user'],$fecha,'-7 day');
    //Grafico sumo mas Año
    $datos3 = get_total_log_days($storers['id_user'],$fecha,'-30 day');
  //  $datos3 = get_total_log_365($storers['id_user'],$fecha,'cantidad');
    //////////////////////////////////////

    //Grafico creo mas Mes
    $datos4 = get_total_log_days($storers['id_user'],$fecha,'-90 day');
    //Grafico creo mas Año
    $datos5 = get_total_log_days($storers['id_user'],$fecha,'-365 day');

    //$datos6 = get_total_log_everydays($fecha);

    echo "datadays_1.push('".$datos1['numero']."');";
    echo "datadays_2.push('".$datos2['numero']."');";
    echo "datadays_3.push('".$datos3['numero']."');";
    echo "datadays_4.push('".$datos4['numero']."');";
    echo "datadays_5.push('".$datos5['numero']."');";

    echo "colors.push('".$colors[$i]."');";
  $i++;
}
$a = 0;
    while ($a <= 30) {
        $res='-'.$a.' day';
       $datosf = get_total_log_everydays($fecha,$res);
        echo "labels_f.push('".date('Y-m-d',strtotime($res))."');";
      echo "data_f.push('".$datosf['numero']."');";
        $a++;
    }

?>
		var dt = new Date();;
		var labels = [dt];
    var Za = 0;
		while (Za < 10) {
				labels.push(td.setDate(dt.getDate() - 1));
        Za = Za + 1;
		}

 document.getElementById("demo").innerHTML = datames;
 </script>


<?php


?>


<script>
var ctx = document.getElementById("hoy1").getContext('2d');
var pieChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: users,
        datasets: [{
            label: '# of Entries',
            data: datadays_1,
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

var ct2 = document.getElementById("7dias").getContext('2d');
var pieChart2 = new Chart(ct2, {
    type: 'pie',
    data: {
        labels: users,
        datasets: [{
            label: '# of Entries',
            data: datadays_2,
            backgroundColor: colors
        }]
    }
});

var ct3 = document.getElementById("30dias").getContext('2d');
var pieChart3 = new Chart(ct3, {
    type: 'pie',
    data: {
        labels:users,
        datasets: [{
            label: '# of Entries',
            data: datadays_3,
            backgroundColor: colors
        }]
    }
});

var ctx4 = document.getElementById("90dias").getContext('2d');
var pieChart = new Chart(ctx4, {
    type: 'pie',
    data: {
        labels: users,
        datasets: [{
            label: '# of Entries',
            data: datadays_4,
            backgroundColor: colors
        }]
    }
});

var ct5 = document.getElementById("365dias").getContext('2d');
var pieChart2 = new Chart(ct5, {
    type: 'pie',
    data: {
        labels: users,
        datasets: [{
            label: '# of Entries',
            data: datadays_5,
            backgroundColor: colors
        }]
    }
});

new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: labels_f,
    datasets: [{
        data: data_f,
        label: "Work flow",
        borderColor: "#3e95cd",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'World population per region (in millions)'
    }
  }
});

</script>

<?php
echo $datos5["numero"];

 ?>
