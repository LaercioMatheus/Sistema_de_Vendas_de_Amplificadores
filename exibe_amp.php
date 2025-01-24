<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exibe Amplificadores</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" type="text/css" href="css/style_form.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/logout.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v4.7.0/css/font-awesome-css.min.css"> -->
</head>

<body>
	<div id="container_global">
		<header id="nav_header">
			<div id="header_main">
				<!--A IMAGEM DO SITE TEM QUE TER ESSES PARAMETROS PARA SER RESPONSIVA EM DETERMINADAS TAMANHOS DE TELAS-->
				<!--srcset="imagem-pequena.jpg 300w, imagem-media.jpg 600w" sizes="(max-width: 600px) 300px, (max-width: 1200px) 600px, 1200px"-->
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

			$codigo_amp = $_GET["codigo"];

			//PESQUISANDO OS DADOS DENTRO DO BANCO DE DADOS
			$sql_pesquisa = "SELECT
										Marca_AMP, Modelo_AMP, Tipo_AMP, Preco_AMP, Foto_AMP
									FROM
										amplificadores
									WHERE
										Cod_AMP = '$codigo_amp'";

			#ONDE ESTA A TABELA VINDA DO BANCO DE DADOS
			$tabela_resultado = mysqli_query($conectar, $sql_pesquisa);

			$registro_amp = mysqli_fetch_row($tabela_resultado);

			?>
			<div class="container_info shadow p-3 mb-5 rounded">
				<div class="form_header">
					<h2>Informações do Amplificador</h2>
				</div>

				<div class="mb-3 row">
					<label for="staticImagem" class="col-sm-2 col-form-label">Imagem:</label>
					<div class="col-sm-9">
						<img src="<?php echo $registro_amp[4]; ?>" id="staticImagem" class="foto_amplic" alt="Foto do Amplificador">
					</div>
				</div>

				<div class="mb-3 row">
					<label for="staticMarca" class="col-sm-2 col-form-label">Marca:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="staticMarca" value="<?php echo "$registro_amp[0]"; ?>" disabled readonly>
					</div>
				</div>

				<div class="mb-3 row">
					<label for="staticModelo" class="col-sm-2 col-form-label">Modelo:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="staticModelo" value="<?php echo "$registro_amp[1]"; ?>" disabled readonly>
					</div>
				</div>

				<div class="mb-3 row">
					<label for="staticTipo" class="col-sm-2 col-form-label">Tipo:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="staticTipo" value="<?php echo "$registro_amp[2]"; ?>" disabled readonly>
					</div>
				</div>

				<div class="mb-3 row">
					<label for="staticPreco" class="col-sm-2 col-form-label">Preço:</label>
					<div class="col-sm-9">
						<input type="number" class="form-control" id="staticPreco" value="<?php echo "$registro_amp[3]"; ?>" disabled readonly>
					</div>
				</div>
			</div>

			<?php
			/* CONDIÇÕES PARA APARECER O BOTÃO DE VOLTAR NA PÁGINA DE EXIBIÇÃO */
			if ($_SESSION["funcao"] == "administrador") {
			?>
				<a class="btn btn-secondary" href="lista_amp.php">Voltar</a>
			<?php
			} elseif ($_SESSION["funcao"] == "vendedor") {
			?>
				<a class="btn btn-secondary" href="vendas.php"> Voltar </a>
			<?php
			} else {
			?>
				<a class="btn btn-secondary" href="lista_amp.php"> Voltar </a>
			<?php
			}
			?>
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