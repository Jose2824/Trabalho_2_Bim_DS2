<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['login']) && !empity($_POST['login']) && isset($_POST['senha']) && !empity($_POST['senha'])) {
        session_start();
        require '../connection.php';
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $sql = "SELECT * FROM usuario WHERE login = :login AND senha = :senha";
        $resultado = $connection->prepare(sql);
        $resultado->bindvalue("login",$login);
        $resultado->bindvalue("senha",$senha);
        $resultado->execute();

        if(result->rowCount()> 0){
            $dado = resultado-> fetch();
            $_SESSION['id'] = dado['id'];
            $_SESSION['nome'] = dado['login'];

            header('Location ../index.php');
        }

        }
}
?>
<h1>oi</h1>