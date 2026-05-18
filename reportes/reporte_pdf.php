<?php
ob_start();
include '../config/conexion.php';
require('../libreria/fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'LISTADO DE USUARIOS',0,1,'C');
$pdf->Ln(10);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10,'ID',1);
$pdf->Cell(60,10,'NOMBRES',1);
$pdf->Cell(50,10,'USUARIO',1);
$pdf->Cell(40,10,'ESTADO',1);
$pdf->Ln();
$pdf->SetFont('Arial','',11);
$sql = mysqli_query($conn,"SELECT * FROM usuarios");
while($r=mysqli_fetch_array($sql)){

$pdf->Cell(20,10,$r['id'],1);
$pdf->Cell(60,10,$r['nombres'],1);
$pdf->Cell(50,10,$r['usuario'],1);
$pdf->Cell(40,10,$r['estado'],1);

$pdf->Ln();

}

ob_end_clean();

$pdf->Output();

?>