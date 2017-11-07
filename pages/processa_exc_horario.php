<?php
	include_once("conexao.php");

	$cod_hora = $_POST['cod'];
	
	//echo "$nome_prof - $fone_prof - $email_prof"

	$result_prof = "DELETE FROM horario WHERE cod_horario = '$cod_hora'"; //Exclui dados

	$resultado_prof = mysqli_query($mysqli, $result_prof);

	if (mysqli_affected_rows($mysqli) != 0) {
		
		header("Location: horarios.php"); //Redireciona página
	}
	else 
	{
				
	}
?>