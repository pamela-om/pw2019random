<?php	
	require_once('UsuarioBiblioteca.php');

	$id = 0;
	$login = "";
	$senha = "";
	$email = "";
	$foto = "";

	if(isset($_GET["id"])){
			 $usuario = buscarUsuario($_GET["id"]);
			 $id = $usuario['id'];
			 $login = $usuario['login'];
			 $senha = $usuario['senha'];
			 $email = $usuario['email'];	
			 $foto = $usuario['foto'];
	}

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

				<form id="formUsuario" action="UsuarioSalvar.php" method="post" enctype="multipart/form-data">
					<div class="row form-group">
						<div class="col-md-12">
							<label for="login">Usuário</label>  
							<input type="hidden" name="id" id="id" value="<?php echo $id;?>" >
							<input class="form-control" name="login" id="login" type="text" value="<?php echo $login ?>" required>
						</div>			
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label for="senha">Senha</label>
							<input class="form-control" id="senha" name="senha" type="password" value="" <?php if($id!=0){echo 'readonly';} ?>  required>
						</div>			
					</div>	

					<div id="areaNovaSenha" class="row form-group form-check" <?php if($id==0){echo 'style="display: none";';} ?>>
						<div class="col-md-12">
							<input type="checkbox" class="form-check-input" id="novaSenha" name="novaSenha" onchange="controlarSenha()" <?php if($id==0){echo 'checked ';} ?> value="1" >
							<label class="form-check-label" for="novaSenha">Alterar senha</label>
						</div>						
					</div>	
				
					<div class="row form-group">
						<div class="col-md-12">
							<label for="email">E-mail</label>
							<input class="form-control" id="email" name="email" type="text" value="<?php echo $email ?>" required>
						</div>			
					</div>	

					<div class="row form-group">
						<div class="col-md-12">
							<label for="foto">Foto</label>
							<input class="form-control" id="foto" name="foto" type="file" accept="image/png, image/jpeg">
						</div>			
					</div>

					<div class="row form-group">
							<div class="col-md-12"> 
								<a class="btn btn-primary" href="UsuarioTabela.php">Voltar</a>
								<button type="reset"  class="btn btn-danger float-right">Cancelar</button>	
								<button type="submit" class="btn btn-success float-right mx-1">Salvar</button>	
							</div>											
					</div>					
				</form >
			</div>
		<body>
			
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery.validate.js"></script>
		<script type="text/javascript" src="js/jquery.mask.js"></script>		
		<script type="text/javascript" src="js/usuario.js"></script>
    </body>
</html>