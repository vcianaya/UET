<?php

include("../../libraries/tcpdf/font/times.php"); //fpdf
$this->load->library('fpdf'); //fpdf

$nombre="";
$fpdf = new FPDF();

ob_end_clean();
//inicializa pagina pdf
$fpdf->Open();
$fpdf->AddPage();
$fpdf->SetAuthor("codigoweblibre.comli.co - codigoweblibre.wordpress.com", true);
$fpdf->SetCreator("codigoweblibre.comli.co - codigoweblibre.wordpress.com", true);

//Cabecera
$fpdf->SetFont('Arial', 'B', 12);
$fpdf->SetTextColor("0", "8", "8"); //rojo
//$fpdf->Image(base_url() . 'img/User.png', 10, 10, -100);
$fpdf->SetFontSize(10);
$fpdf->Image('imagenes/banner.png', 8,10,192,22,'PNG');
$fpdf->Cell(100, 30, ' ', 0, 1, 'C');
$fpdf->Image('imagenes/bandera2.png', 8,35,192,1,'PNG');
$fpdf->Cell(0, 6, 'UNIDAD EJECUTORA DE TITULACION', 0, 1, 'C');
$fpdf->Cell(0, 6, 'DEL MINISTERIO DE OBRAS PUBLICAS, SERVICIOS Y VIVIENDA', 0, 1, 'C');

$fpdf->SetFont('Arial', 'BU', 10);
$fpdf->Cell(0, 3, '', 0, 1, 'C');
$fpdf->Cell(0, 6, 'REPORTE DE PERSONAL POR FECHA DE MODIFICACION', 0, 1, 'C');
$fpdf->Ln();

    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->Cell(45, 7, "Nombre ", 1);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->Cell(45, 7, "Apellido paterno ", 1);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->Cell(45, 7, "Apellido materno ", 1);
    $fpdf->SetFont('Arial', 'B', 10);
    $fpdf->Cell(55, 7, "Fecha de modificacion ", 1);
    $fpdf->Ln();

    
foreach ($personal as $valor) {
    $fpdf->SetTextColor("0", "78", "102");
    $fpdf->SetFont('Arial', '', 10);
    $fpdf->Cell(45, 7,  $valor->nombre, 1);
    $fpdf->SetFont('Arial', '', 10);
    $fpdf->Cell(45, 7,  $valor->apellido_pat, 1);
    $fpdf->SetFont('Arial', '', 10);
    $fpdf->Cell(45, 7,  $valor->apellido_mat, 1);
    $fpdf->SetFont('Arial', '', 10);
    $fpdf->Cell(55, 7,  $valor->fecha_registro, 1);
    $fpdf->SetFont('Arial', '', 10);
    $fpdf->Ln();
    $fpdf->PageNo();
    
}

//finaliza y muestra en pantalla pdf
$fpdf->Output($nombre.".pdf","I");
?>
