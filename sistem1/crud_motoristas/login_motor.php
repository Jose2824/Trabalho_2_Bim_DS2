<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Major Buggy</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class= "nav">
            <img src="../assets/logoMB.png" alt="logo" class="logo">
              <div id= hla>
                <a href="../index.php">Home</a>
                <a href="login.php">Login</a>
                <a href="#">Agendamentos</a>
            </div>
              
    

<div class = login>
    <form action="logar_motoristas.php" method="post">
            <div class=name1>
              <h1>Login de Motorista</h1>
            </div>
            <label for="nome">e-mail</label>
            <br>
            <input type="text" id="email" name="email" placeholder="Digite o e-mail" required class= input>
            <br>
            <label for="senha">Senha</label>
            <br>
            <input type="password" id="senha" name="senha" placeholder="Digite a Senha" required class= input>
            <br>
            <div class= "button">
              <input type="submit" value="Entrar"class= "cad">
            </div>
            <div class=name1>
                <a href="cad_motor.php">Não tem Cadastro ? se cadastre</a >
            </div>
</body>
</html>