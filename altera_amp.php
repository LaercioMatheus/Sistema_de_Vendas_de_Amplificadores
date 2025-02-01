<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Alterar Amplificadores</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/logout.css">
	<link rel="stylesheet" type="text/css" href="css/style_form.css">
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
				<!-- Div do efeito do site quando o usuario sair -->
				<div class="text-center">
					<div id="spinner" class="show-overlay">
						<div class="spinner-border md-5" role="status">
							<span class="visually-hidden">Saindo...</span>
						</div>
					</div>
				</div>
			</nav>

			<!--COMEÇO DOS ESTILOS DO MENU RESPONSIVO-->
			<nav class="mobile_menu">
				<!--ICONE DO MENU RESPONSIVO-->
				<div class="button_mobile">
					<button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileArea" aria-controls="mobileArea"><img src="img/img_project/menu-fechado.png" alt="#" srcset=""></button>
				</div>

				<!-- Essa é a div que irá mostrar o menu vindo do lado de fora da tela -->
				<div class="offcanvas offcanvas-end" tabindex="-1" id="mobileArea" aria-labelledby="mobileAreaLabel">
					<div class="offcanvas-header">
						<!-- Titulo do menu lateral -->
						<h5 class="offcanvas-title" id="mobileAreaRightLabel">Olá <?php include "valida_login.php"; ?></h5>

						<!-- Botão para recolher o menu lateral -->
						<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>

					<!-- Parte do menu sendo mostrada (corpo da div lateral) -->
					<div class="offcanvas-body">
						<!--Incluindo o menu nesse arquivo para não repetir o mesmo código do menu -->
						<?php include "menu_local.php"; ?>
					</div>
				</div>
			</nav>
			<!-- FIM DO MENU RESPONSIVO -->
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
										Marca_AMP, Modelo_AMP, Tipo_AMP, Preco_AMP, Foto_AMP
									FROM 
										amplificadores
									WHERE
										Cod_AMP = '$cod'";

			$resultado_pesquisa = mysqli_query($conectar, $sql_pesquisa);

			$registro = mysqli_fetch_row($resultado_pesquisa);

			?>

			<!--Iicio do formulário de alterar os dados dos amplificadores-->
			<div class="form_container shadow p-3 mb-5 rounded">
				<div class="form_header">
					<h2>Alterar Amplificadores</h2>
				</div>
				<!--sem 'multipart/form-data' o 'input' file nao funciona-->
				<form method="post" action="processa_altera_amp.php" enctype="multipart/form-data" id="form" class="form">
					<input type="hidden" name="codigo" value="<?php echo $cod; ?>">

					<div class="form_control">
						<label for="marca">Marca: </label>
						<input type="text" name="marca" id="marca" value="<?php echo "$registro[0]"; ?>" required>
						<i class="fas fa-exclamation-circle"></i>
						<i class="fas fa-check-circle"></i>

						<small>Mensagem de erro</small>
					</div>
					<div class="form_control">
						<label for="modelo">Modelo: </label>
						<input type="text" name="modelo" id="modelo" value="<?php echo "$registro[1]"; ?>" required>

						<i class="fas fa-exclamation-circle"></i>
						<i class="fas fa-check-circle"></i>

						<small>Mensagem de erro</small>
					</div>
					<div class="form_control">
						<label for="preco">Preço: </label>
						<input type="number" name="preco" id="preco" step=".01" min="100" max="10000" value="<?php echo "$registro[3]"; ?>" required>

						<i class="fas fa-exclamation-circle"></i>
						<i class="fas fa-check-circle"></i>

						<small>Mensagem de erro</small>
					</div>

					<!-- Exibir a foto atual -->
					<label for="foto_atual">Foto Atual: </label>
					<div class="form_control_img" id="foto_atual">
						<?php if (!empty($registro[4])) { ?>
							<img src="<?php echo htmlspecialchars($registro[4]); ?>" alt="Foto Atual" class="foto_amplic" title="<?php echo "$registro[4]"; ?>">
						<?php } ?>
					</div>

					<!--CADASTRAR UMA NOVA FOTO-->
					<div class="form_control">
						<label for="foto">Nova Foto: </label>
						<input type="file" name="foto" id="foto" value="<?php echo "$registro[4]"; ?>" alt="Nova Foto">

						<i class="fas fa-exclamation-circle"></i>
						<i class="fas fa-check-circle"></i>

						<small>Mensagem de erro</small>
					</div>

					<div class="form_control">
						<label for="tipo">Tipo: </label>
						<select name="tipo">
							<option value="guitarra"
								<?php
								if ($registro[2] == "guitarra") {
									echo "selected";
								}
								?>> Guitarra </option>
							<option value="baixo"
								<?php
								if ($registro[2] == "baixo") {
									echo "selected";
								}
								?>> Baixo </option>
							<option value="violao"
								<?php
								if ($registro[2] == "violao") {
									echo "selected";
								}
								?>> Violão </option>
						</select>
					</div>

					<button type="submit" class="style-button">Alterar Amplificador</button>
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
	<script src="js/script_cadastra_amp.js"></script>
</body>

</html>