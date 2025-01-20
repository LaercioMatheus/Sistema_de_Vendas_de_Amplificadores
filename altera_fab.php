<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Alterar Usuários</title>
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
				<h1> ALTERAÇÃO DE USUÁRIOS </h1>			
				<?php

					//CONECCAO COM O BANCO DE DADOS
					$conectar = mysqli_connect ("localhost", "root", "", "35936x");
					$cod = $_GET["codigo"];

					//PESQUISANDO OS DADOS DENTRO DO BANCO DE DADOS
					$sql_pesquisa = "SELECT
										Nome_FAB, Endereco_FAB, Telefone_FAB, Encarregado_Vendas_FAB, Produto_FAB, Empresa_FAB
									FROM 
										fabricantes
									WHERE
										Cod_FAB = '$cod'";

					$resultado_pesquisa = mysqli_query($conectar, $sql_pesquisa);

					$registro = mysqli_fetch_row($resultado_pesquisa);
				?>

				<!--INICIO DO FORMULARIO-->
				<div class="form-container">
					<form method="post" action="processa_altera_fab.php" id="form" class="form">
					<input type="hidden" name="codigo" value="<?php echo $cod;?>">
						<div class="form-control">
							<label for="nome">Nome Completo: </label>
							<input type="text" id="nome" name="nome" value="<?php echo $registro[0];?>" required>

							<i class="fas fa-exclamation-circle"></i>
							<i class="fas fa-check-circle"></i>
							
							<small>Mensagem de erro</small>
						</div>
						<div class="form-control">
							<label for="endereco">Endereço: </label>
							<input type="text" id="endereco" name="endereco" value="<?php echo $registro[1];?>" required>

							<i class="fas fa-exclamation-circle"></i>
							<i class="fas fa-check-circle"></i>
							
							<small>Mensagem de erro</small>
						</div>						
						<div class="form-control">
							<label for="telefone">Telefone: </label>							
							<input type="text" id="telefone" name="telefone" value="<?php echo $registro[2];?>" required>

							<i class="fas fa-exclamation-circle"></i>
							<i class="fas fa-check-circle"></i>
							
							<small>Mensagem de erro</small>
						</div>						
						<div class="form-control">
							<label for="nome_enc">Nome do Encarregado: </label>							
							<input type="text" id="nome_enc" name="nome_enc" value="<?php echo $registro[3];?>" required>

							<i class="fas fa-exclamation-circle"></i>
							<i class="fas fa-check-circle"></i>
							
							<small>Mensagem de erro</small>
						</div>
						<div class="form-control" id="style-funcao">
							<label for="guitarra">Tipo de amplificador: </label>
								<label for="guitarra">Guitarra </label>
									<input type="radio" name="produto" value="guitarra" id="guitarra"
									<?php
										if ($registro[4] == "guitarra") {
											echo "checked";
										}
									?>>

								<label for="baixo">Baixo </label>
									<input type="radio" name="produto" value="baixo" id="baixo"
									<?php
										if ($registro[4] == "baixo") {
											echo "checked";
										}
									?>>
								
								<label for="violao">Violão </label>
									<input type="radio" name="produto" value="violao" id="violao"
									<?php
										if ($registro[4] == "violao") {
											echo "checked";
										}
									?>>
						</div>
						<div class="form-control">
							<label for="nome_emp">Nome da Empresa: </label>
							<input type="text" id="nome_emp" name="nome_emp" value="<?php echo $registro[5];?>" required>
							
							<i class="fas fa-exclamation-circle"></i>
							<i class="fas fa-check-circle"></i>
							
							<small>Mensagem de erro</small>
						</div>

						<button type="submit" class="style-button">Alterar Fornecedor</button>
					</form>
				</div>
				<!--CONECCAO COM O SCRIPT DO JAVASCRIPT-->
				<script src="js/script_cadastra_fab.js"></script>

				<p> <a href="lista_fab.php"> Voltar </a> </p>
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