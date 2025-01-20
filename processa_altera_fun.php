<?php
    session_start();

    $conectar = mysqli_connect ("localhost", "root", "", "35936x");

    $cod = $_POST["codigo"];
	$funcao = $_POST["funcao"];

    if ($funcao == "administrador") {
        $senha = $_POST["senha"];
        $sql_altera = "UPDATE funcionarios 
                       SET
                            Senha_FUN = '$senha'
                       WHERE
                            Cod_FUN = '$cod'";

    $sql_resultado_alteracao = mysqli_query ($conectar, $sql_altera);

    if ($sql_resultado_alteracao == true) {
        echo "<script>
                alert ('Senha do administrador Alterastrada com Sucesso!!')
            </script>";

        echo "<script> location.href = ('lista_fun.php') </script>";

        exit();

    } else {
        echo "<script>
                    alert ('Ocorreu um erro no servidor.
                    A senha do administrador não foi alterada!!
                    Volte e tente novamente.')
              </script>";

        echo "<script> location.href = ('altera_fun.php?codigo=$cod') </script>";

        exit();
    }

    } else {
        //RECEBIMENTO DOS DADOS DO USUARIO COMUM (nome, login, senha e funcao)
        $nome = $_POST["nome"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $status = $_POST["status"];
        $funcao = $_POST["funcao"];

        $sql_pesquisa = "SELECT Login_FUN FROM funcionarios
                        WHERE Login_FUN = '$login'
                        AND Cod_FUN <> '$cod'";
        
        $sql_resultado = mysqli_query ($conectar, $sql_pesquisa);

        $linhas = mysqli_num_rows ($sql_resultado);

        if ($linhas == 1) {
            echo "<script>
                    alert ('Login do funcionario já existente.
                    Tente novamente.')
              </script>";

            echo "<script> location.href = ('altera_fun.php?codigo=$cod') </script>";

            exit();
        } else {
            
            $sql_altera = "UPDATE funcionarios
            SET   Nome_FUN = '$nome',
                  Funcao_FUN = '$funcao',
                  Login_FUN = '$login',
                  Senha_FUN = '$senha',
                  Status_FUN = '$status'
                  WHERE Cod_FUN = '$cod'";

            $sql_resultado_alteracao = mysqli_query ($conectar, $sql_altera);

            if ($sql_resultado_alteracao == true) {
                
                echo "<script>
                        alert ('$nome alterado com Sucesso.')
                    </script>";

                echo "<script> location.href = ('lista_fun.php') </script>";

                exit();
            } else {
                
                echo "<script>
                        alert ('Ocorreu um erro no servidor.
                            Os dados do funcionário não foram alterados!
                                Tente novamente!!')
                    </script>";

                echo "<script> location.href = ('altera_fun.php?codigo=<?php echo $cod; ?>') </script>";

            }
            
        }
        
    }
    
?>