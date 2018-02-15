<?php
include("mage.php");



$retour = $api->get("products/888182998397 GA/media");
echo gettype($retour);
if (gettype($retour) == "object"){
  echo "<img src='images/productos/no-foto.png";
}else{
  echo "<img src='http://lordcomputer.com/pub/media/catalog/product".
   $retour[0]->file."' >";
}


?>
