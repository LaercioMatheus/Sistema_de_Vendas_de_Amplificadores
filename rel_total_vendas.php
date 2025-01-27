<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Relatório de Total de Vendas</title>
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
			<div class="container_info shadow p-3 mb-5 rounded">
				<div class="form_header">
					<h2>Relatório Total de Vendas</h2>
				</div>
				<?php
				//CONECCAO COM O BANCO DE DADOS
				$conectar = mysqli_connect("localhost", "root", "", "35936x");
				//PESQUISANDO OS DADOS DENTRO DO BANCO DE DADOS
				$sql_pesquisa_total_vendas = "SELECT
											Preco_AMP
										FROM
											amplificadores
										WHERE
											Fila_Compra_AMP = 'V'";
				#ONDE ESTA A TABELA VINDA DO BANCO DE DADOS
				$sql_resultado_consulta = mysqli_query($conectar, $sql_pesquisa_total_vendas);
				$valor_total = 0;
				while ($registro_total_vendas = mysqli_fetch_row($sql_resultado_consulta)) {
					$valor_total += $registro_total_vendas[0];
				}
				?>
				<div class="mb-3 row">
					<label for="staticTotal" class="col-sm-10 col-form-label">Total de vendas até o momento:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="staticTotal" value="<?php echo number_format($valor_total, 2, ',', '.'); ?>" disabled readonly>
					</div>
				</div>

				<div class="d-grid gap-2 d-md-block">
					<a class="btn btn-secondary" href="relatorios.php">Voltar</a>
					<a class="btn btn-outline-secondary" href="#">Imprimir</a>
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
</body>

</html>