<?php
require_once('includes/fpdf/fpdf.php');
require_once('includes/fpdi/fpdi.php');

$pdf = new FPDI('L', 'pt');

$pdf->SetTopMargin(0);
$pdf->SetLeftMargin(0);
$pdf->SetRightMargin(0);
$pdf->SetAutoPageBreak(0);

// Copy the template from the source file
$pageCount = $pdf->setSourceFile('diploma.pdf');
$tplIdx = $pdf->importPage(1);

// Set the diemsion of the new PDF file
$pdf->addPage('L', [792, 612]);
$pdf->useTemplate($tplIdx);

// Set font
$pdf->AddFont('Diploma-Regular');
$pdf->SetFont('Diploma-Regular', '', 48);
// Set color
$pdf->SetTextColor(35, 31, 32);
// Move to 500 points from the top
$pdf->ln(250);
// Centered text
$pdf->Cell(0, 0, $name, 0, 1, 'C');
$pdf->Output('I', 'diploma.pdf');