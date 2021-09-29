<?php
require_once('BancoDados.php');

    function incluirUsuario($login, $senha, $email, $foto){
        $situacao = FALSE;        
        $sql = "INSERT INTO tbUsuario (login, senha, email, foto) VALUES('{$login}','{$senha}','{$email}','{$foto}');";
        $conexao = criarConexao();
        $resultado = mysqli_query($conexao, $sql);
        fecharConexao($conexao);
		if($resultado == 1){
			$situacao = TRUE;
        }        
        return $situacao;
    }

    function atualizarUsuario($id, $login, $email){
        $situacao = FALSE;        
        $sql = "UPDATE tbUsuario SET login = '{$login}', email = '{$email}' WHERE id = {$id}";
        $conexao = criarConexao();
        $resultado = mysqli_query($conexao, $sql);
        fecharConexao($conexao);
		if($resultado == 1){
			$situacao = TRUE;
        }        
        return $situacao;
    } 
	
    function atualizarSenhaUsuario($id, $senha){
        $situacao = FALSE;        
        $sql = "UPDATE tbUsuario SET senha = '{$senha}' WHERE id = {$id}";
        $conexao = criarConexao();
        $resultado = mysqli_query($conexao, $sql);
        fecharConexao($conexao);
		if($resultado == 1){
			$situacao = TRUE;
        }        
        return $situacao;
    }	
    
    function excluirUsuario($id){
        $situacao = FALSE;        
        $sql = "DELETE FROM tbUsuario WHERE id = {$id};";
        $conexao = criarConexao();
        $resultado = mysqli_query($conexao, $sql);
        fecharConexao($conexao);
		if($resultado == 1){
			$situacao = TRUE;
        }        
        return $situacao;
    }     

    function buscarUsuario($id){  

        $sql = "SELECT * FROM tbUsuario WHERE id = {$id};";
        $conexao = criarConexao();
        $resultado = mysqli_query($conexao, $sql);
        $registro = mysqli_fetch_array($resultado); 
        fecharConexao($conexao);
        
        return $registro;
    } 

    function listarUsuario(){

        $sql = "SELECT * FROM tbUsuario;";
        $conexao = criarConexao();
        $resultado = mysqli_query($conexao, $sql);
        fecharConexao($conexao);

        return $resultado;
    }   

    function autenticarUsuario($login, $senha){
        $situacao = FALSE;        
        $sql = "SELECT * FROM tbUsuario WHERE login = '{$login}' AND senha = '{$senha}';";
        $conexao = criarConexao();
        $resultado = mysqli_query($conexao, $sql);
        fecharConexao($conexao);
        $quantidade = mysqli_num_rows($resultado);
		if($quantidade == 1){
			$situacao = TRUE;
        }        
        return $situacao;
    }     
    
    function uploadArquivo($arquivo, $nomeArquivo){
        
        if( strlen($nomeArquivo) < 1){
            $extensao = explode('.', $arquivo['name']);
            $extensao = end($extensao);
            $nomeArquivo = uniqid() . '.' . $extensao;
        }

        move_uploaded_file($arquivo["tmp_name"],"arquivos/" . $nomeArquivo);

        return $nomeArquivo;
    }   
    
    function verificarLogin($id, $login){
        $situacao = TRUE;        
        $sql = "SELECT * FROM tbUsuario WHERE login = '{$login}' AND id <> {$id}";	
        $conexao = criarConexao();
        $resultado = mysqli_query($conexao, $sql);
        fecharConexao($conexao);
        $quantidade = mysqli_num_rows($resultado);
		if($quantidade == 1){
			$situacao = FALSE;
        }        
        return $situacao;
    }     
   
?>	