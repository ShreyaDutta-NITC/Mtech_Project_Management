<?php
//call the FPDF library
require('fpdf.php');
require_once('includes/connect.inc.php');

$tid=$_GET['id'];
$sql="SELECT date,name,marks,outofmarks FROM evaluations WHERE thesis_id=".$tid;
$result=mysqli_query($conn,$sql);

$sql1="SELECT * FROM thesis WHERE id=".$tid;
$res1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($res1);

$sql2="SELECT * FROM student WHERE id=".$row1['student_id'];
$res2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($res2);

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

//create pdf object
$pdf = new FPDF('P','mm','A4');

//add new page
$pdf->AddPage();
$pdf->Image('images/nitc_logo_icon.png',70,90);


$pdf->setMargins(25, 45, 11.6);
$pdf->AddPage();
//set font to arial, bold, 14pt
$pdf->Image('images/nitclogo.png',40,0);
// $pdf->Ln(25);

//set font to arial, bold, 14pt
$pdf->SetFont('Times','B',25);

//Cell(width , height , text , border , end line , [align] )
$pdf->Cell(0,11,'Grade Sheet',0,1,'C');
$pdf->SetX(12.6);
$pdf->Ln(5);

$pdf->SetFont('Times','I',18);
$pdf->Cell(0,8,'Topic:'.$row1['name'],0,1,'C');
$pdf->SetX(12.6);
$pdf->Ln(10);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,11,'Student:',0,0,'L');
$pdf->SetX(12.6);
$pdf->Cell( 160, 11, 'Supervisor:', 0, 1, 'R' );
// $pdf->Ln(5);

$pdf->SetFont('Times','I',12);
$pdf->Cell(0,11,$row2['name'],0,0,'L');
$pdf->SetX(12.6);
$pdf->Cell( 170, 11,$row1['supervisor_name'], 0, 1, 'R' );
$pdf->Ln(5);



//set font to arial, bold, 14pt
$pdf->SetFont('Times','B',12);
$pdf->Cell(40,12,'Date',1);
$pdf->Cell(40,12,'Name',1);
$pdf->Cell(40,12,'Marks Given',1);
$pdf->Cell(40,12,'Total Marks',1);

foreach($result as $row) {
    $pdf->Ln();
    foreach($row as $column)
    $pdf->Cell(40,12,$column,1);
    }

$pdf->Ln(25);
$pdf->SetFont('Times','B',12);
$pdf->Cell(0,11,'Final Grade:  '.$row1['final_grade'],0,0,'C');
$pdf->SetX(12.6);

//output the result
$pdf->Output();

?>