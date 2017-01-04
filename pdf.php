<?php
include("mpdf/mpdf.php");

ob_start();
include "pdfresume.php"; 
$template = ob_get_contents();
ob_end_clean();

$mpdf=new mPDF('','A4','','',32,25,27,25,16,13,'L'); 

$mpdf->WriteHTML($template);

$mpdf->Output();
?>