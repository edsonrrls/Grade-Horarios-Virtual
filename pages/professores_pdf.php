<?php

    require("fpdf/fpdf.php");
    include("conexao.php");

    $consulta = "SELECT * FROM professor ORDER BY cod_prof";
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
$pdf->Cell(190,10,utf8_decode('Relatório de Professores'),0,0,"C");
$pdf->Ln(15);

    $pdf->SetFont('Arial','B',11);

    $pdf->Cell(15,10,utf8_decode('Cód.'),1,0,'C');
    $pdf->Cell(75,10,utf8_decode('Nome'),1,0,'C');
    $pdf->Cell(30,10,utf8_decode('Telefone'),1,0,'C');
    $pdf->Cell(70,10,utf8_decode('E-Mail'),1,1,'C');

    $pdf->SetFont('Arial','',10);

    while ($dado = $con->fetch_array())
    {        
        $pdf->Cell(15,10,utf8_decode($dado["cod_prof"]),1,0,'C');
        $pdf->Cell(75,10,utf8_decode($dado["nome_prof"]),1,0,'L');
        $pdf->Cell(30,10,utf8_decode($dado["fone_prof"]),1,0,'L');
        $pdf->Cell(70,10,utf8_decode($dado["email_prof"]),1,1,'L');
    } 



    $pdf->Output();

?>