<?php
	include_once("conexao.php");

	$cod_prof = $_POST['cod'];
	$nome_prof = $_POST['nome'];
	$fone_prof = $_POST['fone'];
	$email_prof = $_POST['email'];
	
	//echo "$nome_prof - $fone_prof - $email_prof"

	$result_prof = "UPDATE professor SET nome_prof='$nome_prof', fone_prof='$fone_prof', email_prof='$email_prof' WHERE cod_prof = '$cod_prof'"; //Cadastra dados

	$resultado_prof = mysqli_query($mysqli, $result_prof);

	if (mysqli_affected_rows($mysqli) != 0) {
		
		header("Location: professores.php"); //Redireciona página
	}
	else 
	{
			
	}
?>