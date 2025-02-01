<?php
//TEM QUE SER O PRIMEIRO COMANDO DA PAGINA/SCRIPT
//VAI CRIAR AS VARIAVEIS DE SESSAO 'session_start'
    session_start();

    //A CONEXAO DO BD SENDO ARMAZENADA NA VARIAVEL  'CONECTAR'
    //QUAL É O COMPUTADOR(servidor), QUAL O USUARIO DO BANCO DE DADOS, SENHA DO USUARIO, NOME DO BANCO DE DADOS
    $conectar = mysqli_connect ("localhost", "root", "", "35936x");

    //RECEBIMENTO DOS DADOS DA INDEX (login e senha)
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    //VERIFICACAO DE O LOGIN E SENHA SAO COMPATIVEIS COM O BD
    //DENTRO DESSA VARIAVEL ESTA SENDO ARMAZENADO UM COMANDO DO BD
    $sql_consulta = "SELECT Login_FUN, Senha_FUN,
                            Cod_FUN, Nome_FUN, Funcao_FUN
                            FROM funcionarios
                            WHERE
                                Login_FUN = '$login'
                            AND
                                Senha_FUN = '$senha'
                            AND
                                Status_FUN = 'Ativo'";

/*funcao query fala para o BD fazer acoes no banco de dados (pesquisar, incluir, excluir, verificar, alterar)*/
    $resultado_consulta = mysqli_query ($conectar, $sql_consulta);

    // CONTA O NUMERO DE LINHAS DENTRO DA VARIAVEL 'resultado_consulta' QUE RECEBEU A TABELA DO BD
    $linhas = mysqli_num_rows ($resultado_consulta);

    if ($linhas == 1) {

        //essa variavel vai armazenar na sequencia do comando do BD
        $registro = mysqli_fetch_row ($resultado_consulta);

        //VARIAVEIS DE SESSAO NAO ESQUECER O '_' SEMPRE
        $_SESSION["codigo"] = $registro[2];
        $_SESSION["nome"] = $registro[3];
        $_SESSION["funcao"] = $registro[4];

        //script é executado pelo navegador NAO pelo servidor
        echo "<script>
                    alert ('Login e Senha Corretos!! Seja Bem Vindo!!')
                location.href = ('administracao.php')
              </script>";

    } else {
        echo "<script>
                    alert ('Login ou Senha Incorretos!! Digite Novamente!!')
              </script>";

              echo "<script> location.href = ('index.php') </script>";
    }
?>