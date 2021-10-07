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
    <link rel="stylesheet" href="../style/styleAdicionar.css">
    <title>Adicionar e Alterar</title>
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
                <a href="">
                    <li>Todos</li>
                </a>
                <a href="">
                    <li>Ficção</li>
                </a>
                <a href="">
                    <li>Desenvovimento Pessoal</li>
                </a>
                <a href="">
                    <li>Suspense</li>
                </a>
                <a href="">
                    <li>Infantil</li>
                </a>
                <a href="">
                    <li>Terror</li>
                </a>
                <a href="">
                    <li>Literatura Estrangeira</li>
                </a>
                <a href="">
                    <li>Adicionar Livro</li>
                </a>
            </ul>
        </div>
    </div>

    <div class="box">
        <section>
            <div class="imagem"></div>
            <form action="../controller/adicionar_alterar_controller.php" method="POST">
                <input type="text" placeholder="Titulo" value="" name="titulo">
                <input type="text" placeholder="Categoria" value="" name="categoria">
                <input type="text" placeholder="Link Imagem" value="" name="link_imagem">
                <textarea name="descricao" id="" cols="30" rows="10" placeholder="Descrição"></textarea>
                <div class="botoes">
                    <input type="submit" value="Adicionar/Alterar" id="adicionar">
                </div>
            </form>
        </section>

    </div>


    <script src="../script/adicionar.js"></script>
</body>

</html>