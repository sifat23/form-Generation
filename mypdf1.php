<?php
	if (isset($_POST['go'])) {
		$name= $_POST['name'];
		$to_name= $_POST['to'];
		$p_id = $_POST['p_id'];
		$department_name= $_POST['dept'];
		$institute= $_POST['inst'];
		$days= $_POST['days'];
		$start_date= $_POST['s_date'];
		$end_date= $_POST['e_date'];
	
		require 'C:\xampp\htdocs\fpdf181\fpdf.php';

		$pdf = new FPDF();

		$pdf->AddPage();

		$pdf->SetFont("Arial","", 14);

		$pdf->Cell(0,10,"Application Form", 0,0,"C");
		$pdf->Ln(5);
		$pdf->Cell(50,10,"To", 0,0);
		$pdf->Ln(5);
		$pdf->Cell(50,10,"$to_name", 0,0);
		$pdf->Ln(5);
		$pdf->Cell(50,10,"$department_name", 0,0);
		$pdf->Ln(5);
		$pdf->Cell(50,10,"$institute", 0,0);
		$pdf->Ln(5);
		$pdf->Ln(5);
		$pdf->Cell(50,10,"Subject: Prayer for a vacation",0,0);
		$pdf->Ln(5);
		$pdf->Ln(5);
		$pdf->Ln(5);
		$pdf->Cell(50,10,"Sir,", 0,0);
		$pdf->Ln(5);
		$pdf->Cell(50,10,"With respact I want to inform you that I am $name and studnet of $department_name department. My ID is",0,0);
		$pdf->Ln(5);
		$pdf->Cell(50,10,"$p_id. In my study period I did not miss any class. After few days I have very",0,0);
		$pdf->Ln(5);
		$pdf->Cell(50,10,"importand work to do. For that purpose I would like you to grant me to go ona vaction for",0,0);
		$pdf->Ln(5);
		$pdf->Cell(50,10,"the next $days days i.e. from $start_date to $end_date.", 0,0);
		$pdf->Ln(5);
		$pdf->Ln(5);
		$pdf->Cell(50,10,"I, Therefore, pray and hope that you would be enough to grant me the permission to go on",0,0); 
		$pdf->Ln(5);
		$pdf->Cell(50,10,"a vacation and oblige thereby", 0,0);
		$pdf->Ln(5);
		$pdf->Ln(5);
		$pdf->Cell(50,10,"Your sincerely", 0,0);
		$pdf->Ln(5);
		$pdf->Cell(50,10,"$name", 0,0);
		$pdf->Ln(5);
		$pdf->Cell(50,10,"$p_id", 0,0);
		$pdf->Ln(5);
		$pdf->Cell(50,10,"$department_name", 0,0);
		$pdf->Ln(5);
		$pdf->Cell(50,10,"$institute", 0,0);
		$pdf->Ln(5);

		$pdf->Output();

		echo "oko";
	}
?>