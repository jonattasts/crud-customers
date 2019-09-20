<?php
//Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-excluir'])):
	$id = mysqli_escape_string($connect, $_POST['id']);
	
	$sql = "DELETE FROM cliente  WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Excluido com Sucesso !";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao excluir !";
		header('Location: ../index.php');
	endif;
endif;


?>