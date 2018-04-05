<?php
$categories="Condicion de Articulo/";
$description_condition="";
$short_description="";

if ($data['condicion']=='NEW') {
  $categories=$categories.'New';
  $short_description="New Condition";
  $description_condition="NEW";
}
elseif ($data['condicion']=='O') {
  $categories=$categories.'New Other (Completo)';
  $short_description="Open Box like new Condition";
  $description_condition=$short_description;
}
elseif ($data['condicion']=='GA') {
  $categories=$categories.'Used excellent';
  $short_description="Used item grade A condition - may show minimal signs of used fully tested";
  $description_condition=$short_description;
}
elseif ($data['condicion']=='GB') {
  $categories=$categories.'Used excellent';
  $short_description="Used item grade B condition - May show light to moderate signs of used including scuff and scratches from normal use, item is fully functional";
  $description_condition=$short_description;
}
elseif ($data['condicion']=='GC') {
  $categories=$categories.'Used excellent';
  $short_description="Used item grade C condition - may show moderate to heavy signs of used may include dings and deep scratches, damaged will not affect functionality";
  $description_condition=$short_description;
}
elseif ($data['condicion']=='RE') {
  $categories=$categories.'Refurbished';
  $short_description="Refurbished Condition";
  $description_condition=$short_description;
}

$cadena = $data['missing'];
$array = explode(" ", $cadena);
$noMissing = (count($array))-1;

$b="Original Box";
$m="Manual";
$w="Wallmount";
$by="Batteries";
$ch="Charger";
$rc="Remote Control";
$ink="Ink Cartridge";
$other="Others Accessories";


$x=1;
$i=0;
while ($x <= $noMissing) {

  if ($array[$i]=="B") {
    $array[$i]=$b;
  }elseif ($array[$i]=="M") {
    $array[$i]=$m;
  }elseif ($array[$i]=="W") {
    $array[$i]=$w;
  }elseif ($array[$i]=="BY") {
    $array[$i]=$by;
  }elseif ($array[$i]=="CH") {
    $array[$i]=$ch;
  }elseif ($array[$i]=="RC") {
    $array[$i]=$rc;
  }elseif ($array[$i]=="INK") {
    $array[$i]=$ink;
  }elseif ($array[$i]=="missing-otro") {
    $array[$i]=$other;
  }

  if ($i==0) {
    $description=$array[$i];
  }else {
    if ($x == $noMissing) {
      $description=$description." and ".$array[$i];
    }else {
      $description=$description.", ".$array[$i];
    }
  }

  $x++;
  $i++;
}

if ($noMissing > 1) {
  $description_condition=$description_condition." - ".$description." are NOT included";
  $short_description=$description_condition;

}elseif ($noMissing == 1) {
  $description_condition=$description_condition." - ".$description." NOT included";
  $short_description=$description_condition;
}


?>
