
<h1>oi</h1>
<?php
if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    session_start();
    require 'conexao.php';

    $email = $_POST["email"];
    $senha = $_POST["senha"];


    $sql = "SELECT * FROM usuario WHERE email = :email LIMIT 1";
    $resultado = $conn->prepare($sql);
    $resultado->bindValue(":email", $email);
    $resultado->execute();

    if ($resultado->rowCount() > 0) {
        $dado = $resultado->fetch(PDO::FETCH_ASSOC);


        if (password_verify($senha, $dado["senha"])) {
            $_SESSION['id'] = $dado['id'];
            $_SESSION['email'] = $dado['email'];

            header('Location: index.php');
            exit();
        } else {
            
            header('Location: login.php?erro=senha');
            exit();
        }
    } else {
        header('Location: login.php?erro=usuario');
        exit();
    }
} else {
    echo "Preencha todos os campos.";
}
?>
