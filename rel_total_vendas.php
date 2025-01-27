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
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    </head>
    <body>
        <div id="container">
		<header id="header">
				<div id="identific">
					<!--LOGO DO SITE DENTRO DA img PORQUE É UMA IMAGEM-->
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
				<h1> RELATÓRIO DE TOTAL DE VENDAS </h1>
				
				<?php
					//CONECCAO COM O BANCO DE DADOS
					$conectar = mysqli_connect ("localhost", "root", "", "35936x");

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

				<p>Total de vendas até a presente data: <?php echo $valor_total; ?></p>

				<p> <a href="relatorios.php"> Voltar </a> </p>
			
			</div>	
			<div id="footer">
				<div id="texto_institucional">
					<div id="texto_institucional">
						<h6> AMPLI - CONTROL </h6> 
						<h6> Rua do Rock, 666 -- E-mail: contato@ampli_control.com.br -- Fone: (61) 9966 - 6677 </h6> 
					</div> 
				</div>
			</div>
		</div>
    </body>
</html>