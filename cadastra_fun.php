<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro de Funcionários</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
		<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    </head>
    <body>
        <div id="container">
			<header id="header">
				<div id="identific">
					<!--LOGO DO SITE DENTRO DA img PORQUE É UMA IMAGEM-->
				<a href="index.php"><img class="logo" src="img/img_project/rock_n_roll.png" alt="Logo do Sistema de Amplificadores"></a>

					<span id="cred_global"> Olá <?php include "valida_login.php"; ?></span>
				</div>

				<nav class="navbar">
					<?php include "menu_local.php"; ?>
				</nav>
			</header>
				<!--OS breadcrumb DO SITE-->
				<?php include "breadcrumb.php"; ?>

			<div id="conteudo_especifico">
				
				<h1> CADASTRO DE FUNCIONÁRIOS </h1>
			
				<!--NOVO FORMULARIO-->
				<div class="form-container">
					<form method="post" action="processa_cadastra_fun.php" id="form" class="form">
						<div class="form-control">
							<label for="nome">Nome Completo: </label>
							<input type="text" id="nome" name="nome" placeholder="Digite o nome..." required>

							<i class="fas fa-exclamation-circle"></i>
							<i class="fas fa-check-circle"></i>
							
							<small>Mensagem de erro</small>
						</div>
						<div class="form-control" id="style-funcao">
							<label for="estoquista">Função: </label>
								<label for="estoquista">Estoquista </label>
									<input type="radio" name="funcao" value="estoquista" id="estoquista" checked>

								<label for="vendedor">Vendedor </label>
									<input type="radio" name="funcao" value="vendedor" id="vendedor">
						</div>
						<div class="form-control">
							<label for="login">Login: </label>
							<input type="text" id="login" name="login" placeholder="Digite o login..." required>
							
							<i class="fas fa-exclamation-circle"></i>
							<i class="fas fa-check-circle"></i>
							
							<small>Mensagem de erro</small>
						</div>
						<div class="form-control">
							<label for="senha">Senha: </label>
							<input type="password" id="senha" name="senha" placeholder="Digite a senha..." required>
							
							<i class="fas fa-exclamation-circle"></i>
							<i class="fas fa-check-circle"></i>
							
							<small>Mensagem de erro</small>
						</div>

						<button type="submit" class="style-button">Cadastrar Funcionário</button>
					</form>
				</div>
				<!--CONECCAO COM O SCRIPT DO JAVASCRIPT-->
				<script src="js/script_cadastro_fun.js"></script>

				<p> <a href="lista_fun.php"> Voltar </a> </p>
			</div>
			<div id="footer">
			<div id="texto_institucional">
				<p><a href="#">AMPLIFIC - CONTROL</a></p>
				<p>GitHub: <a href="#">LaercioMatheus</a> - LinkedIn: <a href="#">LaercioMatheus</a> - Fone: <a href="#">(61) 99329 - 9400</a></p>
				<p>Address: <a href="#">Rua do Rock, 666</a> - E-mail: <a href="#">Laercioestudante17@gmail.com</a></p>
			</div>
			<div class="container_copy">
				<h6>&copy; 2024 Amplificadores Rock N’ Roll</h6>
			</div>
		</div>
		</div>
    </body>
</html>