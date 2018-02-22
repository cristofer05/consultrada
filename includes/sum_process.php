<?php
if (isset($_POST['mod_id']) && $_POST['mod_id'] !=NULL) {
  if (!is_numeric($_POST['mod_qty'])) {
      $errors[] = "El campo cantidad estaba vacio";
  } if (empty($_POST['mod_ubi'])) {
     $errors[] = "El campo ubicación estaba vacio";
  } else if (
    is_numeric($_POST['mod_qty']) &&
    !empty($_POST['mod_ubi'])
  ){
      $id_producto=$_POST['mod_id'];
      $qty=intval($_POST['mod_qty']);
      $ubicacion=mysqli_real_escape_string($mysqli,(strip_tags($_POST["mod_ubi"],ENT_QUOTES)));
      $date_added=date("Y-m-d H:i:s");
      $edicion=edicion($id_producto,$qty,$ubicacion);

      $sql="UPDATE productos SET qty_total=qty_total+".$qty.", ubicacion='".$ubicacion."' WHERE id_producto='".$id_producto."'";
      $query_update = mysqli_query($mysqli,$sql);

      if ($query_update){
        $messages[] = "Producto ha sido actualizado satisfactoriamente.";
        $user_id=$_SESSION['id_user'];
        $firstname=$_SESSION['name_user'];
        $nota="Articulo editado";
        $qty_total=get_qty_total('productos','qty_total', 'id_producto', $id_producto);
        guardar_historial($id_producto,$user_id,$date_added,$nota,$qty,$edicion,$ubicacion,$qty_total);
      } else{
        $errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
      }
  } else {
    $errors []= "Error desconocido.";
  }
}
if (isset($errors)){
  ?>  <script> window.location.replace("main.php?module=consultrada&errors=<?php echo $errors [0]; ?>"); </script> <?php
//  header ("Location: main.php?module=consultrada?errors=".$errors);
} else if (isset($messages)) {
?>  <script> window.location.replace("main.php?module=consultrada&messages=<?php echo $messages[0]; ?>"); </script> <?php
//  header ("Location: main.php?module=consultrada?messages=1");
}
?>
