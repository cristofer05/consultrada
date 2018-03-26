<?php
require_once ("../config/database.php");//Contiene funcion que conecta a la base de datos

if (isset($_GET['limpiar']) && $_GET['limpiar'] =='si') {

      $sql="UPDATE productos SET seccion='none' WHERE seccion='sumar' AND realizado='SI'";
      $query_update = mysqli_query($mysqli,$sql);

      if ($query_update) {
        $messages[] = "Limpieza realizada satisfactoriamente.";
        header("location: ../main.php?module=sumar&messages=$messages[0]");
      }


}

?>
