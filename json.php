<?php
// header("Content-Type: application/json; charset=UTF-8");
if (isset($_POST['barcode'])) {

$data = file_get_contents("https://api.upcitemdb.com/prod/trial/lookup?upc=".$_POST['barcode']);
$obj = json_decode($data, true);

echo $obj['items'][0]['title'];
// $imagen = $obj['items'][0]['images'][0];
}
?>
