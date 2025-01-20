<?php
    session_start();

    $conectar = mysqli_connect ("localhost", "root", "", "35936x");

        //RECEBIMENTO DOS DADOS DO USUARIO COMUM (nome, login, senha e funcao)
        $cod = $_POST["codigo"];
        $nome = $_POST["nome"];
        $endereco = $_POST["endereco"];
        $telefone = $_POST["telefone"];
        $nome_encarregado = $_POST["nome_enc"];
        $produto = $_POST["produto"];
        $nome_empresa = $_POST["nome_emp"];


            $sql_altera = "UPDATE fabricantes
            SET   Nome_FAB = '$nome',
                  Endereco_FAB = '$endereco',
                  Telefone_FAB = '$telefone',
                  Encarregado_Vendas_FAB = '$nome_encarregado',
                  Produto_FAB = '$produto',
                  Empresa_FAB = '$nome_empresa'
                  WHERE Cod_FAB = '$cod'";

            $sql_resultado_alteracao = mysqli_query ($conectar, $sql_altera);

            if ($sql_resultado_alteracao == true) {
                
                echo "<script>
                        alert ('$nome alterado com Sucesso.')
                    </script>";

                echo "<script> location.href = ('lista_fab.php') </script>";

                exit();
            } else {
                
                echo "<script>
                        alert ('Ocorreu um erro no servidor.
                            Os dados do fabricante não foram alterados!
                                Tente novamente!!')
                    </script>";

                echo "<script> location.href = ('altera_fab.php?codigo=<?php echo $cod; ?>') </script>";

            }
            
?>