<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exibe Amplificadores</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
	<link rel="shortcut icon" href="https://img.icons8.com/doodle/48/boombox.png" type="image/x-icon">
</head>

<body>
	<div id="container">
		<header id="header">
			<div id="identific">
				<!--A IMAGEM DO SITE TEM QUE TER ESSES PARAMETROS PARA SER RESPONSIVA EM DETERMINADAS TAMANHOS DE TELAS-->
				<!--srcset="imagem-pequena.jpg 300w, imagem-media.jpg 600w" sizes="(max-width: 600px) 300px, (max-width: 1200px) 600px, 1200px"-->
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
			<h2> EXIBIÇÃO DE AMPLIFICADORES </h2>

			<?php
			//CONECCAO COM O BANCO DE DADOS
			$conectar = mysqli_connect("localhost", "root", "", "35936x");

			$codigo_amp = $_GET["codigo"];

			//PESQUISANDO OS DADOS DENTRO DO BANCO DE DADOS
			$sql_pesquisa = "SELECT
										Marca_AMP, Modelo_AMP, Tipo_AMP, Preco_AMP, Foto_AMP
									FROM
										amplificadores
									WHERE
										Cod_AMP = '$codigo_amp'";

			#ONDE ESTA A TABELA VINDA DO BANCO DE DADOS
			$tabela_resultado = mysqli_query($conectar, $sql_pesquisa);

			$registro_amp = mysqli_fetch_row($tabela_resultado);

			?>

			<p><img src="<?php echo $registro_amp[4]; ?>" alt="A foto do amplificador" class="foto_amplic"></p>
			<?php
			echo "<p>Marca: $registro_amp[0] </p>";
			echo "<p>Modelo: $registro_amp[1] </p>";
			echo "<p>Tipo: $registro_amp[2] </p>";
			echo "<p>Preço: $registro_amp[3] </p>";

			/* CONDIÇÕES PARA APARECER O BOTÃO DE VOLTAR NA PÁGINA DE EXIBIÇÃO */
			if ($_SESSION["funcao"] == "administrador") {
			?>
				<p> <a href="lista_amp.php"> Voltar </a> </p>
			<?php
			} elseif ($_SESSION["funcao"] == "vendedor") {
			?>
				<p> <a href="vendas.php"> Voltar </a> </p>
			<?php
			} else {
			?>
				<p> <a href="lista_amp.php"> Voltar </a> </p>
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