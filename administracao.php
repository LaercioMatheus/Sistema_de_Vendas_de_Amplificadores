<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Administração</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
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
			<!--CONEXAO COM O SCRIPT DO JAVASCRIPT-->
			<!-- CONEXAO COM OS FRAMEWORKS -->
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
			<script src="js/logout.js"></script>

		</header>
		<!--OS breadcrumb DO SITE-->
		<?php include "breadcrumb.php"; ?>

		<div id="conteudo_especifico">

			<p>
			<h2>Sistema de Controle de Estoque e Venda de Amplificadores da <strong>Rock N´ Rol Amplificadores</strong></h2>
			</p>

			<!-- CARDS PARA MOSTRAR OS AMPLIFICADORES PARA A VENDA, OS MAIS VENDIDOS ETC -->
			<div class="row row-cols-1 row-cols-md-3 g-2">
				<div class="col">
					<div class="card h-100">
						<img src="img/img_amplificadores/baixo_ampeg_ba110.jpg" class="card-img-top" alt="Imagem do amplificador Ampeg BA110">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
						<div class="card-footer">
							<small class="text-body-secondary">Last updated 3 mins ago</small>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100">
						<img src="img/img_amplificadores/baixo_ampeg_ba108.jpg" class="card-img-top" alt="Imagem do amplificador Ampeg BA108">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
						</div>
						<div class="card-footer">
							<small class="text-body-secondary">Last updated 3 mins ago</small>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100">
						<img src="img/img_amplificadores/baixo_staner_bx200a.jpg" class="card-img-top" alt="Imagem do amplificador Staner BX200A">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
						</div>
						<div class="card-footer">
							<small class="text-body-secondary">Last updated 3 mins ago</small>
						</div>
					</div>
				</div>
			</div>
			<!-- FIM DOS CARDS DE AMOSTRA -->

		</div>
		<div id="footer">
			<div id="texto_institucional">
				<p><a href="#">AMPLIFIC - CONTROL</a></p>
				<p>GitHub: <a href="#">LaercioMatheus</a> - LinkedIn: <a href="#">LaercioMatheus</a> - Fone: <a href="#">(61) 99329 - 9400</a></p>
				<p>Address: <a href="#">Rua do Rock, 666</a> - E-mail: <a href="#">Laercioestudante17@gmail.com</a></p>
			</div>
			<div class="container_copy">
				<h6>Amplificadores Rock N’ Roll &copy; 2025 - Todos os direitos reservados</h6>
			</div>
		</div>
	</div>
</body>

</html>