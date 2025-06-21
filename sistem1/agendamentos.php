<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Major Buggy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="bodindex1">
    <header>
        <div class= "nav">
            <img src="assets/logoMB.png" alt="logo" class="logo">
              <div id= hla>
                <a href="#">Home</a>
                <a href="login.php">Login</a>
                <a href="agendamentos.php">Agendamentos</a>
                <a href="crud_motoristas/login_motor.php">Painel Motorista</a>
                <a href="logout.php">Sair🚪</a>
                <div class= "reserv">
                    <div class="nreserv">
                        <a href="https://api.whatsapp.com/send/?phone=5588999244044&text=Ol%C3%A1%2C+quero+agendar+um+passeio&type=phone_number&app_absent=0">Reservar no Whatsapp</a id=aor> 
                    </div>
                </div>
            
                   
                </div>
              


        </div>
  </header>
  <div id= "update"> 
<h1>    FOR FUTURE UPDATE!</h1>
</div>