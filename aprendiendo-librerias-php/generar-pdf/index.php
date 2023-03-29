<?php

require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();


//RECOGER LA VISTA A IMPRIMIR
ob_start();
require('pdf_paragenerar.php');
$html = ob_get_clean();


//PASARLO A PDF
$html2pdf->writeHTML($html);
$html2pdf->output('pdf_generado.pdf');






?>