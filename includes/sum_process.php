<?php
if (isset($_POST['mod_id']) && $_POST['mod_id'] !=NULL) {
  if (empty($_POST['mod_qty'])) {
      $errors[] = "El campo cantidad estaba vacio";
  } else if (empty($_POST['mod_ubi'])) {
     $errors[] = "El campo ubicación estaba vacio";
  } else if (
    !empty($_POST['mod_qty']) &&
    !empty($_POST['mod_ubi'])
  ){
      $id_producto=$_POST['mod_id'];
      $qty=intval($_POST['mod_qty']);
      $ubicacion=mysqli_real_escape_string($mysqli,(strip_tags($_POST["mod_ubi"],ENT_QUOTES)));
      $referencia=strval("Editado");
      $date_added=date("Y-m-d H:i:s");

      $sql="UPDATE productos SET qty_total='".$qty."', ubicacion='".$ubicacion."' WHERE id_producto='".$id_producto."'";
      $query_update = mysqli_query($mysqli,$sql);

      if ($query_update){
        $messages[] = "Producto ha sido actualizado satisfactoriamente.";
        //$id_producto=get_row('productos','id_producto', 'barcode_final', $barcode_final);
        $user_id=$_SESSION['id_user'];
        $firstname=$_SESSION['name_user'];
        $nota="$firstname editó este producto";
        echo guardar_historial($id_producto,$user_id,$date_added,$nota,$referencia,$qty,$ubicacion);
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
