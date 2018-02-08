<?php
require_once "../config/database.php";

$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';

if($action == 'ajax'){
	if (strlen($_REQUEST['q']) > 0 ) {



		// escaping, additionally removing everything that could be (html/javascript-) code
         $q = mysqli_real_escape_string($mysqli,(strip_tags($_REQUEST['q'], ENT_QUOTES)));

         $query = mysqli_query($mysqli, "SELECT id_producto,nu_foto,qty_total,barcode_final,comentario,imagen,nombre_producto,ubicacion FROM productos WHERE barcode_final LIKE '%".$q."%' ORDER BY nu_foto DESC")
                                            or die('error: '.mysqli_error($mysqli));


//		include 'pagination.php'; //include pagination file
		//pagination variables
//		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
//		$per_page = 18; //how much records you want to show
//		$adjacents  = 4; //gap between pages after number of adjacents
//		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM productos WHERE barcode_final LIKE '%".$q."%'");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
/*		$total_pages = ceil($numrows/$per_page);
		$reload = './productos.php'; */
		//main query to fetch the data
//		$sql="SELECT * FROM  $sTable $sWhere LIMIT $offset,$per_page";
//		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){
			?>
      <input type="hidden" id="value_q" value="<?php echo $q; ?>">
			<div class="limiter">
              <div class="container-table100">
                <div class="wrap-table100">
                  <div class="table100">
                  <span>Total de <?php echo $numrows; ?> Resultados</span>
                    <table>
                      <thead>
                        <tr class="table100-head">
                          <th class="column1">#</th>
                          <th class="column2">Foto</th>
                          <th class="column3">Barcode</th>
                          <th class="column4">Nombre</th>
                          <th class="column5">Comentario</th>
                          <th class="column6">Ubicacion</th>
                          <th class="column7">Accion</th>
                        </tr>
                      </thead>
                      <tbody>

			<?php
				$no=1;
				while ($data = mysqli_fetch_assoc($query)) {
            echo "<tr>

                      <td class='column1'>$no</td>
                      <td class='column2'><spam class='nufoto'>$data[nu_foto]</spam></td>
                      <td class='column3'>$data[barcode_final]</td>
                      <td class='column4'>$data[nombre_producto]</td>
                      <td class='column5'>$data[comentario]</td>
                      <td class='column6'>$data[ubicacion]</td>
                      <td class='column7'>
                        <div>
                          <a data-toggle='tooltip' data-placement='top' title='Ver articulo' style='margin-right:5px' class='btn btn-primary btn-sm' href='main.php?module=detalles&id=$data[id_producto]'>
                                    <i style='color:#fff' class='glyphicon glyphicon-eye-open'> DETALLES</i>
                                </a>

													<a title='Sumar y Revivir' class='btn btn-primary btn-sm openBtn_$data[id_producto]'>
													<i style='color:#fff' class='glyphicon glyphicon-edit'> ENTRADA</i></a>
                          ";

              echo "    </div>
                      </td>
                    </tr>
                    <script>
                      $('.openBtn_$data[id_producto]').on('click',function(){
                          $('.modal-body-sum').load('modal/suma.php?id=$data[id_producto]',function(){
                              $('#sumar').modal({show:true});
                          });
                      });
                    </script>
                    ";
              $no++;
            }
            ?>
            		</tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
				<div class="clearfix"></div>
				<div class='row text-center'>
					<div ><?php
				//	 echo paginate($reload, $page, $total_pages, $adjacents);
					?></div>
				</div>

			<?php
		} elseif ($numrows<1) {
		?>
      <input type='hidden' id='value_q2' value='<?php echo $q; ?>'>
			<script>
				document.getElementById("botonEntrada").innerHTML = "<a data-toggle='modal' data-target='#Entrada'  title='Dar Entrada' class='btn btn-primary btn-sm' href='' ><i style='color:#fff' class='glyphicon glyphicon-edit'> ENTRADA</i></a>";
			</script>

		<?php
		}
	}elseif (strlen($_REQUEST['q']) < 1 ) {

    $query_id = mysqli_query($mysqli, "SELECT RIGHT(barcode_final,10) as barcode FROM productos WHERE barcode = 'Does not apply' ORDER BY id_producto DESC LIMIT 1") or die('error '.mysqli_error($mysqli));

    $count = mysqli_num_rows($query_id);
    if ($count <> 0) {
        $data_id = mysqli_fetch_assoc($query_id);
        $barcode = $data_id['barcode']+1;
    } else {
        $barcode = "0";
    }
    $buat_id   = str_pad($barcode, 10, "0", STR_PAD_LEFT);
    $barcode = "LC$buat_id";
    ?>
    <input type='hidden' id='value_q3' value='<?php echo $barcode; ?>'>
    <?php
  }
}

?>
