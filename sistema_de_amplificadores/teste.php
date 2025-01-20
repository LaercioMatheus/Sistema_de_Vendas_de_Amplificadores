<!--<?php
// Exemplo de array de breadcrumbs
/*$breadcrumbs = [
    ["Home", "index.php"],
    ["CursoPHP", "curso.php"],
    ["PhP2semestre", "php2semestre.php"],
    ["Loja_de_amplificadores", "loja_de_amplificadores.php"],
    ["Lista_amp.php", "lista_amp.php"]
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .breadcrumbs {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .breadcrumbs li {
            display: inline;
            margin-right: 5px;
        }

        .breadcrumbs li a {
            text-decoration: none;
            color: #000;
        }

        .breadcrumbs li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav>
        <ul class="breadcrumbs">
            <?php foreach ($breadcrumbs as $breadcrumb): ?>
                <li>
                    <a href="<?php echo htmlspecialchars($breadcrumb[1]); ?>">
                        <?php echo htmlspecialchars($breadcrumb[0]); ?>
                    </a> /
                </li>
            <?php endforeach; */?>
        </ul>
    </nav>
</body>
</html>
    -->

    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios</title>
    <link rel="stylesheet" href="estilo.css">

    <style>
        body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.header {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

.header h1 {
    margin: 0;
    font-size: 2.5em;
}

.navbar {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.navbar a {
    color: #333;
    text-decoration: none;
    padding: 10px 20px;
    border: 1px solid #333;
    border-radius: 5px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.navbar a:hover {
    background-color: #333;
    color: #fff;
}

.main-content {
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

.main-content h2 {
    font-size: 2em;
    margin-bottom: 20px;
}

.main-content a {
    color: #333;
    text-decoration: none;
    display: block;
    margin-bottom: 10px;
}

.main-content a:hover {
    text-decoration: underline;
}

.footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
    position: relative;
    bottom: 0;
    width: 100%;
    margin-top: 20px;
}

    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>ROCK N’ ROLL Amplificadores</h1>
        </header>
        <nav class="navbar">
            <a href="#">Administração</a>
            <a href="#">Funcionários</a>
            <a href="#">Fornecedores</a>
            <a href="#">Amplificadores</a>
            <a href="#">Vendas</a>
            <a href="#">Relatórios</a>
            <a href="#">Sair</a>
            <span>Olá Administrador do sistema</span>
        </nav>
        <div class="main-content">
            <h2>RELATÓRIOS</h2>
            <ul>
                <li><a href="#">Relatório de Funcionários Ativos</a></li>
                <li><a href="#">Relatório de Funcionários Inativos</a></li>
                <li><a href="#">Relatório de amplificadores em estoque</a></li>
                <li><a href="#">Relatório de Fabricantes</a></li>
                <li><a href="#">Faturamento total do mês</a></li>
            </ul>
        </div>
        <footer class="footer">
            <p>AMPLI - CONTROL</p>
            <p>Rua do Rock, 666 -- E-mail: contato@ampli_control.com.br -- Fone: (61) 9966 - 6677</p>
        </footer>
    </div>
</body>
</html>
