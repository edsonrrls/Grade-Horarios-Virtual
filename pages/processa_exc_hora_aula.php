<?php
	include_once("conexao.php");

	$cod_hora_aula = $_POST['cod'];
	
	//echo "$nome_prof - $fone_prof - $email_prof"

	$result_prof = "DELETE FROM hora_aula WHERE cod_hora_aula = '$cod_hora_aula'"; //Exclui dados

	$resultado_prof = mysqli_query($mysqli, $result_prof);

	if (mysqli_affected_rows($mysqli) != 0) {
		
		header("Location: hora_aula.php"); //Redireciona página
	}
	else 
	{
				
	}
?>