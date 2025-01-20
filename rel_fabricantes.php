<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Relatório de Fabricantes</title>
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
					<h2> RELATÓRIO DE FABRICANTE </h2>
					<?php
						//CONECCAO COM O BANCO DE DADOS
						$conectar = mysqli_connect ("localhost", "root", "", "35936x");
						//PESQUISANDO OS DADOS DENTRO DO BANCO DE DADOS
						$sql_pesquisar_fab = "SELECT
											Nome_FAB, Encarregado_Vendas_FAB, Produto_FAB, Empresa_FAB
										FROM
											fabricantes";
				
						#ONDE ESTA A TABELA VINDA DO BANCO DE DADOS
						$sql_resultado = mysqli_query($conectar, $sql_pesquisar_fab);
					?>
					
					<table>
						<thead>
							<tr>
								<th>NOME</th>
								<th>ENCARREGADO</th>
								<th>TIPO DE AMPLIFICADOR</th>
								<th>EMPRESA</th>
							</tr>
						</thead>					
						<?php
							while ($registro = mysqli_fetch_row ($sql_resultado)) {
						?>
							<tr>
								<td>
									<?php echo $registro[0]; ?>
								</td>
								<td>
									<?php echo $registro[1]; ?>
								</td>
								<td>
									<?php echo $registro[2]; ?>
								</td>
								<td>
									<?php echo $registro[3]; ?>
								</td>
							</tr>
						<?php
							}
						?>
					</table>
				</div>
				<p> <a href="relatorios.php"> Voltar </a> </p>
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