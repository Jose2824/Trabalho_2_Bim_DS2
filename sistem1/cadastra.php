
<?php
if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    require 'conexao.php';

    $email = $_POST["email"];
    $senha = $_POST["senha"];


    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario (email, senha) VALUES (:email, :senha)";
    $resultado = $conn->prepare($sql);
    $resultado->bindValue(":email", $email);
    $resultado->bindValue(":senha", $senhaHash);

    if ($resultado->execute()) {
        header("Location: login.php");
        exit();
    } else {
        echo "Erro ao cadastrar.";
    }

} else {
    echo "Preencha todos os campos.";
}
?>
