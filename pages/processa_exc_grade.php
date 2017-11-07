<?php
	include_once("conexao.php");

	$cod_grade = $_POST['cod'];
	
	//echo "$nome_prof - $fone_prof - $email_prof"

	$result_prof = "DELETE FROM grade WHERE cod_grade = '$cod_grade'"; //Exclui dados

	$resultado_prof = mysqli_query($mysqli, $result_prof);

	if (mysqli_affected_rows($mysqli) != 0) {
		
		header("Location: grades.php"); //Redireciona página
	}
	else 
	{
				
	}
?>