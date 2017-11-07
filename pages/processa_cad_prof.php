<?php
	include_once("conexao.php");

	$nome_prof = $_POST['nome'];
	$fone_prof = $_POST['fone'];
	$email_prof = $_POST['email'];
	
	//echo "$nome_prof - $fone_prof - $email_prof"

	$result_prof = "INSERT INTO professor(nome_prof, fone_prof, email_prof) VALUES ('$nome_prof','$fone_prof', '$email_prof')"; //Cadastra dados

	$resultado_prof = mysqli_query($mysqli, $result_prof);

	if (mysqli_affected_rows($mysqli) != 0) {
		
		header("Location: cad_professor.php"); //Redireciona página
	}
	else 
	{
		
	}
?>