<html>
    <head>
		<meta charset="utf-8">
		<title>Login</title>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
		<link type="text/css" rel="stylesheet" href="css/login.css"/>
    </head>

    <body>	

		<form id="formLogin" action="LoginAutenciar.php" method="post">
			<div class="container">
				<div class="row form-group">
					<div class="col-md-12">
						<label for="login">Usuário</label>  
						<input class="form-control" name="login" id="login" type="text">
					</div>			
				</div>
				<div class="row form-group">
					<div class="col-md-12">
						<label for="senha">Senha</label>
						<input class="form-control" id="senha" name="senha" type="password">
					</div>			
				</div>	

				<div class="row form-group">				
						<div class="col-md-4"> 
							<a class="btn btn-primary float-left" href="Principal.php">Cadastrar</a>	
						</div>					
						<div class="col-md-8"> 
							<button type="reset"  class="btn btn-danger float-right">Cancelar</button>	
							<button type="submit" class="btn btn-success float-right mx-1">Login</button>	
						</div>											
				</div>	
				
			</div>
		</form >	
	
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery.validate.js"></script>
		<script type="text/javascript" src="js/usuario.js"></script>
    </body>
</html>