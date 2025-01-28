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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrossel com 6 Elementos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <h2 class="text-center mb-4">Carrossel de Amplificadores</h2>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="card h-100">
                                <img src="img/img_amplificadores/guitarra_marshall_code50_transistorizado.png" class="card-img-top" alt="Amplificador Marshall">
                                <div class="card-body">
                                    <h5 class="card-title">Guitarra Marshall</h5>
                                    <p class="card-text">Amplificador Marshall Code50 Transistorizado.</p>
                                </div>
                                <div class="card-footer text-center">
                                    <button class="btn btn-primary">Comprar</button>
                                    <button class="btn btn-secondary">Detalhes</button>
                                </div>
                            </div>
                        </div>
                        <!-- Repetir o mesmo bloco para outros 5 elementos no slide -->
                        <div class="col-md-2">[...]</div>
                        <div class="col-md-2">[...]</div>
                        <div class="col-md-2">[...]</div>
                        <div class="col-md-2">[...]</div>
                        <div class="col-md-2">[...]</div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row">
                        <!-- Repetir com novos itens -->
                        <div class="col-md-2">[...]</div>
                        <div class="col-md-2">[...]</div>
                        <div class="col-md-2">[...]</div>
                        <div class="col-md-2">[...]</div>
                        <div class="col-md-2">[...]</div>
                        <div class="col-md-2">[...]</div>
                    </div>
                </div>
            </div>
            <!-- Controles do Carrossel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>