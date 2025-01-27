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
			<?php

			//CONECCAO COM O BANCO DE DADOS
			$conectar = mysqli_connect("localhost", "root", "", "35936x");
			$cod = $_GET["codigo"];

			//PESQUISANDO OS DADOS DENTRO DO BANCO DE DADOS
			$sql_pesquisa = "SELECT
										Nome_FAB, Endereco_FAB, Telefone_FAB, Encarregado_Vendas_FAB, Produto_FAB, Empresa_FAB
									FROM 
										fabricantes
									WHERE
										Cod_FAB = '$cod'";

			$resultado_pesquisa = mysqli_query($conectar, $sql_pesquisa);

			$registro = mysqli_fetch_row($resultado_pesquisa);
			?>

			<!--INICIO DO FORMULARIO-->
			<div class="form_container shadow p-3 mb-5 rounded">
				<div class="form_header">
					<h2>Alterar informações</h2>
				</div>



				<form method="post" action="processa_altera_fab.php" id="form" class="form">
					<input type="hidden" name="codigo" value="<?php echo $cod; ?>">


					<div class="form_control">
						<label for="nome">Nome Completo: </label>
						<input type="text" id="nome" name="nome" value="<?php echo $registro[0]; ?>" required>

						<i class="fas fa-exclamation-circle"></i>
						<i class="fas fa-check-circle"></i>

						<small>Mensagem de erro</small>
					</div>



					<div class="form_control">
						<label for="endereco">Endereço: </label>
						<input type="text" id="endereco" name="endereco" value="<?php echo $registro[1]; ?>" required>

						<i class="fas fa-exclamation-circle"></i>
						<i class="fas fa-check-circle"></i>

						<small>Mensagem de erro</small>
					</div>
					<div class="form_control">
						<label for="telefone">Telefone: </label>
						<input type="text" id="telefone" name="telefone" value="<?php echo $registro[2]; ?>" required>

						<i class="fas fa-exclamation-circle"></i>
						<i class="fas fa-check-circle"></i>

						<small>Mensagem de erro</small>
					</div>
					<div class="form_control">
						<label for="nome_enc">Nome do Encarregado: </label>
						<input type="text" id="nome_enc" name="nome_enc" value="<?php echo $registro[3]; ?>" required>

						<i class="fas fa-exclamation-circle"></i>
						<i class="fas fa-check-circle"></i>

						<small>Mensagem de erro</small>
					</div>
					<div class="form_control" id="style_funcao">
						<label for="guitarra">Tipo de amplificador: </label>
						<label for="guitarra">Guitarra </label>
						<input type="radio" name="produto" value="guitarra" id="guitarra"
							<?php
							if ($registro[4] == "guitarra") {
								echo "checked";
							}
							?>>

						<label for="baixo">Baixo </label>
						<input type="radio" name="produto" value="baixo" id="baixo"
							<?php
							if ($registro[4] == "baixo") {
								echo "checked";
							}
							?>>

						<label for="violao">Violão </label>
						<input type="radio" name="produto" value="violao" id="violao"
							<?php
							if ($registro[4] == "violao") {
								echo "checked";
							}
							?>>
					</div>
					<div class="form_control">
						<label for="nome_emp">Nome da Empresa: </label>
						<input type="text" id="nome_emp" name="nome_emp" value="<?php echo $registro[5]; ?>" required>

						<i class="fas fa-exclamation-circle"></i>
						<i class="fas fa-check-circle"></i>

						<small>Mensagem de erro</small>
					</div>

					<button type="submit" class="style-button">Alterar Fornecedor</button>
				</form>
			</div>
			<!--CONECCAO COM O SCRIPT DO JAVASCRIPT-->
			<script src="js/script_cadastra_fab.js"></script>

			<a class="btn btn-secondary" href="lista_fab.php"> Voltar </a>
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
	</div>
</body>

</html>