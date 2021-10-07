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

if(isset($_POST["titulo"]) && isset($_POST["descricao"]) && isset($_POST["categoria"]) && isset($_POST["link_imagem"])){
    $book = new Livro($_POST["titulo"], $_POST["descricao"], $_POST["categoria"], 0, $_POST["link_imagem"]);
    $existencia_obra = checar_existencia($book, $conn);

    if(!$existencia_obra){
        cadastrar_obra($book, $conn);
    }else{
        alterar_obra($book, $conn);
    }
}

function checar_existencia($book, $conn){
    $contador_obras = 0;
    $sql = "SELECT titulo FROM Livro WHERE titulo = ?";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute([$book->get_titulo()]); 
        while($row = $stmt->fetch()) {
            $contador_obras++;
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    if($contador_obras == 0){
        return FALSE;
    }else{
        return TRUE;
    }

}

function cadastrar_obra($book, $conn){

    $sql = "INSERT INTO Livro (titulo, descricao, categoria, reservado, link_imagem)
            VALUES ('".$book->get_titulo()."', '".$book->get_descricao()."', '".$book->get_categoria()."', '".$book->get_reservado()."','" .$book->get_link_imagem()."')";

    try{
        $conn->exec($sql);
        header("Location: ../pages/adicionar.php");
    }catch(PDOException $e) {
        echo 'Fatal Error: '.$e;
    }
}

function alterar_obra($book, $conn){
    $sql = "UPDATE Livro SET titulo = ?, descricao = ?, categoria = ?, link_imagem = ? where titulo = ?";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute([$book->get_titulo(), $book->get_descricao(), $book->get_categoria(), $book->get_titulo(), $book->get_link_imagem()]); 
        header("Location: ../pages/adicionar.php");
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
