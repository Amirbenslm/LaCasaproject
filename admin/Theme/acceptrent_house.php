<?php
//include "header.php";
include "C:/wamp64/www/La Casa/php/db.php";
require('fpdf18/fpdf.php');
if(isset($_GET['id']))
{$pdf = new FPDF();
$mysqli->query("update rent set status =1 where id =".$_GET['id']);	
$resultat=$mysqli ->query("select * from rent where id=".$_GET['id']);
while($donnes=mysqli_fetch_assoc($resultat))
{

$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Text(60,30,"House Reservation");
$pdf->Text(20,50,'First Name :  '.$donnes['firstname']);
$pdf->Text(20,70,'Family Name :  '.$donnes['familyname']);
$pdf->Text(20,90,'Check In : '.$donnes['checkin']);
$pdf->Text(20,110,'Check Out : '.$donnes['checkout']);
$pdf->Text(20,130,'Address : '.$donnes['address']);

/*$pdf->Cell(80,20,'House Reservation');
$pdf->Cell(10,10,"First Name :".$donnes['firstname']);
$pdf->Cell(20,20,"Family Name :".$donnes['familyname']);
$pdf->Cell(20,30,"Check In :".$donnes['checkin']);
$pdf->Cell(20,40,"Check Out :".$donnes['checkout']);
$pdf->Cell(20,50,"Address :".$donnes['address']);
*/

 $filename=date('d-m-Y')."-ID".$_GET['id'].".pdf";

$dir = "rentpdf/".$filename; 
$pdf->Output($dir,'F');
}
header('Location: rent.php');
}


?>
