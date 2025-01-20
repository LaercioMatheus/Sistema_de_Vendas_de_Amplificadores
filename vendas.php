<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vendas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
</head>

<body>
	<div id="container">
		<header id="header">
			<div id="identific">
				<!--LOGO DO SITE DENTRO DA img PORQUE É UMA TAG DE IMAGEM-->
				<a href="index.php"><img class="logo" src="img/img_project/rock_n_roll.png" alt="Logo do Sistema de Amplificadores"></a>

				<span id="cred_global"> Olá <?php include "valida_login.php"; ?></span>
			</div>

			<nav class="navbar">
				<?php include "menu_local.php"; ?>
			</nav>
		</header>
		<!--OS breadcrumb DO SITE-->
		<?php include "breadcrumb.php"; ?>

		<div id="conteudo_especifico">
			<div class="table-container">
				<h2> VENDAS </h2>
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
				<table>
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
			</div>
			<p> <a href="ver_fila_compras.php"> Ver a fila de compras </a> </p>
			<?php
			if ($_SESSION["funcao"] == "vendedor") {
				echo "";
			?>
			<?php
			} else {
			?>
				<p> <a href="lista_amp.php"> Voltar para lista de amplificadores </a> </p>
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