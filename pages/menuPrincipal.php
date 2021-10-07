<?php
    //Validando sessão para acesso em área logada
    session_start();
    if($_SESSION["logado"] != 1){
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="../assets/fotoLivro.svg" />
    <link rel="stylesheet" href="../style/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../style/styleMenuPrincipal.css">
    <title>Destaques</title>
</head>

<body>
    <header>
        <a href="../pages/menuPrincipal.php">
            <h1>Biblioteca</h1>
        </a>
        <div class="logo"></div>
        <div class="iconMenu"></div>
    </header>
    <div class="container">
        <div class="menuMobile">
            <ul>
                <li>Todos</li>
                    <li>Comédia</li>
                    <li>Desenvovimento Pessoal</li>
                    <li>Suspense</li>
                    <li>Infantil</li>
                    <li>Terror</li>
                    <li>Literatura Estrangeira</li>
                    <li>Reservados</li>
                <a href="adicionar.php">
                    <li>Adicionar Livro</li>
                </a>
            </ul>
        </div>
        <div class="menuSelecao">
            <div class="menuCategorias">
                <ul class="list-group">
                    <li class="list-group-item">Todos</li>
                    <li class="list-group-item">Comédia</li>
                    <li class="list-group-item">Desenvovimento Pessoal</li>                   
                    <li class="list-group-item">Suspense</li>
                    <li class="list-group-item">Infantil</li>
                    <li class="list-group-item">Terror</li>
                    <li class="list-group-item">Literatura Estrangeira</li>
                    <li class="list-group-item">Reservados</li>
                    <a href="adicionar.php">
                        <li class="list-group-item">Adicionar Livro</li>
                    </a>

                </ul>
            </div>
        </div>
        <div class="livrosBox">
     
        </div>
    </div>
    <script src="../script/jquery-3.6.0.js"></script>
    <script src="../script/scriptMenuPrincipal.js"></script>
</body>

</html>