<?php

require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World test!');

 $filename="test.pdf";
//Output the document
$dir = "/teste/"; // full path like C:/xampp/htdocs/file/file/
$pdf->Output($filename,'F');
?>