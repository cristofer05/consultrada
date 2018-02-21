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
                  <h3 class="box-title">CREO MAS HOY</h3>

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
                  <h3 class="box-title">CREO MAS MES</h3>

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
                  <h3 class="box-title">MONTRO de Año</h3>

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

<?php
function get_storers(){
  global $mysqli;
	$query = mysqli_query($mysqli, "SELECT * FROM `usuarios` WHERE status='activo' AND permisos_acceso='Super Admin'");
	$datas  = mysqli_fetch_array($query);
	return $datas;
}
$storers = get_storers();
$colors = ['#FE2E2E','#C8FE2E','#2E9AFE','#FE9A2E','#AC58FA','#2EFEC8','#80FF00','#F4FA58','#0040FF'];




 ?>
  <script>
var ctx = document.getElementById("creomashoy").getContext('2d');
var pieChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Gary", "Piri", "Mario", "Fidel", "Jose"],
        datasets: [{
            label: '# of Entries',
            data: [12, 19, 3, 5, 2],
            backgroundColor: [
                'pink',
                'blue',
                'red',
                'purple',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
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
        labels: ["Gary", "Piri", "Mario", "Fidel", "Jose"],
        datasets: [{
            label: '# of Entries',
            data: [12, 19, 3, 5, 2],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    }
});

var ct3 = document.getElementById("creomasmes").getContext('2d');
var pieChart3 = new Chart(ct3, {
    type: 'doughnut',
    data: {
        labels: ["Gary", "Piri", "Mario", "Fidel", "Jose"],
        datasets: [{
            label: '# of Entries',
            data: [12, 19, 3, 5, 2],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    }
});

var ct4 = document.getElementById("sumomasmes").getContext('2d');
var pieChart4 = new Chart(ct4, {
    type: 'pie',
    data: {
        labels: ["Gary", "Piri", "Mario", "Fidel", "Jose"],
        datasets: [{
            label: '# of Entries',
            data: [12, 19, 3, 5, 2],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    }
});






</script>
<?php
    $resulta2= get_total_log(1,'cantidad');
    echo $resulta2['numero']
?>
