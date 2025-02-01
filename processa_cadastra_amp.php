<?php
  session_start();
  
  $conectar = mysqli_connect("localhost", "root", "", "35936x");

  $marca = $_POST["marca"];
  $modelo = $_POST["modelo"];
  $preco = $_POST["preco"];
  $tipo = $_POST["tipo"];
  $foto = $_FILES["foto"];

  $foto_nome = "img/img_amplificadores".$foto["name"];
  move_uploaded_file($foto["tmp_name"], $foto_nome);


  //FAZENDO A CONSULTA NO BANCO DE DADOS
  $sql_pesquisa_Cod = "SELECT Cod_FAB, Produto_FAB
                       FROM fabricantes
                       WHERE
                          Produto_FAB = 'violao'";

$sql_resultado = mysqli_query($conectar, $sql_pesquisa_Cod);
$sql_cod = mysqli_fetch_row($sql_resultado);

if ($sql_cod[2] == "violao") {
  
    $sql_cadastrar = "INSERT INTO amplificadores 
                          (Marca_AMP, Modelo_AMP, Preco_AMP, Tipo_AMP, Foto_AMP, Fabricantes_Cod_FAB)
                      VALUES
                          ('$marca', '$modelo', '$preco', '$tipo', '$foto_nome', '$sql_cod[0]')";

} elseif ($sql_cod[2] == "baixo") {
    $sql_cadastrar = "INSERT INTO amplificadores 
                          (Marca_AMP, Modelo_AMP, Preco_AMP, Tipo_AMP, Foto_AMP, Fabricantes_Cod_FAB)
                      VALUES
                          ('$marca', '$modelo', '$preco', '$tipo', '$foto_nome', '$sql_cod[0]')";

} else {

    $sql_cadastrar = "INSERT INTO amplificadores 
                          (Marca_AMP, Modelo_AMP, Preco_AMP, Tipo_AMP, Foto_AMP, Fabricantes_Cod_FAB)
                      VALUES
                          ('$marca', '$modelo', '$preco', '$tipo', '$foto_nome', '$sql_cod[0]')";
}
  
  $sql_resultado_cadastrar = mysqli_query($conectar, $sql_cadastrar);
  
  if ($sql_resultado_cadastrar == true) {

    echo "<script>
                alert ('$modelo cadastrado com Sucesso!!')
          </script>";

    echo "<script> location.href = ('cadastra_amp.php') </script>";
  } else {

    echo "<script>
              alert ('Ocorreu um erro no servidor!??!.
                  Tente cadastrar novamente novamente.')
          </script>";

    echo "<script> location.href = ('cadastra_amp.php') </script>";
  }

?>