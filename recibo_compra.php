<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Recibo da compra</title>
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

		<div id="conteudo_especifico">

			<div class="table_container">
				<h2>Recibo da Compra</h2>
				<?php
				//CONECCAO COM O BANCO DE DADOS
				$conectar = mysqli_connect("localhost", "root", "", "35936x");
				// Pegando a data do sistema
				$data = date('d/m/Y');
				$cod_fun = $_SESSION['codigo'];
				//INSERINDO OS DADOS DENTRO DO BANCO DE DADOS
				$sql_registro_vendas = "INSERT INTO vendas (Data_VEND, Funcionarios_Cod_FUN)
										VALUES
											('$data', '$cod_fun')";
				$resultado_registro_vendas = mysqli_query($conectar, $sql_registro_vendas);
				$sql_consulta_ultima_venda = "SELECT
												Cod_VEND
											FROM
												vendas
											ORDER BY Cod_VEND DESC LIMIT 1";
				$resultado_consulta = mysqli_query($conectar, $sql_consulta_ultima_venda);
				$registro_cod_ven = mysqli_fetch_row($resultado_consulta);
				$sql_codigo_venda_em_amp = "UPDATE
												amplificadores
											SET
												Vendas_Cod_VEND = '$registro_cod_ven[0]', Fila_Compra_AMP = 'V'
											WHERE
												Fila_Compra_AMP = 'S'";
				$resultado_alteracao_amp = mysqli_query($conectar, $sql_codigo_venda_em_amp);
				$sql_consulta_recibo = "SELECT
											Marca_AMP, Modelo_AMP, Preco_AMP
										FROM
											amplificadores
										WHERE
											Vendas_Cod_VEND = '$registro_cod_ven[0]'";
				$resultado_consulta = mysqli_query($conectar, $sql_consulta_recibo);
				echo "<p> Vendas nº: $registro_cod_ven[0]</p>";
				echo "<p> Data: $data</p>";
				?>
				
				<table class="table table-striped table-hover caption-top table-md align-middle shadow p-3 mb-5 bg-body-tertiary rounded">
					<thead>
						<tr>
							<td>MARCA</td>
							<td>MODELO</td>
							<td>PREÇO</td>
						</tr>
					</thead>
					<?php
					$valor_total = 0;
					while ($registro = mysqli_fetch_row($resultado_consulta)) {
					?>
						<tbody>
							<tr>
								<td><?php echo $registro[0]; ?></td>
								<td><?php echo $registro[1]; ?></td>
								<td><?php echo $registro[2]; $valor_total += $registro[2]; ?></td>
							</tr>
						</tbody>
					<?php
					}
					?>
				</table>
				<p>Valor Total: <?php echo $valor_total; ?></p>
				<a class="btn btn-outline-success" href="vendas.php">Fechar recibo</a>
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