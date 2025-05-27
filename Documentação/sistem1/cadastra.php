<?php

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    require 'conexao.php';
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $sql = "INSERT INTO usuario(email,senha) VALUES(:email,:senha)";
    $resultado = $conn->prepare($sql);
    $resultado->bindvalue("email",$email);
    $resultado->bindvalue("senha",$senha);
    $resultado->execute();
}else {
    echo "nao";
}
    header("location: login.php")

?>