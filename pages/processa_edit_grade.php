<?php
	include_once("conexao.php");
	
	$cod_grade = $_POST['cod'];
	$regime = $_POST['regime'];
	$categoria = $_POST['categoria'];
	$validade = $_POST['validade'];
	$curso = $_POST['curso'];
	$semestre = $_POST['semestre'];
	$ano = $_POST['ano'];
	
	//echo "$nome_prof - $fone_prof - $email_prof"

	$result_prof = "UPDATE grade SET regime='$regime', categoria='$categoria', validade='$validade' WHERE cod_grade = '$cod_grade'"; //Cadastra dados

	$resultado_prof = mysqli_query($mysqli, $result_prof);

	if (mysqli_affected_rows($mysqli) != 0) {
		
		header("Location: grades.php"); //Redireciona página
	}
	else 
	{
			
	}
?>