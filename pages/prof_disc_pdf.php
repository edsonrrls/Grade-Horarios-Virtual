<?php

    require("fpdf/fpdf.php");
    include("conexao.php");

    $consulta = "SELECT * FROM prof_disc JOIN professor JOIN disciplina on prof_disc.cod_prof = professor.cod_prof and prof_disc.cod_disc = disciplina.cod_disc ORDER BY professor.nome_prof";
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
    $pdf->Cell(190,10,utf8_decode('Relatório de Professores por Disciplina'),0,0,"C");
    $pdf->Ln(15);

    $pdf->SetFont('Arial','B',11);

    $pdf->Cell(20,10,utf8_decode('Código'),1,0,'C');
    $pdf->Cell(90,10,utf8_decode('Nome do Professor'),1,0,'C');
    $pdf->Cell(80,10,utf8_decode('Disciplina'),1,1,'C');

    $pdf->SetFont('Arial','',10);

    while ($dado = $con->fetch_array())
    {        
        $pdf->Cell(20,10,utf8_decode($dado["cod_prof_disc"]),1,0,'C');
        $pdf->Cell(90,10,utf8_decode($dado["nome_prof"]),1,0,'L');
        $pdf->Cell(80,10,utf8_decode($dado["nome_disc"]),1,1,'L');
    } 



    $pdf->Output();

?>