<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dados dos Usuários</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/style_form.css">
	<link rel="stylesheet" type="text/css" href="css/logout.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v4.7.0/css/font-awesome-css.min.css"> -->
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

			<?php
			//CONECCAO COM O BANCO DE DADOS
			$conectar = mysqli_connect("localhost", "root", "", "35936x");

			$codigo = $_GET["codigo"];

			//PESQUISANDO OS DADOS DENTRO DO BANCO DE DADOS
			$sql_pesquisa = "SELECT
								Nome_FAB, Endereco_FAB, Telefone_FAB, Encarregado_Vendas_FAB, Produto_FAB, Empresa_FAB
							FROM 
								fabricantes
							WHERE
								Cod_FAB = '$codigo'";

			#ONDE ESTA A TABELA VINDA DO BANCO DE DADOS
			$tabela_resultado = mysqli_query($conectar, $sql_pesquisa);

			$registro = mysqli_fetch_row($tabela_resultado);
			?>


			<div class="container_info shadow p-3 mb-5 rounded">
				<div class="form_header">
					<h2>Informações do usuário</h2>
				</div>
				<form>
					<div class="mb-3 row">
						<label for="nome" class="col-sm-2 col-form-label">Nome:</label>
						<div class="col-sm">
							<input type="text" class="form-control" id="nome" name="nome" value="<?php echo "$registro[0]"; ?>" disabled readonly>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="endereco" class="col-sm-2 col-form-label">Endereço:</label>
						<div class="col-sm">
							<input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo "$registro[1]"; ?>" disabled readonly>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="telefone" class="col-sm-2 col-form-label">Telefone:</label>
						<div class="col-sm">
							<input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo "$registro[2]"; ?>" disabled readonly>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="encarregado" class="col-sm-2 col-form-label">Encarregado:</label>
						<div class="col-sm">
							<input type="text" class="form-control" id="encarregado" name="encarregado" value="<?php echo "$registro[3]"; ?>" disabled readonly>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="tipo" class="col-sm-2 col-form-label">Tipo de amplificador:</label>
						<div class="col-sm">
							<input type="text" class="form-control" id="tipo" name="tipo" value="<?php echo "$registro[4]"; ?>" disabled readonly>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="empresa" class="col-sm-2 col-form-label">Empresa:</label>
						<div class="col-sm">
							<input type="text" class="form-control" id="empresa" name="empresa" value="<?php echo "$registro[5]"; ?>" disabled readonly>
						</div>
					</div>
				</form>
			</div>

			<a class="btn btn-secondary" href="javascript:history.back()">Voltar</a>
		</div>
		<div id="footer">
			<div id="texto_institucional">
				<p><a href="#">AMPLIFIC - CONTROL</a></p>
				<p>GitHub: <a href="github.com/LaercioMatheus">LaercioMatheus</a> - LinkedIn: <a href="https://www.linkedin.com/in/laércio-matheus-87806b266">LaercioMatheus</a> - Fone: <a href="#">(61) 99329 - 9400</a></p>
				<p>Address: <a href="#">Rua do Rock, 666</a> - E-mail: <a href="#">Laercioestudante17@gmail.com</a></p>
			</div>
			<div class="container_copy">
				<h6>Amplificadores Rock N’ Roll &copy; 2025 - Todos os direitos reservados</h6>
			</div>
		</div>
	</div>


</body>

</html>