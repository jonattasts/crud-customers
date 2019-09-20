<?php
//Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$idade = mysqli_escape_string($connect, $_POST['idade']);
	$email = mysqli_escape_string($connect, $_POST['email']);

	$id = mysqli_escape_string($connect, $_POST['id']);
	
	$sql = "UPDATE cliente SET nome = '$nome', sobrenome = '$sobrenome', idade = '$idade', email = '$email' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com Sucesso !";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar !";
		header('Location: ../index.php');
	endif;
endif;


?>