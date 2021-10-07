<?php


   //Definindo valores do banco de dados 
    $servername = "localhost";
    $dbname = "desafioTMAX";
    $username = "root";
    $password = "";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $existencia_obra = FALSE;

    $book_name = $_GET["obra"];

    $sql = "UPDATE Livro SET reservado = '1' where titulo = ?";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute([$book_name]); 
        header("Location: ../pages/menuPrincipal.php");
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

