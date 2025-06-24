 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Major Buggy</title>
    <link rel="stylesheet" href="style.css">
 </head>
 <body>
  <header>
        <div class= "nav">
            <img src="assets/logoMB.png" alt="logo" class="logo">
              <div id= hla>
                <a href="#">Home</a>
                <a href="login.php">Login</a>
                <a href="agendamentos.php">Agendamentos</a>
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
            <div class="button">
              <input type="submit" value="Cadastrar"class= "cad">
            </div>
            
        </form>
  </div>


 </body>
 </html>
 