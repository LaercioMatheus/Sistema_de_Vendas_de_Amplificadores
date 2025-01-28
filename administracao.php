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
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v4.7.0/css/font-awesome-css.min.css"> -->
</head>

<body>
	<div id="container_global">
		<header id="nav_header">
			<div id="header_main">
				<!--LOGO DO SITE DENTRO DA img PORQUE É UMA TAG DE IMAGEM-->
				<a href="administracao.php"><img class="logo" src="img/img_project/rock_n_roll.png" alt="Logo do Sistema de Amplificadores"></a>

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

		<div id="conteudo_especifico">
			<!-- <h2>Sistema de Controle de Estoque e Venda de Amplificadores da <strong>Rock N´ Rol Amplificadores</strong></h2> -->

			<h3>Amplific Control - <strong>Rock N´ Rol Amplificadores</strong></h3>

			<!-- CARDS PARA MOSTRAR OS AMPLIFICADORES PARA A VENDA, OS MAIS VENDIDOS ETC -->
			<!-- TENHO QUE IMPLEMENTAR ESSA PARTE DE MOSTRAR OS AMPLIFICADORES DINAMICAMENTE JUNTO COM O BANCO DE DADOS -->
			<!-- JUNTO COM UMA ROLAGEM LATERAL PARA FICAR PASSANDO DO LONGO DO TEMPO -->
			<!-- ESSA PARTE DEVE SER FEITA EM PHP -->

			<!-- Inicio da amostra dos elemtos do sistema -->
			<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">

					<!-- Slide 1 -->
					<div class="carousel-item active">
						<div class="row">

							<!-- 1 elemento -->
							<div class="col-md-2">
								<div class="card h-100">
									<img src="img/img_amplificadores/guitarra_marshall_code50_transistorizado.png" class="card-img-top" alt="Imagem do amplificador para guitarra Marshall Code50 Transistorizado">
									<div class="card-body">
										<h5 class="card-title">Giutarra Marshall</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
									<div class="card-footer text-center d-grid gap-2 d-md-flex justify-content-md-center">
										<input type="button" class="btn btn-primary" value="Comprar">
										<input type="button" class="btn btn-secondary" value="Detalhes">
									</div>
								</div>
							</div>

							<!-- 2 elemento -->
							<div class="col-md-2">
								<div class="card h-100">
									<img src="img/img_amplificadores/baixo_ampeg_ba110.png" class="card-img-top" alt="Imagem do amplificador para baixo Ampeg BA110">
									<div class="card-body">
										<h5 class="card-title">Baixo Ampeg BA110</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
									<div class="card-footer text-center d-grid gap-2 d-md-flex justify-content-md-center">
										<input type="button" class="btn btn-primary" value="Comprar">
										<input type="button" class="btn btn-secondary" value="Detalhes">
									</div>
								</div>

							</div>

							<!-- 3 elemento -->
							<div class="col-md-2">
								<div class="card h-100">
									<img src="img/img_amplificadores/baixo_staner_bx200a.png" class="card-img-top" alt="Imagem do amplificador para baixo Staner BX200A">
									<div class="card-body">
										<h5 class="card-title">Baixo Staner BX200</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
									<div class="card-footer text-center d-grid gap-2 d-md-flex justify-content-md-center">
										<input type="button" class="btn btn-primary" value="Comprar">
										<input type="button" class="btn btn-secondary" value="Detalhes">
									</div>
								</div>
							</div>

							<!-- 4 elemento -->
							<div class="col-md-2">
								<div class="card h-100">
									<img src="img/img_amplificadores/guitarra_blackstar_ht5r_valvulado.png" class="card-img-top" alt="Imagem do amplificador para guitarra Blackstar HT5R Valvulado">
									<div class="card-body">
										<h5 class="card-title">Guitarra Blackstar</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
									<div class="card-footer text-center d-grid gap-2 d-md-flex justify-content-md-center">
										<input type="button" class="btn btn-primary" value="Comprar">
										<input type="button" class="btn btn-secondary" value="Detalhes">
									</div>
								</div>
							</div>

							<!-- 5 elemento -->
							<div class="col-md-2">
								<div class="card h-100">
									<img src="img/img_amplificadores/guitarra_marshall_code50_transistorizado.png" class="card-img-top" alt="Imagem do amplificador para guitarra Marshall Code50 Transistorizado">
									<div class="card-body">
										<h5 class="card-title">Giutarra Marshall</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
									<div class="card-footer text-center d-grid gap-2 d-md-flex justify-content-md-center">
										<input type="button" class="btn btn-primary" value="Comprar">
										<input type="button" class="btn btn-secondary" value="Detalhes">
									</div>
								</div>
							</div>

							<!-- 6 elemento -->
							<div class="col-md-2">
								<div class="card h-100">
									<img src="img/img_amplificadores/guitarra_vox_ac15_valvulado.png" class="card-img-top" alt="Imagem do amplificador para guitarra Vox AC15 Valvulado">
									<div class="card-body">
										<h5 class="card-title">Guitarra Vox AC15</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
									<div class="card-footer text-center d-grid gap-2 d-md-flex justify-content-md-center">
										<input type="button" class="btn btn-primary" value="Comprar">
										<input type="button" class="btn btn-secondary" value="Detalhes">
									</div>
								</div>
							</div>
						</div>
					</div>


					<!-- Slide 2 -->
					<div class="carousel-item">
						<div class="row">
							<!-- 1 elemento -->
							<div class="col-md-2">
								<div class="card h-100">
									<img src="img/img_amplificadores/baixo_staner_bx200a.png" class="card-img-top" alt="Imagem do amplificador para baixo Staner BX200A">
									<div class="card-body">
										<h5 class="card-title">Baixo Staner BX200a</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
									<div class="card-footer text-center d-grid gap-2 d-md-flex justify-content-md-center">
										<input type="button" class="btn btn-primary" value="Comprar">
										<input type="button" class="btn btn-secondary" value="Detalhes">
									</div>
								</div>
							</div>

							<!-- 2 elemento -->
							<div class="col-md-2">
								<div class="card h-100">
									<img src="img/img_amplificadores/baixo_ampeg_ba108.png" class="card-img-top" alt="Imagem do amplificador para baixo Ampeg BA108">
									<div class="card-body">
										<h5 class="card-title">Baixo Ampeg BA108</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
									<div class="card-footer text-center d-grid gap-2 d-md-flex justify-content-md-center">
										<input type="button" class="btn btn-primary" value="Comprar">
										<input type="button" class="btn btn-secondary" value="Detalhes">
									</div>
								</div>
							</div>

							<!-- 3 elemento -->
							<div class="col-md-2">
								<div class="card h-100">
									<img src="img/img_amplificadores/guitarra_vox_ac15_valvulado.png" class="card-img-top" alt="Imagem do amplificador para guitarra Vox AC15 Valvulado">
									<div class="card-body">
										<h5 class="card-title">Guitarra Vox AC15</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
									<div class="card-footer text-center d-grid gap-2 d-md-flex justify-content-md-center">
										<input type="button" class="btn btn-primary" value="Comprar">
										<input type="button" class="btn btn-secondary" value="Detalhes">
									</div>
								</div>
							</div>

							<!-- 4 elemento -->
							<div class="col-md-2">
								<div class="card h-100">
									<img src="img/img_amplificadores/guitarra_vox_ac15_valvulado.png" class="card-img-top" alt="Imagem do amplificador para guitarra Vox AC15 Valvulado">
									<div class="card-body">
										<h5 class="card-title">Giutarra Vox AC15</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
									<div class="card-footer text-center d-grid gap-2 d-md-flex justify-content-md-center">
										<input type="button" class="btn btn-primary" value="Comprar">
										<input type="button" class="btn btn-secondary" value="Detalhes">
									</div>
								</div>
							</div>

							<!-- 5 elemento -->
							<div class="col-md-2">
								<div class="card h-100">
									<img src="img/img_amplificadores/baixo_ampeg_ba108.png" class="card-img-top" alt="Imagem do amplificador para baixo Ampeg BA108">
									<div class="card-body">
										<h5 class="card-title">Baixo Ampeg BA108</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
									<div class="card-footer text-center d-grid gap-2 d-md-flex justify-content-md-center">
										<input type="button" class="btn btn-primary" value="Comprar">
										<input type="button" class="btn btn-secondary" value="Detalhes">
									</div>
								</div>
							</div>

							<!-- 6 elemento -->
							<div class="col-md-2">
								<div class="card h-100">
									<img src="img/img_amplificadores/guitarra_blackstar_ht5r_valvulado.png" class="card-img-top" alt="Imagem do amplificador para guitarra Blackstar HT5R Valvulado">
									<div class="card-body">
										<h5 class="card-title">Guitarra Blackstar</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
									<div class="card-footer text-center d-grid gap-2 d-md-flex justify-content-md-center">
										<input type="button" class="btn btn-primary" value="Comprar">
										<input type="button" class="btn btn-secondary" value="Detalhes">
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- Controles do Carrossel -->
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Anterior</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Proximo</span>
				</button>
			</div>
		</div>
		<!-- FIM DOS CARDS DE AMOSTRA -->

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