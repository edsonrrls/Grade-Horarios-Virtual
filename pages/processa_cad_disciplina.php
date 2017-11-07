<?php
	include_once("conexao.php");

	$nome_disc = $_POST['disc'];
	$nome_curso = $_POST['curso'];
	
	//echo "$hora_inicio - $hora_fim - $turno"

	$result_disciplina = "INSERT INTO disciplina(nome_disc, curso_disc) VALUES ('$nome_disc','$nome_curso')"; //Cadastra dados

	$resultado_disciplina = mysqli_query($mysqli, $result_disciplina);

	if (mysqli_affected_rows($mysqli) != 0) {
		
		header("Location: cad_disciplina.php"); //Redireciona página
	}
	else 
	{
	
	}
?>