<?php
//include "header.php";
include "C:/wamp64/www/La Casa/php/db.php";
require('fpdf18/fpdf.php');
if(isset($_GET['id']))
{$pdf = new FPDF();
$mysqli->query("update buying set status =1 where id =".$_GET['id']);	
header('Location: buying_table.php');
}