<?php

require("fpdf/fpdf.php");
include("conexao.php");


    $cod_prof = $_POST['cod_prof'];
    $cod_grade = $_POST['cod_grade'];

//INFORMAÇÕES DO CABEÇALHO DO DOCUMENTO********************************

    $consulta = "SELECT * FROM grade JOIN professor on grade.cod_prof = professor.cod_prof WHERE grade.cod_prof ='$cod_prof' AND grade.cod_grade = '$cod_grade'";
    $con = $mysqli->query($consulta) or die($mysqli->error);

    $consultaDisc = "SELECT DISTINCT d.nome_disc, d.curso_disc, h.cod_grade FROM disciplina AS d JOIN hora_aula AS h 
        WHERE h.cod_disc = d.cod_disc
        AND h.cod_grade = $cod_grade";
    $condisc = $mysqli->query($consultaDisc) or die($mysqli->error);


//FIM DO CABEÇALHO*****************************************************

//INICIO DO CORPO DA PÁGINA********************************************

    $consultaSeg = "SELECT * FROM hora_aula JOIN horario JOIN disciplina WHERE hora_aula.dia_semana = 'Quinta-Feira'";
    $conseg = $mysqli->query($consultaSeg) or die($mysqli->error);


    $consulta2 = "SELECT h.cod_hora_aula, h.cod_grade, h.cod_disc, h.dia_semana, g.cod_prof, p.cod_prof, d.nome_disc, ho.cod_horario, ho.hora_inicio, ho.hora_termino, ho.turno FROM hora_aula AS h JOIN grade AS g ON h.cod_grade = g.cod_grade JOIN professor AS p ON p.cod_prof = g.cod_prof JOIN disciplina AS d ON d.cod_disc = h.cod_disc JOIN horario AS ho ON ho.cod_horario = h.cod_horario 
            WHERE p.cod_prof = $cod_prof 
            AND h.dia_semana = 'Segunda-feira' 
            AND h.cod_grade = $cod_grade ORDER BY ho.hora_inicio";
    $con2 = $mysqli->query($consulta2) or die($mysqli->error);

    $consultacont = "SELECT COUNT(cod_hora_aula) AS total FROM hora_aula
            WHERE cod_grade = $cod_grade";
    $concont = $mysqli->query($consultacont) or die($mysqli->error);
    $total = $concont;


    $consulta3 = "SELECT h.cod_hora_aula, h.cod_grade, h.cod_disc, h.dia_semana, g.cod_prof, p.cod_prof, d.nome_disc, ho.cod_horario, ho.hora_inicio, ho.hora_termino, ho.turno FROM hora_aula AS h JOIN grade AS g ON h.cod_grade = g.cod_grade JOIN professor AS p ON p.cod_prof = g.cod_prof JOIN disciplina AS d ON d.cod_disc = h.cod_disc JOIN horario AS ho ON ho.cod_horario = h.cod_horario
            WHERE p.cod_prof = $cod_prof 
            AND h.dia_semana = 'Terça-feira' 
            AND h.cod_grade = $cod_grade ORDER BY ho.hora_inicio";
    $con3 = $mysqli->query($consulta3) or die($mysqli->error);

    $consulta4 = "SELECT h.cod_hora_aula, h.cod_grade, h.cod_disc, h.dia_semana, g.cod_prof, p.cod_prof, d.nome_disc, ho.cod_horario, ho.hora_inicio, ho.hora_termino, ho.turno FROM hora_aula AS h JOIN grade AS g ON h.cod_grade = g.cod_grade JOIN professor AS p ON p.cod_prof = g.cod_prof JOIN disciplina AS d ON d.cod_disc = h.cod_disc JOIN horario AS ho ON ho.cod_horario = h.cod_horario
            WHERE p.cod_prof = $cod_prof 
            AND h.dia_semana = 'Quarta-feira' 
            AND h.cod_grade = $cod_grade ORDER BY ho.hora_inicio";
    $con4 = $mysqli->query($consulta4) or die($mysqli->error);

    $consulta5 = "SELECT h.cod_hora_aula, h.cod_grade, h.cod_disc, h.dia_semana, g.cod_prof, p.cod_prof, d.nome_disc, ho.cod_horario, ho.hora_inicio, ho.hora_termino, ho.turno FROM hora_aula AS h JOIN grade AS g ON h.cod_grade = g.cod_grade JOIN professor AS p ON p.cod_prof = g.cod_prof JOIN disciplina AS d ON d.cod_disc = h.cod_disc JOIN horario AS ho ON ho.cod_horario = h.cod_horario
            WHERE p.cod_prof = $cod_prof 
            AND h.dia_semana = 'Quinta-feira' 
            AND h.cod_grade = $cod_grade ORDER BY ho.hora_inicio";
    $con5 = $mysqli->query($consulta5) or die($mysqli->error);

    $consulta6 = "SELECT h.cod_hora_aula, h.cod_grade, h.cod_disc, h.dia_semana, g.cod_prof, p.cod_prof, d.nome_disc, ho.cod_horario, ho.hora_inicio, ho.hora_termino, ho.turno FROM hora_aula AS h JOIN grade AS g ON h.cod_grade = g.cod_grade JOIN professor AS p ON p.cod_prof = g.cod_prof JOIN disciplina AS d ON d.cod_disc = h.cod_disc JOIN horario AS ho ON ho.cod_horario = h.cod_horario
            WHERE p.cod_prof = $cod_prof 
            AND h.dia_semana = 'Sexta-feira' 
            AND h.cod_grade = $cod_grade ORDER BY ho.hora_inicio";
    $con6 = $mysqli->query($consulta6) or die($mysqli->error);

    $consultasab = "SELECT h.cod_hora_aula, h.cod_grade, h.cod_disc, h.dia_semana, g.cod_prof, p.cod_prof, d.nome_disc, ho.cod_horario, ho.hora_inicio, ho.hora_termino, ho.turno FROM hora_aula AS h JOIN grade AS g ON h.cod_grade = g.cod_grade JOIN professor AS p ON p.cod_prof = g.cod_prof JOIN disciplina AS d ON d.cod_disc = h.cod_disc JOIN horario AS ho ON ho.cod_horario = h.cod_horario
            WHERE p.cod_prof = $cod_prof 
            AND h.dia_semana = 'Sabado' 
            AND h.cod_grade = $cod_grade ORDER BY ho.hora_inicio";
    $consab = $mysqli->query($consultasab) or die($mysqli->error);






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

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

    while ($dado = $con->fetch_array())
    { 

    $pdf->Cell(55,8,utf8_decode('GRADE HORÁRIA'),1,0,'C');
    $pdf->Cell(65,8,utf8_decode($dado["semestre"].' de - '.$dado["ano"]),1,0,'C');
    $pdf->Cell(70,8,utf8_decode('Válida a partir de: '.$dado["validade"]),1,1,'C');

$pdf->SetFont('Arial','B',16);
        $pdf->Cell(10,8,utf8_decode('A'),1,0,'C');

$pdf->SetFont('Arial','',10);
        $pdf->Cell(15,8,utf8_decode('NOME:'),1,0,'C');
$pdf->SetFont('Arial','',11);  
        $pdf->Cell(80,8,utf8_decode($dado["nome_prof"]),1,0,'C');
$pdf->SetFont('Arial','',10);
        $pdf->Cell(35,8,utf8_decode('CATEGORIA'),1,0,'C');
        $pdf->Cell(50,8,utf8_decode('ASSOCIADO I'),1,1,'C');
        $pdf->Cell(25,8,utf8_decode('REGIME'),1,0,'C');
        $pdf->Cell(80,8,utf8_decode($dado["regime"]),1,0,'C');
        $pdf->Cell(35,8,utf8_decode($dado["categoria"]),1,0,'C');
        $pdf->Cell(50,8,utf8_decode(''),1,1,'C');
    }
    
