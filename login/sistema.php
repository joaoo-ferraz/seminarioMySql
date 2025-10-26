<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true and (!isset($_SESSION['senha']) == true))){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.html');
    } 
    $logado = $_SESSION['nome'];   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="sistema.css">
    <title>Sistema</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">HOME</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <ul class="navbar-nav">
                    
                    <li class="nav-item"><a class="nav-link" href="sair.php"><i class="bi bi-box-arrow-in-right"></i>Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
    
    <?php
        echo "<br>";
        echo "<h1>Acesso Realizado!</h1>";
        echo "<br>";
        echo "<h2>$logado - Seja Bem-Vindo ao nosso Sistema!</h2>";
    ?>

    
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>