<?php
/**
 * HTML2PDF Library - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @package   Html2pdf
 * @author    Laurent MINGUET <webmaster@html2pdf.fr>
 * @copyright 2016 Laurent MINGUET
 */

if (isset($_SERVER['REQUEST_URI'])) {
    $generate = isset($_GET['make_pdf']);
    $bcode= isset($_GET['bcode']) ? $_GET['bcode'] : 'SIN BCODE';
	
	$ent= isset($_GET['ent']) ? $_GET['ent'] : ' ';
	$coment= isset($_GET['coment']) ? $_GET['coment'] : ' ';
	$location= isset($_GET['location']) ? $_GET['location'] : ' ';
	$pic= isset($_GET['pic']) ? $_GET['pic'] : ' ';
    $fecha= date("d-m-Y H:i:s");
    $qty= isset($_GET['qty']) ? $_GET['qty'] : 1;

	
   // $code = isset($_GET['nom']) ? $_GET['nom'] : 'Nada';
   // $ready = "<object data='Code128/code128example.php?code=$code' type='image/svg+xml' ></object>";
   // $ready="hola";
    $url = dirname($_SERVER['REQUEST_URI']);
    if (substr($url, 0, 7)!=='http://') {
        $url = 'http://'.$_SERVER['HTTP_HOST'].$url;
    }
} else {
    $generate = true;
    $nom = 'spipu';
    $url = 'http://localhost/html2pdf/examples/';
}

//$nom = substr(preg_replace('/[^a-zA-Z0-9]/isU', '', $nom), 0, 26);
$url.= '/res/exemple09.png.php?px=5&amp;py=20';


if ($generate) {
    ob_start();
} else {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        <title>Exemple d'auto génération de PDF</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
	<body style="margin: 0px; padding: 0px;">
    <page backtop="0mm" backbottom="0mm" backleft="0mm" backright="0mm">
<?php
}
?>

<?php
    if ($generate) {

 //   $nom = urldecode($nom);
?>
    <?php 

    for($i = 0; $i < $qty; $i++){ 
    ?>

		<div class="contenedor" style="width: 325px; height: 86px; margin-left: 6px; padding: 0px; margin-top: 2px;">
			<div class="barcode" style="width: 250px; height: 50px;	float: left; margin-right: 0px; padding-left:0px">
				<barcode type="C128A" value="<?php echo strtoupper($bcode); ?>" style="color: #000; width: 250px;" ></barcode>
			</div>
			<div class="ubicacion" style="width: 50px; position: absolute; height: 50px; left: 255px; top: 0px; float: left; text-align: center; margin-left: 0px; padding: 0;">
				<p id="ubi" style="margin: 2px 0 -20px 0; font-weight: bold; font-size: 25px;"><u><?php echo strtoupper($location)?></u></p>
				<p id="ubitext" style="margin: 22px 0 0 -2px; font-size: 10px;">LOCATION</p>
			</div>
			<div id="linea" style="clear: both; width: 300px; float:left; padding:0px; margin:0px; top:53px; position:absolute; display: block;"> 
				<table border="0px" style=" padding:0px; margin:0px; width: 280px;" >
					<tr>
						<td><p style="padding:0px; margin:0px; float:left;"><u><?php echo strtoupper($ent)?></u></p></td>
						<td style="width: 270px "><hr style="padding:0px; margin:0px; width: 290px height: 1px;"/></td>
					</tr>
				</table>
			</div>
			<div id="2linea" style="clear: both; width: 320px; float:left; padding:0px; margin:0px; top:65px; position:absolute; display: block; overflow:hideen;"> 
				<table border="0px" style=" padding:0px; margin:0px; width: 280px;" >
					<tr>
						<td style="width: 250px; height:30px">
							<p style="padding:0px; margin:0px; float:left; text-align:center; word-wrap: break-word; word-break: break-all;"><?php echo($coment)?></p>
							<p style="padding:0px; margin:0px; float:left; text-align:center; font-size:8px;"><?php echo($fecha) ?></p>
						</td>
						<td style="width: 70px;"><p style="padding:0px; margin:0px; float:left; text-align:center; font-size:17px"><u><?php echo strtoupper($pic)?></u></p><p style="padding:0px; margin:0px; float:left; text-align:center;">PIC</p></td>
					</tr>
				</table>
			</div>
		</div>
    <?php 
    }
    ?>
<!-- -->
<?php
    }
?>
<br>
<?php
    if ($generate) {
        $content = ob_get_clean();
        require_once($_SERVER['DOCUMENT_ROOT'].'/pdf/vendor/autoload.php');
        try
        {
            $html2pdf = new HTML2PDF('L', 'A10', 'en',false, 'ISO-8859-15',array(0, 0, 0, 0));
            $html2pdf->writeHTML($content);
			$html2pdf->pdf->IncludeJS("print(true);");
            $html2pdf->Output('exemple09.pdf');
            exit;
        }
        catch(HTML2PDF_exception $e) {
            echo $e;
            exit;
        }
    }
?>
	</page>
    </body>
</html>
