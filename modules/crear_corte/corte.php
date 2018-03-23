<?php
/* Connect To Database*/
require_once ("../../config/database.php");//Contiene funcion que conecta a la base de datos
include("../../funciones.php");
session_start();

if (isset($_POST['id_corte'])) {

  $nCorte=mysqli_real_escape_string($mysqli,(strip_tags($_POST["nombreCorte"],ENT_QUOTES)));
  $linkCorte=mysqli_real_escape_string($mysqli,(strip_tags($_POST["enlaceCorte"],ENT_QUOTES)));
  $idCorte=strval($_POST['id_corte']);
  $num_productos=strval($_POST['num_productos']);
  $estado="preparado";
  $date_updated=date("Y-m-d H:i:s");

  $sql="UPDATE cortes SET fecha='".$date_updated.", num_productos=".$num_productos.", fotos_link='".$linkCorte."', estado='".$estado."' WHERE id_corte='".$idCorte."'";
  $query_update = mysqli_query($mysqli,$sql);

    if ($query_update){
      $messages[] = "Corte preparado satisfactoriamente.";
      $id_corte=$idCorte;
      $qty_productos=$num_productos;
      $user_id=$_SESSION['id_user'];
      $firstname=$_SESSION['name_user'];
      $nota="Corte preparado";
      $edicion="corte";
    //  guardar_historial($id_corte,$user_id,$date_added,$nota,$edicion,$qty_productos);

      $nCorte=substr($nCorte,-4)+1;
      $nCorte   = str_pad($nCorte, 4, "0", STR_PAD_LEFT);
      $nCorte="Corte #$nCorte";
      $sql="INSERT INTO cortes (nombre_corte, fecha, num_productos, fotos_link, estado) VALUES ('$nCorte', '-', 0, '#', 'actual')";
      $query_new_insert = mysqli_query($mysqli,$sql);
  }

}

?>
