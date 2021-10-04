<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="../assets/fotoLivro.svg" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/styleReservarAtualizar.css">
    <title>Reservar e Atualizar</title>
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
            <form action="">
                <input type="text" placeholder="Titulo" value="Titulo">
                <textarea name="" id="" cols="30" rows="10" placeholder="Descrição">Aqui tem uma descrição</textarea>
                <div class="botoes">
                    <input type="button" value="Reservar" id="reservar">
                    <input type="button" value="Atualizar" id="atualizar">
                </div>

            </form>
        </section>

    </div>


    <script src="../script/scriptReservarAtualizar.js"></script>
</body>

</html>