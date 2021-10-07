<?php

require_once '../model/Livro.php';

   //Definindo valores do banco de dados 
    $servername = "localhost";
    $dbname = "desafioTMAX";
    $username = "root";
    $password = "";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $existencia_obra = FALSE;

    
    $sql = "SELECT titulo, descricao, link_imagem FROM Livro WHERE categoria = ?";
    $books = array();

    try {
        if($_GET["categoria"] == "Todos"){
            $sql = "SELECT titulo, descricao, link_imagem FROM Livro where reservado != '1'";
            $stmt = $conn->prepare($sql);
            $stmt->execute(); 

        }else if($_GET["categoria"] == "Reservados"){
            $sql = "SELECT titulo, descricao, link_imagem FROM Livro where reservado = '1'";
            $stmt = $conn->prepare($sql);
            $stmt->execute(); 
        }else{
            $sql = "SELECT titulo, descricao, link_imagem FROM Livro WHERE categoria = ? AND reservado = '0'";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$_GET["categoria"]]); 
        }

        while($row = $stmt->fetch()) {
            $books[$row["titulo"]] = [$row["descricao"], $row["link_imagem"]];
        }

        echo json_encode($books);
        
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
