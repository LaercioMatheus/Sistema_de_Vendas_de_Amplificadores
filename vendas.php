<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vendas</title>
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
		</header>
		<!--OS breadcrumb DO SITE-->
		<?php include "breadcrumb.php"; ?>

		<div id="conteudo_especifico">
			<div class="table_container">
				<?php
				//CONECCAO COM O BANCO DE DADOS
				$conectar = mysqli_connect("localhost", "root", "", "35936x");
				//PESQUISANDO OS DADOS DENTRO DO BANCO DE DADOS
				$sql_pesquisa = "SELECT
									Cod_AMP, Marca_AMP, Modelo_AMP, Tipo_AMP, Preco_AMP
								FROM
									amplificadores
								WHERE
									Fila_Compra_AMP = 'N'";
				$resultado_consulta = mysqli_query($conectar, $sql_pesquisa);
				?>
				<table class="table table-striped table-hover caption-top table-md align-middle shadow p-3 mb-5 bg-body-tertiary rounded">
					<caption>
						<h3>Lista das Vendas</h3>
					</caption>

					<thead>
						<tr>
							<th>MARCA</th>
							<th>MODELO</th>
							<th>TIPO</th>
							<th>PREÇO</th>
							<th>AÇÃO</th>
						</tr>
					</thead>
					<?php
					while ($registro = mysqli_fetch_row($resultado_consulta)) {
					?>
						<tr>
							<td>
								<?php echo $registro[1]; ?>
								<!--MARCA-->
							</td>
							<td>
								<!--MODELO-->
								<!--ISSO É CASO ESSA LINHA DA TABELA FOR UM LINK-->
								<a href="exibe_amp.php?codigo=<?php echo $registro[0]; ?>">
									<?php echo $registro[2]; ?>
								</a>
							</td>
							<td>
								<!--TIPO-->
								<?php echo $registro[3]; ?>
							</td>
							<td>
								<!--PREÇO-->
								<?php echo $registro[4]; ?>
							</td>
							<td>
								<!--AÇÃO-->
								<a href="processa_fila_compras.php?codigo=<?php echo $registro[0]; ?>">
									Colocar na fila de compras
								</a>
							</td>
						</tr>

					<?php
					}
					?>
				</table>

				<!-- Parte dos botões de redirecionar o usuário -->
				<div class="d-grid gap-2 d-md-block">
					<a class="btn btn-primary" href="ver_fila_compras.php">Ver a fila de compras</a>

					<a class="btn btn-secondary" href="lista_amp.php">Voltar para lista de amplificadores</a>
				</div>

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
	</div>

	<!--CONEXAO COM O SCRIPT DO JAVASCRIPT-->
	<!-- CONEXAO COM OS FRAMEWORKS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>