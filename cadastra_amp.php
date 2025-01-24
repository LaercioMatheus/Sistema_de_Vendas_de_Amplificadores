<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cadastro de Amplificadores</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/style_form.css">
	<link rel="stylesheet" type="text/css" href="css/logout.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>

<body>
	<div id="container_global">
		<header id="nav_header">
			<div id="header_main">
				<!--LOGO DO SITE DENTRO DA img PORQUE É UMA TAG DE IMAGEM-->
				<a href="index.php"><img class="logo" src="img/img_project/rock_n_roll.png" alt="Logo do Sistema de Amplificadores"></a>

				<!--INCLUDE DA CREDENCIAL-->
				<p id="identification_user"> Olá <?php include_once("valida_login.php"); ?> </p>
			</div>

			<!--PARTE DO MENU DO SITE-->
			<nav class="navbar_menu">
				<?php include "menu_local.php"; ?>
				<!-- Spinner de Carregamento -->
				<div id="spinner"></div>
			</nav>

			<!--COMEÇO DOS ESTILOS DO MENU RESPONSIVO-->
			<nav class="mobile-menu">

				<!--ICONE DO MENU RESPONSIVO-->
				<div class="button-mobile">
					<div class="line1"></div>
					<div class="line2"></div>
					<div class="line3"></div>
				</div>

				<nav class="nav-list">
					<!--INCLUDE DA CREDENCIAL-->
					<span class="credention"> Olá <?php include "valida_login.php"; ?></span>
					<!--INCLUDE DO MENU-->
					<?php include "menu_local.php"; ?>
				</nav>
			</nav>
		</header>
		<!--OS breadcrumb DO SITE-->
		<?php include "breadcrumb.php"; ?>

		<div class="conteudo_especifico">
			<div class="form_container shadow p-3 m-5 rounded">
				<div class="form_header">
					<h2>Cadastro de Amplificadores</h2>
				</div>

				<!-- Inicio do formulário de cadatro de amplificadores -->
				<!-- sem 'multipart/form-data' o 'input' file nao funciona para mostrar a foto do amplificador -->
				<form method="post" action="processa_cadastra_amp.php" enctype="multipart/form-data" id="form" class="form">
					<div class="form_control">
						<label for="marca">Marca: </label>
						<input type="text" id="marca" name="marca" placeholder="Digite a marca..." required>
						<i class="fas fa-exclamation-circle"></i>
						<i class="fas fa-check-circle"></i>

						<small>Mensagem de erro</small>
					</div>
					<div class="form_control">
						<label for="modelo">Modelo: </label>
						<input type="text" id="modelo" name="modelo" placeholder="Digite o modelo..." required>

						<i class="fas fa-exclamation-circle"></i>
						<i class="fas fa-check-circle"></i>

						<small>Mensagem de erro</small>
					</div>
					<div class="form_control">
						<label for="preco">Preço: </label>
						<input type="number" id="preco" name="preco" placeholder="Digite o preço..." step=".01" min="100" max="10000" required>

						<i class="fas fa-exclamation-circle"></i>
						<i class="fas fa-check-circle"></i>

						<small>Mensagem de erro</small>
					</div>
					<div class="form_control">
						<label for="foto">Foto: </label>
						<input type="file" id="foto" name="foto" required>

						<i class="fas fa-exclamation-circle"></i>
						<i class="fas fa-check-circle"></i>

						<small>Mensagem de erro</small>
					</div>
					<div class="form_control">
						<label for="tipo">Tipo: </label>
						<select name="tipo">
							<option value="guitarra"> Guitarra </option>
							<option value="baixo"> Baixo </option>
							<option value="violao"> Violão </option>
						</select>
					</div>

					<button type="submit" class="style-button">Cadastrar Amplificador</button>
				</form>
			</div>

			<a class="btn btn-secondary" href="javascript:history.back()">Voltar</a>
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

	<!--CONECCAO COM O SCRIPT DO JAVASCRIPT-->
	<!-- CONEXAO COM OS FRAMEWORKS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="js/script_cadastra_amp.js"></script>
</body>

</html>