<?php
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Fornecedores</title>
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
				<div class="table-container">
					<h2> FORNECEDORES </h2>
					<p text-align="right">
						<a class="action" href="cadastra_fab.php">
							Cadastro de Fornecedores
						</a>
					</p>
					
					<?php
					//CONECCAO COM O BANCO DE DADOS
						$conectar = mysqli_connect ("localhost", "root", "", "35936x");
						//PESQUISANDO OS DADOS DENTRO DO BANCO DE DADOS
						$sql_pesquisa = "SELECT
															Cod_FAB, Nome_FAB, Endereco_FAB, Telefone_FAB, Encarregado_Vendas_FAB, Produto_FAB, Empresa_FAB
											FROM
												fabricantes";
					
					#ONDE ESTA A TABELA VINDA DO BANCO DE DADOS
						$sql_resultado = mysqli_query($conectar, $sql_pesquisa);
					?>

					<table>
						<thead>
							<tr>
								<th>NOME DO FABRICANTE</th>
								<th>ENDEREÇO</th>
								<th>NOME DO ENCARREGADO</th>
								<th>AMPLIFICADORES FORNECIDOS</th>
								<th>AÇÃO</th>
							</tr>
						</thead>
						<?php
							while ($registro = mysqli_fetch_row($sql_resultado)) {
						?>

						<!--TENHO QUE COLOCAR O 'tbody' NA TABELA-->
						<tr>
							<td><!--NOME-->
								<!--ISSO CASO ESSE LINHA DA TABELA FOR UM LINK-->
								<a href="exibe_fab.php?codigo=<?php echo $registro[0]; ?>">
									<?php echo $registro[1]; ?>
								</a>
							</td>
							<td>
								<!--ENDERECO-->
								<?php echo $registro[2]; ?>
							</td>
							<td>
								<!--NOME ENCARREGADO-->
								<?php echo $registro[4]; ?>
							</td>
							<td>
								<!--PRODUTOS-->
								<?php echo $registro[5]; ?>
							</td>
							<td><!--CODIGO ACAO-->
								<a href="altera_fab.php?codigo=<?php echo $registro[0]; ?>">
									Alterar
								</a>
							</td>
						</tr>
						<?php
							}
						?>
					</table>
				</div>
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