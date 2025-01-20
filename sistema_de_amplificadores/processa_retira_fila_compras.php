<?php
     session_start();

     //A CONEXAO DO BD SENDO ARMAZENADA NA VARIAVEL  'CONECTAR'
     //QUAL É O COMPUTADOR(servidor), QUAL O USUARIO DO BANCO DE DADOS, SENHA DO USUARIO, NOME DO BANCO DE DADOS
     $conectar = mysqli_connect("localhost", "root", "", "35936x");
 
     $cod = $_GET["codigo"];
 
     $sql_altera = "UPDATE amplificadores
                     SET Fila_Compra_AMP = 'N'
                     WHERE   Cod_AMP = '$cod'";
 
     $sql_resultado_alteracao = mysqli_query ($conectar, $sql_altera);
 
     if ($sql_resultado_alteracao == true) {
 
         echo "<script>
                 alert ('Amplificador retirado da fila de compras com Sucesso!!')
               </script>";
 
         //script é executado pelo navegador NAO pelo servidor
         echo "<script>
                 location.href = ('ver_fila_compras.php')
               </script>";
         exit();
         
     } else {
 
         echo "<script>
                     alert ('Ocorreu um erro no servidor.
                     O amplificador não foi retirado da fila de compras.Tente Novamente!!')
               </script>";
 
               echo "<script> location.href = ('ver_fila_compras.php') </script>";
     }
?>