$pdf->Cell(1,2,utf8_decode(''),0,1,'C');

$pdf->SetFont('Arial','B',16);
        $pdf->Cell(10,8,utf8_decode('B'),1,0,'C');
$pdf->SetFont('Arial','I',11); 
        $pdf->Cell(90,5,utf8_decode('DISCIPLINAS:'),1,0,'C');
        $pdf->Cell(90,5,utf8_decode('CURSOS:'),1,1,'C');
    while ($dado = $condisc->fetch_array())
    {
$pdf->SetFont('Arial','',10);
        $pdf->Cell(100,5,utf8_decode($dado["nome_disc"]),1,0,'C'); 
        $pdf->Cell(90,5,utf8_decode($dado["curso_disc"]),1,1,'C');
    }

$pdf->Cell(1,2,utf8_decode(''),0,1,'C');

$pdf->SetFont('Arial','B',11); 

        $pdf->Cell(190,8,utf8_decode('Segunda-Feira'),1,1,'C');


$pdf->SetFont('Arial','',8);
        while ($dado = $con2->fetch_array())
    {   
        $pdf->Cell(20,5,utf8_decode($dado["turno"]),1,0,'C');     
        $pdf->Cell(20,5,utf8_decode($dado["dia_semana"]),1,0,'C');
        $pdf->Cell(15,5,utf8_decode($dado["hora_inicio"]),1,0,'C');
        $pdf->Cell(15,5,utf8_decode($dado["hora_termino"]),1,0,'C');
        $pdf->Cell(120,5,utf8_decode($dado["nome_disc"]),1,1,'L');        
    }

