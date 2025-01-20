<?php
    //A CONEXAO DO BD SENDO ARMAZENADA NA VARIAVEL  'CONECTAR'
    //QUAL É O COMPUTADOR(servidor), QUAL O USUARIO DO BANCO DE DADOS, SENHA DO USUARIO, NOME DO BANCO DE DADOS
    $conectar = mysqli_connect ("localhost", "root", "", "35936x");

    //RECEBIMENTO DOS DADOS DA PAGINA HTML (nome, login, senha e funcao)
	$nome = $_POST["nome"];
	$endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $nome_encarregado = $_POST["nome_enc"];
    $produto = $_POST["produto"];
    $nome_empresa = $_POST["nome_emp"];

        $sql_cadastrar = "INSERT INTO fabricantes 
                            (Nome_FAB, Endereco_FAB, Telefone_FAB, Encarregado_Vendas_FAB, Produto_FAB, Empresa_FAB)
                          VALUES
                            ('$nome', '$endereco', '$telefone', '$nome_encarregado', '$produto', '$nome_empresa')";

    /*funcao query fala para o BD fazer acoes no banco de dados (pesquisar, incluir, excluir, verificar, alterar)*/
        $resultado_cadastrar = mysqli_query($conectar, $sql_cadastrar);

        if ($resultado_cadastrar == true) {
            echo "<script>
                    alert ('$nome Cadastrado com Sucesso!!')
              </script>";

            echo "<script> location.href = ('cadastra_fab.php') </script>";
        }
        else {
            echo "<script>
                    alert ('Ocorreu um erro no servidor. Tente Novamente!!')
              </script>";

              echo "<script> location.href = ('cadastra_fab.php') </script>";
        }

?>
