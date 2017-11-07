<?php
	include_once("conexao.php");

	$cod_prof = $_POST['cod'];
	
	//echo "$nome_prof - $fone_prof - $email_prof"

	$result_prof = "DELETE FROM professor WHERE cod_prof = '$cod_prof'"; //Exclui dados

	$resultado_prof = mysqli_query($mysqli, $result_prof);

	if (mysqli_affected_rows($mysqli) != 0) {
		
		header("Location: professores.php"); //Redireciona página
	}
	else 
	{
				
	}
?>