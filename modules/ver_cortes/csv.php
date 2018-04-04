<?php
//include database configuration file
require_once "../../config/database.php";
include "../../config/fungsi_tanggal.php";
include "../../config/fungsi_rupiah.php";
$hari_ini = date("d-m-Y");

if (isset($_GET['print_csv']) && $_GET['print_csv'] =='si') {
    $id_corte=$_GET['id_corte'];
    $query = mysqli_query($mysqli, "SELECT id_producto,barcode,barcode_final,nombre_producto,condicion,ubicacion,nu_foto,comentario,qty_total FROM productos WHERE id_corte=$id_corte ORDER BY nu_foto DESC")
                                                                       or die('error: '.mysqli_error($mysqli));
    $count  = mysqli_num_rows($query);
  //  $no = 1;

    if($count > 0){
        $delimiter = ",";
        $filename = "Hoja_de_importacion_corte_" . date('Y-m-d') . ".csv";

        //create a file pointer
        $f = fopen('php://memory', 'w');

        //set column headers
        $fields = array('sku','qty', 'weight', 'categories', 'short_description', 'description', 'attribute_set_code','product_type','product_websites','product_online','additional_attributes','display_product_options_in','map_price','name','price','website_id','msrp_price','visibility','tax_class_name');
        fputcsv($f, $fields, $delimiter);

        //output each data of the data, format line as csv and write to file pointer
        while($data = mysqli_fetch_assoc($query)){

            //Variables con valores estaticos
          include 'includes/condiciones_csv.php';
            $description_condition="";
            $description='<div id="HtmlAreaEditor" style="display: none; color: white; font-size: 1px;"></div><table id="tprincipal" style="width: 100%;" border="0"><tbody><tr><td><div id="content_wrapper"><div id="content"><strong><span style="color: #333; font-size: large;">&nbsp;</span></strong></div><strong><span style="color: #333; font-size: large;">ITEM CONDITION</span></strong><div id="content"><div style="text-align: center;"><span style="font-size: medium; color: #ff0000;"><strong>&nbsp;</strong></span></div><table style="margin-left: auto; margin-right: auto; border-color: #00aee8; border-width: 2px; background-color: #ffffff; width: 90%; border-style: dotted;"><tbody><tr><td><div style="text-align: center;"><span style="font-size: medium; color: #ff0000;"><strong>'.$description_condition.'</strong></span></div><div style="text-align: center;"><span style="font-size: medium; color: #ff0000;"><strong>&nbsp;</strong></span></div><div style="text-align: center;"><span style="font-size: medium;"><strong>The item which is shown in the photos is the actual item. You will receive what you see in the pictures.</strong></span></div></td></tr></tbody></table><br /><span style="font-size: large;"><strong><span style="color: #333;">PRODUCT DESCRIPTION</span></strong></span><div id="content">&nbsp;</div></div><div>&nbsp;</div><div>----------</div><div>&nbsp;</div><div>----------</div><div>&nbsp;</div><div>----------</div><div><br /><div><div id="featurebullets_feature_div" class="feature" data-feature-name="featurebullets"><div id="feature-bullets" class="a-section a-spacing-medium a-spacing-top-small"><hr style="width: 5px; border-width: 1px; border-style: dotted; border-color: #CCCCCC; color: #ffffff;" /><hr style="height: 5px; width: 5px; border-width: 1px; border-style: dotted; border-color: #CCCCCC; color: #ffffff;" /><p>&nbsp;</p><p><img src="https://lordcomputer.com/images/ebaystore/lordcomputerconditionmeans3.jpg" alt="Conditions means" width="1024" height="464" /></p></div></tbody></table>';


            //escribiendo csv
            $lineData = array($data['sku'], $data['qty'], $data['weight'], $data['categories'], $data['short_description'], $data['description'], $data['attribute_set_code'], $data['product_type'], $data['product_websites'], $data['product_online'], $data['additional_attributes'], $data['display_product_options_in'], $data['map_price'], $data['name'], $data['price'], $data['website_id'], $data['msrp_price'], $data['visibility'], $data['tax_class_name']);
            fputcsv($f, $lineData, $delimiter);

            //  $no++;
        }

        //move back to beginning of file
        fseek($f, 0);

        //set headers to download file rather than displayed
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '";');

        //output all remaining data on a file pointer
        fpassthru($f);
    }
    exit;
}
?>
