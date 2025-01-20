<?php

	$conectar = mysqli_connect ("localhost", "root", "", "35936x");
	
	//RECEBIMENTO DOS DADOS DO USUARIO COMUM ()
	$codigo = $_POST["codigo"];
	$marca = $_POST["marca"];
	$modelo = $_POST["modelo"];
	$preco = $_POST["preco"];
	$tipo = $_POST["tipo"];
	$foto = $_FILES["foto"];
	
	if ($foto["name"] <> "") {
		$foto_nome = "img/".$foto["name"];
		move_uploaded_file($foto["tmp_name"], $foto_nome);		
	} else {
		$pesquisa_caminho_foto = "SELECT Foto_AMP FROM amplificadores
                        WHERE Cod_AMP = '$codigo'";
						
		$resultado_pesquisa = mysqli_query ($conectar, $pesquisa_caminho_foto);
		$registro = mysqli_fetch_row ($resultado_pesquisa);
		$foto_nome = $registro[0];
	}
	
	$sql_altera = "UPDATE amplificadores
            SET   Marca_AMP = '$marca',
                  Modelo_AMP = '$modelo',
                  Preco_AMP = '$preco',
                  Tipo_AMP = '$tipo',
                  Foto_AMP = '$foto_nome'
                  WHERE Cod_AMP = '$codigo'";
				  
	$sql_resultado_alteracao = mysqli_query ($conectar, $sql_altera);
	
	if ($sql_resultado_alteracao == true) {
		echo "<script>
                    alert ('$modelo alterado com Sucesso.')
            </script>";

                echo "<script> location.href = ('lista_amp.php') </script>";

            } else {

                echo "<script>
                        alert ('Ocorreu um erro no servidor.
                            Os dados do amplificador não foram alterados!
                                Tente novamente!!')
                    </script>";

                echo "<script> location.href = ('altera_amp.php?codigo=<?php echo $codigo; ?>') </script>";

            }
?>