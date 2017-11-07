<?php
	include_once("conexao.php");

	$cod_prof_disc = $_POST['cod'];
	
	//echo "$nome_prof - $fone_prof - $email_prof"

	$result_prof = "DELETE FROM prof_disc WHERE cod_prof_disc = '$cod_prof_disc'"; //Exclui dados

	$resultado_prof = mysqli_query($mysqli, $result_prof);

	if (mysqli_affected_rows($mysqli) != 0) {
		
		header("Location: prof_disc.php"); //Redireciona página
	}
	else 
	{
				
	}
?>