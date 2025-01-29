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
            <?php endforeach; */ ?>
        </ul>
    </nav>
</body>
</html>
    -->


    <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout com Spinner</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        /* Efeito de escurecimento ao sair */
        .fade-out {
            opacity: 0;
            transition: opacity 1s ease-out;
        }

        /* Overlay do spinner cobrindo toda a tela */
        #spinner {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            /* display: flex; */
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        /* Estilizando o spinner */
        .spinner-border {
            width: 4rem;
            height: 4rem;
            color: white;
        }
    </style>
</head>
<body class="d-flex flex-column justify-content-center align-items-center vh-100">

    <h2>Teste do Logout com Spinner</h2>

    <!-- Botão de Logout -->
    <button id="logout-overlay" class="btn btn-danger mt-3">Sair</button> ok

    <!-- Overlay do Spinner -->
    <div id="spinner">
        <div class="spinner-border text-light" role="status"></div>
    </div>

    <script>
        // Selecionando elementos
        const logoutButton = document.getElementById("logout-overlay");
        const spinnerOverlay = document.getElementById("spinner");
        const body = document.body;

        // Função para iniciar o logout com efeito
        function handleLogout(event) {
            event.preventDefault(); // Impede o redirecionamento imediato

            // Ativar o spinner e a animação de saída
            spinnerOverlay.style.display = "flex"; // Usa flex para centralizar
            body.classList.add("fade-out");

            // Prevenir múltiplos cliques
            logoutButton.disabled = true;

            // Aguarda a animação antes de redirecionar
            setTimeout(() => {
                window.location.href = "teste.php";
            }, 2000); // 2 segundos para efeito
        }

        // Adiciona o evento de clique
        logoutButton.addEventListener("click", handleLogout);
    </script>

</body>
</html>
