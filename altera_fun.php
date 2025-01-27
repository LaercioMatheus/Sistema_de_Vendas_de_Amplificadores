<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Alterar Usuários</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/logout.css">
	<link rel="stylesheet" type="text/css" href="css/style_form.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v4.7.0/css/font-awesome-css.min.css"> -->
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
			<?php

			//CONECCAO COM O BANCO DE DADOS
			$conectar = mysqli_connect("localhost", "root", "", "35936x");
			$cod = $_GET["codigo"];

			//PESQUISANDO OS DADOS DENTRO DO BANCO DE DADOS
			$sql_pesquisa = "SELECT
								Nome_FUN, Funcao_FUN, Login_FUN, Senha_FUN, Status_FUN
							FROM 
								funcionarios
							WHERE
								Cod_FUN = '$cod'";

			$resultado_pesquisa = mysqli_query($conectar, $sql_pesquisa);

			$registro = mysqli_fetch_row($resultado_pesquisa);

			?>

			<!--INICIO DO FORMULARIO-->
			<div class="form_container shadow p-3 mb-5 rounded">
				<div class="form_header">
					<h2>Alterar informações</h2>
				</div>

				<form method="post" action="processa_altera_fun.php" id="form" class="form">
					<input type="hidden" name="codigo" value="<?php echo $cod; ?>">
					<?php
					if ($registro[1] == "administrador") {
					?>

						<div class="form_control">
							<input type="hidden" name="funcao" value="<?php echo $registro[1]; ?>">
							<label for="senha">Senha: </label>
							<input type="password" name="senha" id="senha" value="<?php echo $registro[3]; ?>" required>

							<i class="fas fa-exclamation-circle"></i>
							<i class="fas fa-check-circle"></i>

							<small>Mensagem de erro</small>
						</div>

						<script>
							/*SCRIPT DE VALIDAÇÃO DOS CAMPOS PARA VER SE ESTÃO VAZIO OU TEM VALOR*/

							const form = document.getElementById('form');
							const password = document.getElementById('senha');

							form.addEventListener('submit', (e) => {
								if (!checkInputs()) {
									e.preventDefault(); // Impede o envio do formulário se houver erros
								}
							});

							function checkInputs() {
								let isValid = true; // Variável para verificar se todos os campos são válidos

								const passwordValue = password.value.trim();

								if (passwordValue === '') {
									setErrorFor(password, "A senha de acesso é obrigatória.");
									isValid = false;
								} else {
									setSuccessFor(password);
								}

								return isValid;
							}

							function setErrorFor(input, message) {
								const formControl = input.parentElement;
								const small = formControl.querySelector('small');

								// Adicionar a mensagem de erro
								small.innerText = message;

								// Adicionar a classe de erro
								formControl.className = "form_control error";
							}

							function setSuccessFor(input) {
								const formControl = input.parentElement;

								// Adicionar a classe de sucesso
								formControl.className = "form_control success";
							}
						</script>
					<?php
					} else {
					?>
						<div class="form_control">
							<label for="nome">Nome Completo: </label>
							<input type="text" name="nome" id="nome" value="<?php echo $registro[0]; ?>" required>

							<i class="fas fa-exclamation-circle"></i>
							<i class="fas fa-check-circle"></i>

							<small>Mensagem de erro</small>
						</div>
						<div class="form_control" id="style_funcao">
							<label for="estoquista">Função: </label>
							<label for="estoquista">Estoquista </label>
							<input type="radio" name="funcao" value="estoquista" id="estoquista"
								<?php
								/* CONDICAO PARA COLOCAR O CHECKED NO INPUT */
								if ($registro[1] == "estoquista") {
									echo "checked";
								}
								?>>

							<label for="vendedor">Vendedor </label>
							<input type="radio" name="funcao" value="vendedor" id="vendedor"
								<?php
								/* CONDICAO PARA COLOCAR O CHECKED NO INPUT */
								if ($registro[1] == "vendedor") {
									echo "checked";
								}
								?>>
						</div>
						<div class="form_control">
							<label for="login">Login: </label>
							<input type="text" name="login" id="login" value="<?php echo $registro[2]; ?>" required>

							<i class="fas fa-exclamation-circle"></i>
							<i class="fas fa-check-circle"></i>

							<small>Mensagem de erro</small>
						</div>
						<div class="form_control">
							<label for="senha">Senha: </label>
							<input type="password" name="senha" id="senha" value="<?php echo $registro[3]; ?>" required>

							<i class="fas fa-exclamation-circle"></i>
							<i class="fas fa-check-circle"></i>

							<small>Mensagem de erro</small>
						</div>

						<div class="form_control">
							<label for="status">Status: </label>
							<select name="status">
								<option value="ativo"
									<?php
									if ($registro[4] == "Ativo") {
										echo "selected";
									}
									?>> Ativo
								</option>
								<option value="inativo"
									<?php
									if ($registro[4] == "Inativo") {
										echo "selected";
									}
									?>> Inativo
								</option>
							</select>
						</div>
					<?php
					}
					?>
					<button type="submit" class="style-button">Alterar Funcionário</button>
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

	<!--CONEXAO COM O SCRIPT DO JAVASCRIPT-->
	<!-- CONEXAO COM OS FRAMEWORKS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="js/script_altera_fun.js"></script>
</body>

</html>