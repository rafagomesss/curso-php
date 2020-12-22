<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/exercicio.css">
    <title>Exercício</title>
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php"; ?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
            // include_once $_GET['dir'] . '/' . $_GET['file'] . '.php';
            include_once __DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php";
            ?>
        </div>
    </main>
    <footer class="rodape">
        Copyright © - <?= date('Y'); ?>
    </footer>
</body>

</html>
