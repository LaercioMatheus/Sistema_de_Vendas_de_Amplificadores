<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fila de Vendas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
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
											Fila_Compra_AMP = 'S'";
				$resultado_consulta = mysqli_query($conectar, $sql_pesquisa);
				?>

				<table class="table table-striped table-hover caption-top table-md align-middle shadow p-3 mb-5 bg-body-tertiary rounded">
					<caption>
						<h2>Ver filas de Compras</h2>
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
					$valor_total = 0;
					while ($registro = mysqli_fetch_row($resultado_consulta)) {
					?>
						<tr>
							<!--MARCA-->
							<td>
								<?php echo $registro[1]; ?>
							</td>

							<!--MODELO-->
							<td>
								<!--ISSO É CASO ESSA LINHA DA TABELA FOR UM LINK-->
								<a class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="exibe_amp.php?codigo=<?php echo $registro[0]; ?>">
									<?php echo $registro[2]; ?>
								</a>
							</td>

							<!--TIPO-->
							<td>
								<?php echo $registro[3]; ?>
							</td>

							<!--PREÇO-->
							<td>
								<?php echo $registro[4];
								$valor_total += $registro[4]; ?>
							</td>

							<!--AÇÃO-->
							<td>
								<a class="btn btn-outline-warning" href="processa_retira_fila_compras.php?codigo=<?php echo $registro[0]; ?>" title="Retirar da fila de vendas"><i class="fas fa-times"></i> Retirar da fila de vendas</a>
							</td>
						</tr>

					<?php
					}
					?>
				</table>


				<div class="d-grid gap-2 d-md-block">
					<p>Valor total da venda: <?php echo $valor_total; ?> </p>
					<a class="btn btn-success" href="recibo_compra.php">Finalizar venda</a>
					<a class="btn btn-secondary" href="vendas.php">Voltar a seleção de amplificadores</a>
				</div>
			</div>
		</div>

		<!-- Cabeçalho do site -->
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

	<!--CONEXAO COM O SCRIPT DO JAVASCRIPT-->
	<!-- CONEXAO COM OS FRAMEWORKS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>