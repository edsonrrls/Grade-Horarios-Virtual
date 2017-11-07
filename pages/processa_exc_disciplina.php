<?php
	include_once("conexao.php");

	$cod_disc = $_POST['cod'];
	
	//echo "$nome_prof - $fone_prof - $email_prof"

	$result_prof = "DELETE FROM disciplina WHERE cod_disc = '$cod_disc'"; //Exclui dados

	$resultado_prof = mysqli_query($mysqli, $result_prof);

	if (mysqli_affected_rows($mysqli) != 0) {
		
		header("Location: disciplinas.php"); //Redireciona página
	}
	else 
	{
				
	}
?>