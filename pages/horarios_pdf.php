<?php

    include("fpdf/fpdf.php");
    include("conexao.php");

    $consulta = "SELECT * FROM horario ORDER BY hora_inicio";
    $con = $mysqli->query($consulta) or die($mysqli->error);

      class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('cabecalho.jpg',10,6,190);
    // Arial bold 15
    $this->SetFont('Arial','',10);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Ln(15);
    $this->Cell(190,4,utf8_decode('Data de emissão:'),1,0,'L');
    // Line break
    $this->Ln(4);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(190,10,utf8_decode('Relatório de Horários'),0,0,"C");
    $pdf->Ln(15);

    $pdf->SetFont('Arial','B',11);

    $pdf->Cell(15,10,utf8_decode('Cód.'),1,0,'C');
    $pdf->Cell(45,10,utf8_decode('Hora de início'),1,0,'C');
    $pdf->Cell(45,10,utf8_decode('Hora de término'),1,0,'C');
    $pdf->Cell(85,10,utf8_decode('Turno'),1,1,'C');

    $pdf->SetFont('Arial','',10);

    while ($dado = $con->fetch_array())
    {        
        $pdf->Cell(15,10,utf8_decode($dado["cod_horario"]),1,0,'C');
        $pdf->Cell(45,10,utf8_decode($dado["hora_inicio"]),1,0,'C');
        $pdf->Cell(45,10,utf8_decode($dado["hora_termino"]),1,0,'C');
        $pdf->Cell(85,10,utf8_decode($dado["turno"]),1,1,'C');
    } 



    $pdf->Output();

?>