<?php
session_start();
$uid=$_SESSION['user_id'];
$conn = mysqli_connect("localhost","root","","recruitment");
$result = mysqli_query($conn,"SELECT * FROM jobseekertable where uid=$uid");
$row=mysqli_fetch_array($result)?>
<?php
define('FPDF_FONTPATH','../font/');
require('../fpdf.php');
$pdf=new FPDF();
$pdf->Open();
$pdf->AddPage();
$pdf->SetFont('Times','B',16);
$pdf->Cell(0,10,$row['fname'],0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,$row['email'],0,1);
$pdf->Cell(0,10,$row['mobno'],0,1);
$pdf->Line(10,40,200,40);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'EDUCATION',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,$row['degree'],0,1);
$pdf->Cell(0,10,$row['college'],0,1);
$pdf->Cell(0,10,$row['cgpa'],0,1);

$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'AREA OF INTERESTS',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,$row[aofi1],0,1);
$pdf->Cell(0,10,$row[aofi2],0,1);
$pdf->Cell(0,10,$row[aofi3],0,1);

$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'PROJECTS',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,$row['p1'],0,1);
$pdf->Cell(0,10,$row['p2'],0,1);

$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Experience',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,$row['e1'],0,1);
$pdf->Cell(0,10,$row['e2'],0,1);

$pdf->Output();
?>