$pdf->SetFont('Arial','B',11); 
        $pdf->Cell(190,8,utf8_decode('Terça-Feira'),1,1,'C');

$pdf->SetFont('Arial','',8);
     while ($dado = $con3->fetch_array())
    {
        $pdf->Cell(20,5,utf8_decode($dado["turno"]),1,0,'C');     
        $pdf->Cell(20,5,utf8_decode($dado["dia_semana"]),1,0,'C');
        $pdf->Cell(15,5,utf8_decode($dado["hora_inicio"]),1,0,'C');
        $pdf->Cell(15,5,utf8_decode($dado["hora_termino"]),1,0,'C');
        $pdf->Cell(120,5,utf8_decode($dado["nome_disc"]),1,1,'L');
    }

$pdf->SetFont('Arial','B',11); 
        $pdf->Cell(190,8,utf8_decode('Quarta-Feira'),1,1,'C');

$pdf->SetFont('Arial','',8);
    while ($dado = $con4->fetch_array())
    {
        $pdf->Cell(20,5,utf8_decode($dado["turno"]),1,0,'C');     
        $pdf->Cell(20,5,utf8_decode($dado["dia_semana"]),1,0,'C');
        $pdf->Cell(15,5,utf8_decode($dado["hora_inicio"]),1,0,'C');
        $pdf->Cell(15,5,utf8_decode($dado["hora_termino"]),1,0,'C');
        $pdf->Cell(120,5,utf8_decode($dado["nome_disc"]),1,1,'L');
    }

$pdf->SetFont('Arial','B',11); 
        $pdf->Cell(190,8,utf8_decode('Quinta-Feira'),1,1,'C');

$pdf->SetFont('Arial','',8);
    while ($dado = $con5->fetch_array())
    {
        $pdf->Cell(20,5,utf8_decode($dado["turno"]),1,0,'C');     
        $pdf->Cell(20,5,utf8_decode($dado["dia_semana"]),1,0,'C');
        $pdf->Cell(15,5,utf8_decode($dado["hora_inicio"]),1,0,'C');
        $pdf->Cell(15,5,utf8_decode($dado["hora_termino"]),1,0,'C');
        $pdf->Cell(120,5,utf8_decode($dado["nome_disc"]),1,1,'L');
    }

$pdf->SetFont('Arial','B',11); 
        $pdf->Cell(190,8,utf8_decode('Sexta-Feira'),1,1,'C');

