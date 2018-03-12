<?php
//include "modules/lista_socios/csv.php";
?>
<section class="content-header">
  <h1>
    <i class="fa fa-file-text-o icon-title"></i> Lista de cortes

    <a class="btn btn-primary btn-social pull-right pdf-button" href="modules/lista_socios/print.php" target="_blank">
      <i class="fa fa-print"></i> Imprimir PDF
    </a>

    <a class="btn btn-success btn-social pull-right" href="modules/lista_socios/csv.php?print_csv=si">
      <i class="fa fa-file-text-o"></i> Imprimir CSV
    </a>
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body">

          <table id="dataTables1" class="table table-bordered table-striped table-hover">

            <thead>
              <tr>
                <th class="center">ID</th>
                <th class="center">Corte</th>
                <th class="center">Fecha</th>
                <th class="center">Qty Productos</th>
                <th class="center">Estado</th>
              </tr>
            </thead>

            <tbody>
            <?php
            $no = 1;

            $query = mysqli_query($mysqli, "SELECT * FROM cortes ORDER BY id_corte DESC")
                                            or die('Error: '.mysqli_error($mysqli));


            while ($data = mysqli_fetch_assoc($query)) {

              echo "<tr>
                      <td width='10' class='center'>$data[id_corte]</td>
                      <td width='150' class='center'>$data[nombre_corte]</td>
                      <td width='200'>$data[fecha]</td>
                      <td width='180'>$data[num_productos]</td>
                      <td width='20'>$data[estado]</td>
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
