<?php			
        require_once('UsuarioBiblioteca.php');

        $id = $_GET["id"];
        
		$usuario = buscarUsuario($_GET["id"]);
		
		$situacao = excluirUsuario($id);
		
		if($situacao){
			
			if($usuario['foto'] != "padrao.jpg"){
				unlink( "arquivos/".$usuario['foto']);
			}
			
			echo "<script>alert('Usuário excluído com sucesso.');</script>";
		}else{
			echo "<script>alert('Erro ao excluir o usuário.');</script>";
		}
	 
		echo "<script>location.href='UsuarioTabela.php';</script>"; 
	?>	