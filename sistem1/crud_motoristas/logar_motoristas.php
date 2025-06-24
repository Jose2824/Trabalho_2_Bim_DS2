<?php
if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    session_start();
    require '../conexao1.php';

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Busca o usuário apenas pelo email
    $sql = "SELECT * FROM motoristas WHERE email = :email LIMIT 1";
    $resultado = $conexao1->prepare($sql);
    $resultado->bindValue(":email", $email);
    $resultado->execute();

    if ($resultado->rowCount() > 0) {
        $dado = $resultado->fetch(PDO::FETCH_ASSOC);

        // Usa password_verify para comparar a senha digitada com o hash do banco
        if (password_verify($senha, $dado["senha"])) {
            $_SESSION['id'] = $dado['id'];
            $_SESSION['email'] = $dado['email'];

            header('Location: readMotor.php');
            exit();
        } else {
            // Senha incorreta
            header('Location: login_motor.php?erro=senha');
            exit();
        }
    } else {
        // Usuário não encontrado
        header('Location: login_motor.php?erro=usuario');
        exit();
    }
} else {
    echo "Preencha todos os campos.";
}
?>