$pdf->SetFont('Arial','',8);
    while ($dado = $con6->fetch_array())
    {
        $pdf->Cell(20,5,utf8_decode($dado["turno"]),1,0,'C');     
        $pdf->Cell(20,5,utf8_decode($dado["dia_semana"]),1,0,'C');
        $pdf->Cell(15,5,utf8_decode($dado["hora_inicio"]),1,0,'C');
        $pdf->Cell(15,5,utf8_decode($dado["hora_termino"]),1,0,'C');
        $pdf->Cell(120,5,utf8_decode($dado["nome_disc"]),1,1,'L');
    }

$pdf->SetFont('Arial','B',11); 
        $pdf->Cell(190,8,utf8_decode('Sábado'),1,1,'C');

$pdf->SetFont('Arial','',8);
    while ($dado = $consab->fetch_array())
    {
        $pdf->Cell(20,5,utf8_decode($dado["turno"]),1,0,'C');     
        $pdf->Cell(20,5,utf8_decode($dado["dia_semana"]),1,0,'C');
        $pdf->Cell(15,5,utf8_decode($dado["hora_inicio"]),1,0,'C');
        $pdf->Cell(15,5,utf8_decode($dado["hora_termino"]),1,0,'C');
        $pdf->Cell(120,5,utf8_decode($dado["nome_disc"]),1,1,'L');
    }

$pdf->Cell(1,2,utf8_decode(''),0,1,'C');

$pdf->SetFont('Arial','B',16);
        $pdf->Cell(10,8,utf8_decode('C'),1,0,'C');
$pdf->SetFont('Arial','',10);
        $pdf->Cell(60,8,utf8_decode('HAE - RJI - JORNADA'),1,0,'C');
$pdf->SetFont('Arial','',8);
        $pdf->Cell(30,8,utf8_decode('Nº Horas Semanais'),1,0,'C');
        $pdf->Cell(1,8,utf8_decode(''),0,0,'C');
$pdf->SetFont('Arial','B',16);
        $pdf->Cell(10,8,utf8_decode('D'),1,0,'C');
$pdf->SetFont('Arial','',10);
        $pdf->Cell(79,8,utf8_decode('QUADRO RESUMO'),1,1,'C');



