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
  </section><!-- /.content -->
