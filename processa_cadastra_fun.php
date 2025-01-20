<?php
    //A CONEXAO DO BD SENDO ARMAZENADA NA VARIAVEL  'CONECTAR'
    //QUAL É O COMPUTADOR(servidor), QUAL O USUARIO DO BANCO DE DADOS, SENHA DO USUARIO, NOME DO BANCO DE DADOS
    $conectar = mysqli_connect ("localhost", "root", "", "35936x");

    //RECEBIMENTO DOS DADOS DA PAGINA HTML (nome, login, senha e funcao)
	$nome = $_POST["nome"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
	$funcao = $_POST["funcao"];

    //VERIFICACAO DE O LOGIN E SENHA SAO COMPATIVEIS COM O BD
    //DENTRO DESSA VARIAVEL ESTA SENDO ARMAZENADO UM COMANDO DO BD
    $sql_consulta = "SELECT Login_FUN
                            FROM funcionarios
                            WHERE
                                Login_FUN = '$login'";

/*funcao query fala para o BD fazer acoes no banco de dados (pesquisar, incluir, excluir, verificar, alterar)*/

    $resultado_consulta = mysqli_query ($conectar, $sql_consulta);

    // CONTA O NUMERO DE LINHAS DENTRO DA VARIAVEL 'resultado_consulta' QUE RECEBEU A TABELA DO BD
    $linhas = mysqli_num_rows ($resultado_consulta);

    if ($linhas == 1) {

        echo "<script>
				alert ('Login já Cadastrado!!. Tente Outro!')
			  </script>";

        //script é executado pelo navegador NAO pelo servidor
        echo "<script>
                location.href = ('cadastra_fun.php')
              </script>";
        
    } else {
        $sql_cadastrar = "INSERT INTO funcionarios 
                            (Nome_FUN, Login_FUN, Senha_FUN, Funcao_FUN)
                          VALUES
                            ('$nome', '$login', '$senha', '$funcao')";

        $resultado_cadastrar = mysqli_query($conectar, $sql_cadastrar);

        if ($resultado_cadastrar == true) {
            echo "<script>
                    alert ('$nome Cadastrado com Sucesso!!')
              </script>";

            echo "<script> location.href = ('cadastra_fun.php') </script>";
        }
        else {
            echo "<script>
                    alert ('Ocorreu um erro no servidor. Tente Novamente!!')
              </script>";

              echo "<script> location.href = ('cadastra_fun.php') </script>";
        }        
    }
?>
