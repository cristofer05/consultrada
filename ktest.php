<?php
include("mage.php");

$retour = $api->get("stockStatuses/888182998397");
$re = $api->get("stockItems/888182998397 ");
//print_r($retour);

echo "-----------------------------------------------------";

//echo $retour->qty;
echo "-----------------------------------------------------";
print_r($re);

echo "-----------------------------------------------------<pre>";
if (property_exists($re,"message")) {
  echo "ERROR PROPDUCTO NO ENCONTRADO";
}else{echo "SI EXISTE";}
//echo $re->message;
//Galeria de fotos
//echo $re->media_gallery_entries[0]->file;
//echo $re->media_gallery_entries[1]->file;

//print_r($re);

echo "------------------------------------------------</pre>";

$datos = array(
  "product" => array(
      'custom_attributes'  => array(
        'warehouse_location' => 'A32'
      ),
  ));
// $retour = $api->put("products/793795526212 O",$datos);

?>


<!--

793795526212 O precio 63.99
<?php
if ($data['realizado'] == "SI"){
  $sku= get_magento($data['barcode_final']);

    if (gettype($sku) == "object"){
      echo "<img src='http://lordcomputer.com/pub/media/catalog/product".
      $sku->media_gallery_entries[0]->file."'class='rounded img-thumbnail' alt='Imagen'>";

      echo "<a href='http://lordcomputer.com/".
      $sku->custom_attributes[5]->value.".html' > Ver </a>";
    }else{
       echo "<img src='images/productos/no-foto.png' class='rounded img-thumbnail' alt='Imagen' width='100%'>";
       echo "<br /><br /><div class='alert alert-danger alert-dismissible'>
         <button type='button' class='close data-dismiss='alert' aria-hidden='true'>×</button>
         <h4><i class='icon fa fa-ban'></i> Alert!</h4>
         <p>Revisar: Barcode no coincide en Magento</p>
       </div>";
     }
 }else{
    echo "<img src='images/productos/no-foto.png' class='rounded img-thumbnail' alt='Imagen' width='100%'>";
  }
 ?> -->
