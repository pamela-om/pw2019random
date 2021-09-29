		<div class="cabecalho">
			<nav class="navbar navbar-expand-md navbar-dark bg-dark">
				<div class="collapse navbar-collapse" id="navbarsExampleDefault">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item <?php if($pagina=='Principal'){echo 'active';}?>">
						<a class="nav-link" href="Principal.php">Início</a>
						</li>
						<li class="nav-item <?php if($pagina=='Usuario'){echo 'active';}?>">
						<a class="nav-link" href="UsuarioTabela.php">Usuário</a>
						</li>
					</ul>
					<div class="form-inline my-2 my-lg-0">
						<label class="form-control mr-sm-2" readonly> Nome do Usuário </label>
						<a class="btn btn-outline-danger my-2 my-sm-0" href="Login.php">Sair</a>
					</div>
				</div>
			</nav>
		</div>		

