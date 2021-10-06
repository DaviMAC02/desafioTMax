<?php
require_once '../model/Usuario.php';

//Definindo uma sessão
session_start();
$_SESSION["logado"] = 0;


if(isset($_POST["email"]) && isset($_POST["password"])){
    consultar_usuario($_POST["email"], md5($_POST["password"]));
}

function consultar_usuario($email, $senha){

    //Definindo valores do banco de dados
    $servername = "localhost";
    $dbname = "desafioTMAX";
    $username = "root";
    $password = "";

    //Definindo estado do usuario
    $logado = FALSE;

    $sql = "SELECT email, senha FROM Usuario WHERE email = ?";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]); 
        while($row = $stmt->fetch()) {
            $email_bdd = $row["email"];
            $senha_bdd = $row["senha"];
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    if($email == $email_bdd && $senha_bdd == $senha){
        $logado = TRUE;
    }

    if($logado){
        $_SESSION["logado"] = 1;
        header("Location: ../pages/menuPrincipal.php");
    }else{
        echo'erro';
        header("Location: ../index.php");
    }
}