$pdf->SetFont('Arial','',9);
        $pdf->Cell(70,5,utf8_decode('1. Diretor e Vice-Diretor da Faculdade'),1,0,'L');

        $pdf->Cell(30,5,utf8_decode(''),1,0,'C');    
        $pdf->Cell(1,5,utf8_decode(''),0,0,'C');         
        $pdf->Cell(50,5,utf8_decode('ATIVIDADES'),1,0,'C');
        $pdf->Cell(19,5,utf8_decode('Nº Semanal'),1,0,'C');
        $pdf->Cell(20,5,utf8_decode('Nº Mensal'),1,1,'C');

        $pdf->Cell(70,5,utf8_decode('2. Acessoria ao CEETPS'),1,0,'L');
        $pdf->Cell(30,5,utf8_decode(''),1,0,'C');    
        $pdf->Cell(1,5,utf8_decode(''),0,0,'C');         
        $pdf->Cell(50,5,utf8_decode('Hora - Aula'),1,0,'C');
        $pdf->Cell(19,5,utf8_decode(''),1,0,'C');
        $pdf->Cell(20,5,utf8_decode(''),1,1,'C');

        $pdf->Cell(70,5,utf8_decode('3. Acessoria à Diretoria da Fatec'),1,0,'L');
        $pdf->Cell(30,5,utf8_decode(''),1,0,'C');    
        $pdf->Cell(1,5,utf8_decode(''),0,0,'C');         
        $pdf->Cell(50,5,utf8_decode('Hora - Atividade'),1,0,'C');
        $pdf->Cell(19,5,utf8_decode(''),1,0,'C');
        $pdf->Cell(20,5,utf8_decode(''),1,1,'C');

        $pdf->Cell(70,5,utf8_decode('3. Acessoria à Diretoria da Fatec'),1,0,'L');
        $pdf->Cell(30,5,utf8_decode(''),1,0,'C');    
        $pdf->Cell(1,5,utf8_decode(''),0,0,'C');         
        $pdf->Cell(50,5,utf8_decode('H.A.E.'),1,0,'C');
        $pdf->Cell(19,5,utf8_decode(''),1,0,'C');
        $pdf->Cell(20,5,utf8_decode(''),1,1,'C');

        $pdf->Cell(70,5,utf8_decode('4. Chefia de Departamento'),1,0,'L');
        $pdf->Cell(30,5,utf8_decode(''),1,0,'C');    
        $pdf->Cell(1,5,utf8_decode(''),0,0,'C');         
        $pdf->Cell(50,5,utf8_decode('R.J.I.'),1,0,'C');
        $pdf->Cell(19,5,utf8_decode(''),1,0,'C');
        $pdf->Cell(20,5,utf8_decode(''),1,1,'C');

        $pdf->Cell(70,5,utf8_decode('5. Responsabilidade por Curso em Implantação'),1,0,'L');
        $pdf->Cell(30,5,utf8_decode(''),1,0,'C');    
        $pdf->Cell(1,5,utf8_decode(''),0,0,'C');         
        $pdf->Cell(50,5,utf8_decode('Jornada'),1,0,'C');
        $pdf->Cell(19,5,utf8_decode(''),1,0,'C');
        $pdf->Cell(20,5,utf8_decode(''),1,1,'C');

        $pdf->Cell(70,5,utf8_decode('6. Responsabilidade por Disciplina (2ª a 6ª feira)'),1,0,'L');
        $pdf->Cell(30,5,utf8_decode(''),1,0,'C');    
        $pdf->Cell(1,5,utf8_decode(''),0,0,'C');         
        $pdf->Cell(50,5,utf8_decode('TOTAL GERAL (HORAS)'),1,0,'C');
        $pdf->Cell(19,5,utf8_decode(''),1,0,'C');
        $pdf->Cell(20,5,utf8_decode(''),1,1,'C');

        $pdf->Cell(70,5,utf8_decode('7. Coordenação de Oficinas e Laboratórios'),1,0,'L');
        $pdf->Cell(30,5,utf8_decode(''),1,1,'C');
        $pdf->Cell(70,5,utf8_decode('8. Grupo de Estudos (2ª a 6ª feira)'),1,0,'L');
        $pdf->Cell(30,5,utf8_decode(''),1,1,'C');
        $pdf->Cell(70,5,utf8_decode('9. Pesquisa Individual (2ª a 6ª feira)'),1,0,'L');
        $pdf->Cell(30,5,utf8_decode(''),1,1,'C');
        $pdf->Cell(70,5,utf8_decode('10. Outros (2ª a 6ª feira)'),1,0,'L');
        $pdf->Cell(30,5,utf8_decode(''),1,1,'C');
        $pdf->Cell(1,5,utf8_decode(''),0,1,'L');


$pdf->SetFont('Arial','',12);
        $pdf->Cell(1,5,utf8_decode(''),0,1,'L');
        $pdf->Cell(190,6,utf8_decode('Lembretes:'),1,1,'L');
$pdf->SetFont('Arial','',9);
        $pdf->Cell(190,5,utf8_decode('a) Observe as exigências legais: no máximo, 8 horas diárias de trabalho; intervalo de uma hora entre um expediente e outro e, no'),0,1,'L');
        $pdf->Cell(190,5,utf8_decode('máximo, 6 horas a cada expediente no diurno e 5 horas no noturno (sem ultrapassar 8 horas por dia).  '),0,1,'L');

        $pdf->Cell(1,1,utf8_decode(''),0,1,'L');

        $pdf->Cell(190,5,utf8_decode('b) Observe as normas em vigor quanto ao cumprimento de horas de RJI ou HAE em determinados períodos, limitação de número de'),0,1,'L');
        $pdf->Cell(190,5,utf8_decode('horas, bem como exigências de exercício de determinadas atividades somente entre segunda e sexta-feria. '),0,1,'L');

$pdf->SetFont('Arial','',12);
        $pdf->Cell(1,5,utf8_decode(''),0,1,'L');
        $pdf->Cell(190,6,utf8_decode('Observações:'),1,1,'L');
        $pdf->Cell(190,50,utf8_decode(''),1,1,'L');










$pdf->Output();
?>