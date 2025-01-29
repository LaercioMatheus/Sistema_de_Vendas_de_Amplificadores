<?php
if ($_SESSION["funcao"] == "administrador") {
?>
    <ul>
        <li><a href="administracao.php" class="active">Administração</a></li>
        <li><a href="lista_fun.php" class="active">Funcionários</a></li>
        <li><a href="lista_fab.php" class="active">Fornecedores</a></li>
        <li><a href="lista_amp.php" class="active">Amplificadores</a></li>
        <li><a href="vendas.php" class="active">Vendas</a></li>
        <li><a href="relatorios.php" class="active">Relatórios</a></li>
        <li><a href="logout.php" id="logout-overlay" class="active">Sair</a></li>
    </ul>
<?php
} elseif ($_SESSION["funcao"] == "estoquista") {
?>
    <ul>
        <li><a href="administracao.php" class="active">Administração</a></li>
        <li><a href="lista_amp.php" class="active">Amplificadores</a></li>
        <li><a href="logout.php" id="logout-overlay" class="active">Sair</a></li>
    </ul>
<?php
} else {
?>
    <ul>
        <li><a href="administracao.php" class="active">Administração</a></li>
        <li><a href="vendas.php" class="active">Vendas</a></li>
        <li><a href="logout.php" id="logout-overlay" class="active">Sair</a></li>
    </ul>
<?php
}

?>