<?php	
		require_once('UsuarioBiblioteca.php');	
	
		$usuarios = listarUsuario();	
?>
<html>
    <head>
		<meta charset="utf-8">
		<title>Usuário</title>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
		<link type="text/css" rel="stylesheet" href="css/usuario.css"/>
		
    </head>

  	<body>
			<?php	
				$pagina = "Usuario";				
				require_once('Menu.php'); 
			?>
			<div class="container">	
				
				<a class="btn btn-primary float-right" href="UsuarioFormulario.php">Novo</a>			

				<table id="tabelaUsuario" class="table table-striped">
					<thead>			
						<tr class='row'>
							<th class='col-md-1'></th>
							<th class='col-md-5'>Usuário</th>
							<th class='col-md-4'>E-mail</th> 
							<th class='col-md-2'></th>
						</tr>
					</thead>
					<tbody>
						<?php
								foreach($usuarios as $usuario){		
									echo"<tr class='row'>";	
									echo"<td class='col-md-1 ' align='center'> <img class='imagem' src='arquivos/".$usuario['foto']."'></td>";
									echo"<td class='col-md-5'> ".$usuario['login']." </td>";
									echo"<td class='col-md-4'> ".$usuario['email']." </td>";		
									echo "<td class='col-md-2'> <a class='btn btn-success float-right' href='UsuarioFormulario.php?id={$usuario['id']}'>Editar</a> <a class='btn btn-danger float-right mx-1' href='UsuarioExcluir.php?id={$usuario['id']}'>Excluir</a> </td>";					
									echo"</tr>";					
								}
						?>		
					</tbody>
				</table>	
			<div>				
			
			<script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="js/bootstrap.js"></script>
			<script type="text/javascript" src="js/jquery.validate.js"></script>
			<script type="text/javascript" src="js/jquery.mask.js"></script>		
			<script type="text/javascript" src="js/usuario.js"></script>
			
    </body>
</html>