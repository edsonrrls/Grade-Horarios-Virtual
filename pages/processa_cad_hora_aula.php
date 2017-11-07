<?php
	include_once("conexao.php");

	$cod_grade = $_POST['codgrade'];
	$cod_disc = $_POST['disc'];
	$cod_hora = $_POST['horario'];
	$dia_semana = $_POST['dia'];


	//echo "$cod_grade, $cod_disc, $cod_hora, $dia_semana";

	$result_horaaula = "INSERT INTO hora_aula(cod_grade, cod_disc, cod_horario, dia_semana) VALUES ('$cod_grade','$cod_disc', '$cod_hora', '$dia_semana')"; //Cadastra dados

	$resultado_horaaula = mysqli_query($mysqli, $result_horaaula);

	if (mysqli_affected_rows($mysqli) != 0) {

		//echo "$cod_grade, $cod_disc, $cod_hora, $dia_semana";
		header("Location: cad_hora_aula.php"); //Redireciona página
	}
	else 
	{
		header("Location: cad_hora_aula.php"); //Redireciona página		
	}
?>