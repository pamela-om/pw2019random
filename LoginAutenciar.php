<?php
	require_once('UsuarioBiblioteca.php');	

	$login = $_POST["login"];
	$senha = $_POST["senha"];
		
    $senha = MD5($senha);
	$situacao = autenticarUsuario($login, $senha);
	
	if($situacao == TRUE){			
			echo "<script>location.href='Principal.php';</script>"; 
	}else{
			echo "<script>alert('Usuário ou senha inválido!'); location.href='Login.php';</script>"; 			
	}

			
?>