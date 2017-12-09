
<?php

$p = PDF_new();

/*  ouvre un nouveau fichier PDF ; insère un nom de fichier pour créer le PDF sur le disque */
if (PDF_begin_document($p, "", "") == 0) {
    die("Error: " . PDF_get_errmsg($p));
}

PDF_set_info($p, "Creator", "hello.php");
PDF_set_info($p, "Author", "Rainer Schaaf");
PDF_set_info($p, "Title", "Bonjour le monde (PHP)!");

PDF_begin_page_ext($p, 595, 842, "");

$font = PDF_load_font($p, "Helvetica-Bold", "winansi", "");

PDF_setfont($p, $font, 24.0);
PDF_set_text_pos($p, 50, 700);
PDF_show($p, "Hello world!");
PDF_continue_text($p, "(dit PHP)");
PDF_end_page_ext($p, "");

PDF_end_document($p, "");

$buf = PDF_get_buffer($p);
$len = strlen($buf);

header("Content-type: application/pdf");
header("Content-Length: $len");
header("Content-Disposition: inline; filename=hello.pdf");
print $buf;

PDF_delete($p);
?>




/*define("FPDF_FONTPATH","C:\wamp64\www\La Casa\php\uploads"); 
//lien vers le dossier " font " 
require("C:\wamp64\www\La Casa\php\docpdf/fpdf.php"); 
//lien vers le fichier contenant la classe FPDF

$pdf = new FPDF("P","pt","A4"); 
//création d'une instance de classe, P pour portrait
// pt pour point en unité de mesure, A4 pour le format
$pdf ->Open(); //indique que l'on crée un fichier PDF
$pdf ->AddPage(); //permet d'ajouter une page
$pdf ->SetFont('Helvetica','B',11); //choix de la police
$pdf ->SetXY(330, 25); // indique des coordonnées pour 
//placer un élément
$pdf ->Cell(190,50,"texte dans le cadre",0,0, "L"); 
//création d'une cellule
$pdf ->Text(498,20, "texte"); //insertion d'une ligne de texte
$pdf ->Output(); //génère le PDF et l'affiche	

?>*/