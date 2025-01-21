<!DOCTYPE html>
<html lang="pt-br">
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style_index.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
	<!-- <script src="https://kit.fontawesome.com/9d909e1de7.js" crossorigin="anonymous"></script> -->
</head>

<body>
	<div id="container">
		<header id="header">
			<div id="logo">
				<!--LOGO DO SITE DENTRO DA img PORQUE É UMA IMAGEM-->
				<a href="index.php"><img class="logo" src="img/img_project/rock_n_roll.png" alt="Logo do Sistema de Amplificadores"></a>
			</div>
		</header>
		<div id="conteudo_especifico">
			<div class="container_title">
				<h1 class="title_form">Acesso à Área Restrita</h1>
			</div>

			<div class="form-container">
				<div class="form-header">
					<h2>Fazer Login</h2>
				</div>

				<form method="post" action="processa_login.php" id="form" class="form">
					<div class="form-control">
						<label for="login">Login: </label>
						<input type="text" id="login" name="login" placeholder="Informe seu usuário..." required>

						<i class="fas fa-exclamation-circle"></i>
						<i class="fas fa-check-circle"></i>

						<small>Mensagem de erro</small>
					</div>
					<div class="form-control">
						<label for="senha">Senha: </label>
						<input type="password" id="senha" name="senha" placeholder="Informe sua senha..." required>

						<i class="fas fa-exclamation-circle"></i>
						<i class="fas fa-check-circle"></i>

						<small>Mensagem de erro</small>
					</div>

					<button type="submit" class="style-button">Entrar</button>
				</form>
			</div>

		</div>
		<div id="footer">
			<div id="texto_institucional">
				<p><a href="#">AMPLIFIC - CONTROL</a></p>
				<p>GitHub: <a href="github.com/LaercioMatheus">LaercioMatheus</a> - LinkedIn: <a href="https://www.linkedin.com/in/laércio-matheus-87806b266">LaercioMatheus</a> - Fone: <a href="#">(61) 99329 - 9400</a></p>
				<p>Address: <a href="#">Rua do Rock, 666</a> - E-mail: <a href="#">Laercioestudante17@gmail.com</a></p>
			</div>
			<div class="container_copy">
				<h6>Amplificadores Rock N’ Roll &copy; 2025 - Todos os direitos reservados</h6>
			</div>
		</div>
	</div>
	<!--CONEXAO COM O SCRIPT DO JAVASCRIPT-->
	<!-- CONEXAO COM OS FRAMEWORKS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="js/script_login.js"></script>
</body>

</html>