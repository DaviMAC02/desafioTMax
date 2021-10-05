<?php
require_once '../model/Usuario.php';

if(isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["password"])){
    $user = new Usuario($_POST["nome"], $_POST["email"], $_POST["password"]);
    cadastrar_usuario($user);
}

function cadastrar_usuario($user){

    //Definindo valores do banco de dados 
    $servername = "localhost";
    $dbname = "desafioTMAX";
    $username = "root";
    $password = "";

    $sql = "INSERT INTO Usuario (nome, email, senha)
            VALUES ('".$user->get_name()."', '".$user->get_email()."', '".md5($user->get_senha())."')";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->exec($sql);
    }catch(PDOException $e) {
        echo 'Fatal Error';
    }

    
}

header("Location: ../index.php");

die();