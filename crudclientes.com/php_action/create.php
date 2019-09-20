<?php
// Conexão

require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$idade = mysqli_escape_string($connect, $_POST['idade']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	
	$sql = "INSERT INTO cliente(nome, sobrenome, idade, email) VALUES ('$nome', '$sobrenome', '$idade', '$email')";

	if(mysqli_query($connect, $sql)):
		header('Location: ../index.php?sucesso');
	else:
		header('Location: ../index.php?erro');
	endif;
endif;


?>