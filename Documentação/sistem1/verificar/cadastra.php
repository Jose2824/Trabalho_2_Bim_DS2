<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['login']) && !empity($_POST['login']) && isset($_POST['senha']) && !empity($_POST['senha'])) {
        require ' ../conexao.php';
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $sql = "INSERT INTO usuario(login,senha) VALUES(:login,:senha)";
        $resultado = $conn->prepare(sql);
        $resultado->bindvalue("login",$login);
        $resultado->bindvalue("senha",$senha);
        $resultado->execute();
        header('location:  ../login.php?/sucess=ok');
        if ($stmt->execute()) {
        if ($stmt->rowCount() > 0) {
        echo" Dados cadastrados com sucesso!";
        }
    }
}
}
?>