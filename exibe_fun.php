<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dados dos Usuários</title>
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
			<h1> EXIBIÇÃO DE DADOS DE USUÁRIOS </h1>

			<?php
			//CONECCAO COM O BANCO DE DADOS
			$conectar = mysqli_connect("localhost", "root", "", "35936x");

			$codigo = $_GET["codigo"];

			//PESQUISANDO OS DADOS DENTRO DO BANCO DE DADOS
			$sql_pesquisa = "SELECT
										Nome_FUN, Login_FUN, Funcao_FUN, Status_FUN
									FROM 
										funcionarios
									WHERE
										Cod_FUN = '$codigo'";

			#ONDE ESTA A TABELA VINDA DO BANCO DE DADOS
			$tabela_resultado = mysqli_query($conectar, $sql_pesquisa);

			$registro = mysqli_fetch_row($tabela_resultado);

			echo "<p>Nome: $registro[0] </p>";
			echo "<p>Login: $registro[1] </p>";
			echo "<p>Função: $registro[2] </p>";
			echo "<p>Status: $registro[3] </p>";
			?>
			<p> <a href="lista_fun.php"> Voltar </a> </p>
		</div>
		<div id="footer">
			<div id="texto_institucional">
				<h6> ETB - Escola Técnica de Brasília </h6>
				<h6> Curso - Técnico em Informática </h6>
				<h6> Disciplina - Desenvolvimento Web II </h6>
			</div>
		</div>
	</div>
</body>

</html>