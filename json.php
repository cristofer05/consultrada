<?php
header("Content-Type: application/json; charset=UTF-8");
$data = file_get_contents("https://api.upcitemdb.com/prod/trial/lookup?upc=887276116082");
$obj = json_decode($data);
echo "Nombre: ".$obj->title."<br>";
echo "Brand: ".$obj->brand."<br>";
echo "Link: ".$obj->link."<br>";
echo "Imagen: ".$obj->image[0]."<br>";
?>
<img src="<?php echo $obj->image[0];?>">
