<?php
	include_once("conexao.php");

	$cod_horario = $_POST['cod'];
	$hora_inicio = $_POST['hora_ini'];
	$hora_termino = $_POST['hora_fim'];
	$turno = $_POST['turno'];
	
	//echo "$nome_prof - $fone_prof - $email_prof"

	$result_prof = "UPDATE horario SET hora_inicio='$hora_inicio', hora_termino='$hora_termino', turno='$turno' WHERE cod_horario = '$cod_horario'"; //Cadastra dados

	$resultado_prof = mysqli_query($mysqli, $result_prof);

	if (mysqli_affected_rows($mysqli) != 0) {
		
		header("Location: horarios.php"); //Redireciona página
	}
	else 
	{
		header("Location: horarios.php"); //Redireciona página		
	}
?>