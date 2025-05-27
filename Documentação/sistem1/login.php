<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div id= nav>
            <img src="logoMB.png" alt="logo" class=MB>
              <div id= hla>
                <a href="#">Home</a>
                <a href="login.php">Login</a>
                <a href="#">Agendamentos</a>
            </div>
              


        </div>


  </header>
   
  <div class = login>
    <form action="logar.php" method="post">
            <div class=name1>
              <h1>Login</h1>
            </div>
            <label for="nome">e-mail</label>
            <br>
            <input type="text" id="email" name="email" placeholder="Digite o e-mail" required class= input>
            <br>
            <label for="senha">Senha</label>
            <br>
            <input type="password" id="senha" name="senha" placeholder="Digite a Senha" required class= input>
            <br>
            <div id=butcad>
              <input type="submit" value="Entrar"id= cad>
            </div>
            <div class=name1>
                <a href="formCadastro.php">Ainda não tem conta ? se cadastre</a >
            </div>
            
            
            
        </form>
  </div>
    
    <!-- <div class = login>
      <form action="logar.php" method="post">
            <h1>Login</h1>
            <label for="nome">e-mail</label>
            <input type="email" id="email" name="email" placeholder="Digite o email" required>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Digite a Senha" required>

            <input type="submit" value="Entrar">
            <br>
            <a href="formCadastro.php">Ainda não tem conta ? se cadastre</a>
        </form>
      </div> -->
        
        
</body>
</html>