<?php
session_start();
require_once "../config/database.php";
include("../funciones.php");

if (!empty($_POST['action'])) {
    $id_producto=$_POST['id'];
    $seccion=$_POST['seccion'];
    if ($seccion == "pendiente") {
      $newRealizado="publicar";
      $nota="Marcado como 'publicar'";
      $edicion="publicar";
    }else {
      $newRealizado="pendiente";
      $nota="Marcado como 'pendiente'";
      $edicion="pendiente";
    }

    $sql="UPDATE productos SET seccion='".$newRealizado."' WHERE id_producto=".$id_producto;
  	$query=mysqli_query($mysqli,$sql);


    if ($query){
      $qty=0;
      $ubicacion=get_row('productos','ubicacion', 'id_producto', $id_producto);
      $user_id=$_SESSION['id_user'];
      $firstname=$_SESSION['name_user'];
      date_default_timezone_set('America/Santo_Domingo');
  		$date_added=date("Y-m-d H:i:s");
      /*
      $edicion=edicion($id_producto,$qty,$ubicacion,$realizado);
      if ($seccion==2 && $edicion=="Publicado") {
        $edicion="Sumado";
      }elseif ($seccion==2 && $edicion=="Despublicado") {
        $edicion="No Sumado";
      }
      */
      $qty_total=get_row('productos','qty_total', 'id_producto', $id_producto);
      guardar_historial($id_producto,$user_id,$date_added,$nota,$qty,$edicion,$ubicacion,$qty_total);

    }

  	return $query;
}

?>
