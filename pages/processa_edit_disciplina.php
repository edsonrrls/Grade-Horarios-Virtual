<?php
	include_once("conexao.php");

	$cod_disc = $_POST['cod'];
	$nome_disc = $_POST['nome'];
	$curso_disc = $_POST['curso'];
	
	//echo "$nome_prof - $fone_prof - $email_prof"

	$result_prof = "UPDATE disciplina SET nome_disc='$nome_disc', curso_disc='$curso_disc' WHERE cod_disc = '$cod_disc'"; //Cadastra dados

	$resultado_prof = mysqli_query($mysqli, $result_prof);

	if (mysqli_affected_rows($mysqli) != 0) {
		
		header("Location: disciplinas.php"); //Redireciona página
	}
	else 
	{
		header("Location: disciplinas.php"); //Redireciona página		
	}
?>