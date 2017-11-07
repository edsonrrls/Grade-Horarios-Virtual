<?php
	include_once("conexao.php");

	$nome_prof = $_POST['professor'];
	$nome_disc = $_POST['disciplina'];
	
	//echo "$hora_inicio - $hora_fim - $turno"

	$result_disciplina = "INSERT INTO prof_disc(cod_prof, cod_disc) VALUES ('$nome_prof','$nome_disc')"; //Cadastra dados

	$resultado_disciplina = mysqli_query($mysqli, $result_disciplina);

	if (mysqli_affected_rows($mysqli) != 0) {
		
		header("Location: cad_prof_disc.php"); //Redireciona página
	}
	else 
	{
	
	}
?>