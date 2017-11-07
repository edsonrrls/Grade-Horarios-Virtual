<?php
	include_once("conexao.php");

	$nome_prof = $_POST['professor'];
	$semestre = $_POST['semestre'];
	$ano = $_POST['ano'];
	$regime = $_POST['regime'];
	$categoria = $_POST['categoria'];
	$validade = $_POST['validade'];
	$curso = $_POST['curso'];

	//echo "$nome_prof, $semestre, $ano, $regime, $categoria, $validade, $curso";

	$result_grade = "INSERT INTO grade(cod_prof, semestre, ano, validade, categoria, regime, curso) VALUES ('$nome_prof','$semestre', '$ano', '$validade', '$categoria', '$regime', '$curso')"; //Cadastra dados

	$resultado_grade = mysqli_query($mysqli, $result_grade);

	if (mysqli_affected_rows($mysqli) != 0) {
		
		header("Location: cad_grade.php"); //Redireciona página
	}
	else 
	{
		
	}
?>