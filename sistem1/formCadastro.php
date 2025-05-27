 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
 </head>
 <body>
  <header>
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
    <form action="cadastra.php" method="post">
        <div class= name1>
          <h1>Cadastro</h1>
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
              <input type="submit" value="Cadastrar"id= cad>
            </div>
            
        </form>
  </div>


 </body>
 </html>
 