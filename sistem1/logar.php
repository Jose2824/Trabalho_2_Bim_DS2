<?php



if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    session_start();
    require 'conexao.php';                                                       
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
    $resultado = $conn->prepare($sql);
    $resultado->bindvalue(":email",$email);
    $resultado->bindvalue(":senha",$senha);
    $resultado->execute();
    $dado = $resultado-> fetch();

    if($resultado->rowCount() > 0){
        if( $senha === $dado["senha"] && $email === $dado["email"]){
            $_SESSION['id'] = $dado['id'];
            $_SESSION['email'] = $dado['email'];

            header('Location: index.php');
            exit();
            
        } else {
            header('Location: login.php');
    
            exit();
        }
       
    } else {
        header('Location: login.php');
            exit();
    }
}
?>
<h1>oi</h1>