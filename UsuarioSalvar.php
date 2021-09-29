<?php
	require_once('UsuarioBiblioteca.php');	
	
	$id = $_POST["id"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	$email = $_POST["email"];
	$foto = $_FILES["foto"];

	if($id == 0){
		if( strlen($foto["name"]) > 1){
			$nomeFoto= uploadArquivo($foto,"");
		}else{
			$nomeFoto = "padrao.jpg";
		}
		$senha = MD5($senha);	
		$situacao = incluirUsuario($login, $senha, $email, $nomeFoto);
		
	}else{
		
		$situacao = atualizarUsuario($id, $login, $email);
		$usuario = buscarUsuario($id);
		
		if( strlen($foto["name"]) > 1){
			$nomeFoto = uploadArquivo($foto, $usuario['foto']);
		}
		
		if(	isset($_POST["novaSenha"]) ){
			if(strlen($_POST["novaSenha"]) > 1){
				$senha = MD5($senha);
				atualizarSenhaUsuario($id, $senha);
			}
		}
	}

	if($situacao == TRUE){
		echo "<script>alert('Registro salvo com sucesso !!!'); location.href='UsuarioTabela.php';</script>"; 
	}else{
		echo "<script>alert('Erro ao salvar o registro'); location.href='UsuarioTabela.php';</script>"; 	
	}
			
?>