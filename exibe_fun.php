<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dados dos Usuários</title>
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" type="text/css" href="css/style_form.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/logout.css">
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

			$codigo = $_GET["codigo"];

			//PESQUISANDO OS DADOS DENTRO DO BANCO DE DADOS
			$sql_pesquisa = "SELECT
										Nome_FUN, Login_FUN, Funcao_FUN, Status_FUN
									FROM 
										funcionarios
									WHERE
										Cod_FUN = '$codigo'";

			#ONDE ESTA A TABELA VINDA DO BANCO DE DADOS
			$tabela_resultado = mysqli_query($conectar, $sql_pesquisa);
			$registro = mysqli_fetch_row($tabela_resultado);
			?>

			<!-- Inicio da div de visualizar as informações dos funcionários -->
			<div class="container_info shadow p-3 mb-5 rounded">
				<div class="form_header">
					<h2>Informações do usuário</h2>
				</div>
				<form>
					<div class="mb-3 row">
						<label for="staticNome" class="col-sm-2 col-form-label">Nome:</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="staticNome" value="<?php echo "$registro[0]"; ?>" disabled readonly>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="staticAcesso" class="col-sm-2 col-form-label">Acesso:</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="staticAcesso" value="<?php echo "$registro[1]"; ?>" disabled readonly>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="staticFuncao" class="col-sm-2 col-form-label">Função:</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="staticFuncao" value="<?php echo "$registro[2]"; ?>" disabled readonly>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="staticStatus" class="col-sm-2 col-form-label">Status:</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="staticStatus" value="<?php echo "$registro[3]"; ?>" disabled readonly>
						</div>
					</div>

				</form>
			</div>

			<a class="btn btn-secondary" href="javascript:history.back()">Voltar</a>
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
	<script src="js/logout.js"></script>
</body>

</html>