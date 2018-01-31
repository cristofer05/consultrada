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
                          <th class="column5">Nombre</th>
                          <th class="column6">Comentario</th>
                          <th class="column7">Ubicacion</th>
                          <th class="column8">Realizado</th>
                          <th class="column8">Accion</th>
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
                      <td class='column7'><input class='input-toggle' type='checkbox'></td>
                      <td class='column8'>
                        <div>
                          <a data-toggle='tooltip' data-placement='top' title='Ver articulo' style='margin-right:5px' class='btn btn-primary btn-sm' href='https://www.amazon.com/s/?url=search-alias%3Daps&field-keywords='>
                                    <i style='color:#fff' class='glyphicon glyphicon-eye-open'> VER</i>
                                </a>

                           <a data-toggle='tooltip' data-placement='top' target='_blank' title='Dar Entrada' class='btn btn-primary btn-sm' href='https://www.ebay.com/sch/i.html?LH_BIN=1&_nkw='>
                                    <i style='color:#fff' class='glyphicon glyphicon-edit'> ENTRADA</i>
                                </a>";
           
              echo "    </div>
                      </td>
                    </tr>";
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
		} else {
		?>
			<a data-toggle="modal" data-target="#Entrada"  title='Dar Entrada' class='btn btn-primary btn-sm' href=''>
				<i style='color:#fff' class='glyphicon glyphicon-edit'> ENTRADA</i>
	        </a>
		<?php
		}
	}
}

?>