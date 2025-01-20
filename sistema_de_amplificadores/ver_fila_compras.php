<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Fila de Compras</title>
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
					<h1> VER FILA COMPRAS </h1>
					<?php
						//CONECCAO COM O BANCO DE DADOS
						$conectar = mysqli_connect ("localhost", "root", "", "35936x");
						//PESQUISANDO OS DADOS DENTRO DO BANCO DE DADOS
						$sql_pesquisa = "SELECT
											Cod_AMP, Marca_AMP, Modelo_AMP, Tipo_AMP, Preco_AMP
										FROM
											amplificadores
										WHERE
											Fila_Compra_AMP = 'S'";
						$resultado_consulta = mysqli_query ($conectar, $sql_pesquisa);
					?>
					<table class="style_tabela">
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
							<td>
								<!--MARCA-->
								<?php echo $registro[1]; ?>
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
								<?php
									echo $registro[4];
									$valor_total += $registro[4];
								?>
							</td>
							<td>
								<!--AÇÃO-->
								<a href="processa_retira_fila_compras.php?codigo=<?php echo $registro[0]; ?>">
									Retirar da fila de compras
								</a>
							</td>
						</tr>
						
						<?php
							}
						?>
					</table>
				</div>				
				<p> Total: <?php echo $valor_total; ?> </p>
				<p> <a href="vendas.php"> Voltar a seleção de amplificadores </a> </p>
				<p> <a href="recibo_compra.php"> Finalizar venda </a> </p>						
			</div>	
			<div id="footer">
				<div id="texto_institucional">					
					<h6> AMPLI - CONTROL </h6> 
					<h6> Rua do Rock, 666 -- E-mail: contato@ampli_control.com.br -- Fone: (61) 9966 - 6677 </h6> 
				</div>
			</div>
		</div>
	</body>
</html>