<?php
require_once '../model/Usuario.php';


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
            echo $row['email']."<br />\n". $row["senha"];
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }


// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     if($row["email"] == $_POST["email"] && $row["senha"] == md5($_POST["password"])){
//         $logado = TRUE;
//     }
// }
// } else {
// }
    
// }

// if($logado){
//     header("Location: ../pages/menuPrincipal.php");

// }else{
}

// die();