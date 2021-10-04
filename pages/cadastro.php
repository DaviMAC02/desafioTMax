<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="../assets/fotoLivro.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/styleCadastro.css">
    <title>Biblioteca TMax</title>
</head>

<body>
    <div class="container">
        <div class="leftSide">
            <header>
                <img src="../assets/fotoCadastro.svg" alt="Ilustração de uma mulher em em frente a um computador">
                <h1>Cadastro</h1>
            </header>
            <section>
                <h2>Biblioteca exclusiva para funcionários da TMax</h2>
                <p class="boasVindas">Cadastre-se:</p>
                <form action="../controller/cadastro_controller.php" method="POST">
                    <input type="text" name="nome" id="nome" placeholder="Nome">
                    <input type="email" name="email" id="email" placeholder="Email">
                    <input type="password" name="password" id="password" placeholder="Senha">
                    <div class="botoes">
                        <input type="submit" value="Sign Up" id="signup">
                    </div>
                </form>
            </section>
        </div>
        <div class="rightSide">
            <img src="../assets/fotoCadastro.svg" alt="Ilustração de uma mulher em em frente a um computador">
        </div>
    </div>

    <script src="../script/scriptSignUp.js"></script>
</body>

</html>