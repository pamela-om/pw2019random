<?php
    function criarConexao(){
        $conexao = mysqli_connect("localhost", "root", "","roteiro6");	             
		if(!$conexao) { 
			echo 'Falha ao conectar: '.mysqli_error();
		}
        return $conexao;
    }
    function fecharConexao($conexao){
        mysqli_close($conexao);
    }
?>