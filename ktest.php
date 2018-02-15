<?php
include("mage.php");

$retour = $api->get("stockStatuses/888182998397");
$re = $api->get("products/888182998397");
//print_r($retour);

echo "-----------------------------------------------------";

echo $retour->qty;
echo "-----------------------------------------------------";
print_r($re);

echo "-----------------------------------------------------";

echo $re[1]->warehouse_location;



?>
