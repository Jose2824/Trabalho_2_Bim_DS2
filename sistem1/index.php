<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div id= nav>
            <img src="logoMB.png" alt="logo" id=MB>
              <div id= hla>
                <a href="#">Home</a>
                <a href="#">Login</a>
                <a href="#">Agendamentos</a>
            </div>
              


        </div>
<a href="logout.php">Sair da Conta</a>

<h1>Seja bem Vindo <?php echo $_SESSION['email']; ?></h1>
</body>
</html>
