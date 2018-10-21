<?php



require 'C:\xampp\htdocs\fpdf181\fpdf.php';

$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont("Arial","B", 16);

$pdf->Cell(0,10,"Application Form", 0,0,"C");
$pdf->Cell(50,10,"", 0,0,"C");
$pdf->Cell(50,10,"To", 0,0,);
$pdf->Cell(50,10,"$to_name", 0,0,);
$pdf->Cell(50,10,"$department_name", 0,0,);
$pdf->Cell(50,10,"$institute", 0,0,);
$pdf->Cell(50,10,"", 0,0,);
$pdf->Cell(50,10,"", 0,0,);
$pdf->Cell(50,10,"Sir,", 0,0,);
$pdf->Cell(50,10,"	With respact I want to inform you that I am $name and studnet of $department_name department. My ID is $id. In my study period I did not miss any class. After few days I have very Importand work to do. For that purpose I would like you to grant me the holidays for the next $days days i.e. from $start_date to $end_date. Thank you for your consideration.", 0,0,);
$pdf->Cell(50,10,"", 0,0,);
$pdf->Cell(50,10,"Your sincerely", 0,0,);
$pdf->Cell(50,10,"$name", 0,0,);
$pdf->Cell(50,10,"$ID", 0,0,);
$pdf->Cell(50,10,"$department_name", 0,0,);
$pdf->Cell(50,10,"$institute", 0,0,);

?>