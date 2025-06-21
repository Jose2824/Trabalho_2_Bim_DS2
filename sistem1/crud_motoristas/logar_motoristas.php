<?php
if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    session_start();
    require '../conexao1.php';                                                       
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $sql = "SELECT * FROM motoristas WHERE email = :email AND senha = :senha";
    $resultado = $conexao1->prepare($sql);
    $resultado->bindvalue(":email",$email);
    $resultado->bindvalue(":senha",$senha);
    $resultado->execute();
    $dado = $resultado-> fetch();

    if($resultado->rowCount() > 0){
        if( $senha === $dado["senha"] && $email === $dado["email"]){
            $_SESSION['id'] = $dado['id'];
            $_SESSION['email'] = $dado['email'];

            header('Location: ../index1.php');
            exit();
            
        } else {
            header('Location: login_motor.php');
    
            exit();
        }
       
    } else {
        header('Location: login_motor.php');
            exit();
    }
}
?>