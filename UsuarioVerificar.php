<?php

	require_once('UsuarioBiblioteca.php');
	
	$id = $_GET["id"];
	
	if (isset($_POST["login"])){
		
		$login = $_POST["login"];
		
		$retorno = verificarLogin($id, $login);

		echo json_encode( $retorno );				
	}
		
?>