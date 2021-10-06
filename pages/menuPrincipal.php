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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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
                <a href="adicionar.php">
                    <li>Adicionar Livro</li>
                </a>
            </ul>
        </div>
        <div class="menuSelecao">
            <div class="menuCategorias">
                <ul class="list-group">


                    <a href="">
                        <li class="list-group-item">Todos</li>
                    </a>

                    <a href="">
                        <li class="list-group-item">Ficção</li>
                    </a>

                    <a href="">
                        <li class="list-group-item">Desenvovimento Pessoal</li>
                    </a>

                    <a href="">
                        <li class="list-group-item">Suspense</li>
                    </a>

                    <a href="">
                        <li class="list-group-item">Infantil</li>
                    </a>

                    <a href="">
                        <li class="list-group-item">Terror</li>
                    </a>

                    <a href="">
                        <li class="list-group-item">Literatura Estrangeira</li>
                    </a>

                    <a href="adicionar.php">
                        <li class="list-group-item">Adicionar Livro</li>
                    </a>

                </ul>
            </div>
        </div>
        <div class="livrosBox">
            <div class="livro">
                <div class="imagemCapa"></div>
                <h3 class="tituloLivro">Titulo</h3>
                <p class="descricaoLivro">Aqui tem uma descriçao de um livro.</p>
                <a href="">
                    <div class="reservar">Reservar</div>
                </a>
            </div>

            <div class="livro">
                <div class="imagemCapa"></div>
                <h3 class="tituloLivro">Titulo</h3>
                <p class="descricaoLivro">Aqui tem uma descriçao de um livro.</p>
                <a href="">
                    <div class="reservar">Reservar</div>
                </a>
            </div>

            <div class="livro">
                <div class="imagemCapa"></div>
                <h3 class="tituloLivro">Titulo</h3>
                <p class="descricaoLivro">Aqui tem uma descriçao de um livro.</p>
                <a href="">
                    <div class="reservar">Reservar</div>
                </a>
            </div>

            <div class="livro">
                <div class="imagemCapa"></div>
                <h3 class="tituloLivro">Titulo</h3>
                <p class="descricaoLivro">Aqui tem uma descriçao de um livro.</p>
                <a href="">
                    <div class="reservar">Reservar</div>
                </a>
            </div>

            <div class="livro">
                <div class="imagemCapa"></div>
                <h3 class="tituloLivro">Titulo</h3>
                <p class="descricaoLivro">Aqui tem uma descriçao de um livro.</p>
                <a href="">
                    <div class="reservar">Reservar</div>
                </a>
            </div>

            <div class="livro">
                <div class="imagemCapa"></div>
                <h3 class="tituloLivro">Titulo</h3>
                <p class="descricaoLivro">Aqui tem uma descriçao de um livro.</p>
                <a href="">
                    <div class="reservar">Reservar</div>
                </a>
            </div>

            <div class="livro">
                <div class="imagemCapa"></div>
                <h3 class="tituloLivro">Titulo</h3>
                <p class="descricaoLivro">Aqui tem uma descriçao de um livro.</p>
                <a href="">
                    <div class="reservar">Reservar</div>
                </a>
            </div>

            <div class="livro">
                <div class="imagemCapa"></div>
                <h3 class="tituloLivro">Titulo</h3>
                <p class="descricaoLivro">Aqui tem uma descriçao de um livro.</p>
                <a href="">
                    <div class="reservar">Reservar</div>
                </a>
            </div>

            <div class="livro">
                <div class="imagemCapa"></div>
                <h3 class="tituloLivro">Titulo</h3>
                <p class="descricaoLivro">Aqui tem uma descriçao de um livro.</p>
                <a href="">
                    <div class="reservar">Reservar</div>
                </a>
            </div>

            <div class="livro">
                <div class="imagemCapa"></div>
                <h3 class="tituloLivro">Titulo</h3>
                <p class="descricaoLivro">Aqui tem uma descriçao de um livro.</p>
                <a href="">
                    <div class="reservar">Reservar</div>
                </a>
            </div>

            <div class="livro">
                <div class="imagemCapa"></div>
                <h3 class="tituloLivro">Titulo</h3>
                <p class="descricaoLivro">Aqui tem uma descriçao de um livro.</p>
                <a href="">
                    <div class="reservar">Reservar</div>
                </a>
            </div>

            <div class="livro">
                <div class="imagemCapa"></div>
                <h3 class="tituloLivro">Titulo</h3>
                <p class="descricaoLivro">Aqui tem uma descriçao de um livro.</p>
                <a href="reservarAtualizar.php">
                    <div class="reservar">Reservar</div>
                </a>
            </div>
        </div>
    </div>
    <script src="../script/scriptMenuPrincipal.js"></script>
</body>

</html>