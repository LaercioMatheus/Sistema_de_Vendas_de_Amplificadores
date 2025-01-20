<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Relatórios</title>
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

			<div id="main-content">
				<h2 class="title-rel"> RELATÓRIOS </h2>
				<ul>
					<li><a href="rel_funcionarios_ativos.php">Relatório de Funcionários Ativos</a></li>
					<li><a href="rel_funcionarios_inativos.php">Relatório de Funcionários Inativos</a></li>
					<li><a href="rel_estoque.php">Relatório de amplificadores em estoque</a></li>
					<li><a href="rel_fabricantes.php">Relatório de Fabricantes</a></li>
					<li><a href="rel_total_vendas.php">Faturamento total do mês</a></li>
				</ul>
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