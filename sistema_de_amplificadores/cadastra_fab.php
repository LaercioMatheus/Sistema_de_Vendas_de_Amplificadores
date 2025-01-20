<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro de Fornecedores</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
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
				<h1> CADASTRO DE FORNECEDORES </h1>
			
				<!-- INICIO DO FORMULARIO -->
				<div class="form-container">
					<form method="post" action="processa_cadastra_fab.php" id="form" class="form">
						<div class="form-control">
							<label for="nome">Nome Completo: </label>
							<input type="text" id="nome" name="nome" placeholder="Digite o nome..." required>

							<i class="fas fa-exclamation-circle"></i>
							<i class="fas fa-check-circle"></i>
							
							<small>Mensagem de erro</small>
						</div>
						<div class="form-control">
							<label for="endereco">Endereço: </label>
							<input type="text" id="endereco" name="endereco" placeholder="Digite o endereço..." required>

							<i class="fas fa-exclamation-circle"></i>
							<i class="fas fa-check-circle"></i>
							
							<small>Mensagem de erro</small>
						</div>						
						<div class="form-control">
							<label for="telefone">Telefone: </label>
							<input type="text" id="telefone" name="telefone" placeholder="Digite o telefone..." required>

							<i class="fas fa-exclamation-circle"></i>
							<i class="fas fa-check-circle"></i>
							
							<small>Mensagem de erro</small>
						</div>						
						<div class="form-control">
							<label for="nome_enc">Nome do Encarregado: </label>
							<input type="text" id="nome_enc" name="nome_enc" placeholder="Digite o nome do encarregado..." required>

							<i class="fas fa-exclamation-circle"></i>
							<i class="fas fa-check-circle"></i>
							
							<small>Mensagem de erro</small>
						</div>
						<div class="form-control" id="style-funcao">
							<label for="guitarra">Tipo de amplificador: </label>
								<label for="guitarra">Guitarra </label>
									<input type="radio" name="produto" value="guitarra" id="guitarra" checked>

								<label for="baixo">Baixo </label>
									<input type="radio" name="produto" value="baixo" id="baixo">
								
								<label for="violao">Violão </label>
									<input type="radio" name="produto" value="violao" id="violao">
						</div>
						<div class="form-control">
							<label for="nome_emp">Nome da Empresa: </label>
							<input type="text" id="nome_emp" name="nome_emp" placeholder="Digite o nome da Empresa..." required>
							
							<i class="fas fa-exclamation-circle"></i>
							<i class="fas fa-check-circle"></i>
							
							<small>Mensagem de erro</small>
						</div>

						<button type="submit" class="style-button">Cadastrar Fornecedor</button>
					</form>
				</div>
				<!--CONECCAO COM O SCRIPT DO JAVASCRIPT-->
				<script src="js/script_cadastra_fab.js"></script>

				<p> <a href="lista_fab.php"> Voltar </a> </p>
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