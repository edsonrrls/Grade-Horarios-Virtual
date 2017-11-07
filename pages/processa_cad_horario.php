<?php
	include_once("conexao.php");

	$hora_inicio = $_POST['hora_ini'];
	$hora_fim = $_POST['hora_fim'];
	$turno = $_POST['turno'];
	
	//echo "$hora_inicio - $hora_fim - $turno"

	$result_horario = "INSERT INTO horario(hora_inicio, hora_termino, turno) VALUES ('$hora_inicio','$hora_fim', '$turno')"; //Cadastra dados

	$resultado_horario = mysqli_query($mysqli, $result_horario);

	if (mysqli_affected_rows($mysqli) != 0) {
		
		header("Location: cad_horario.php"); //Redireciona página
	}
	else 
	{
	
	}
?>