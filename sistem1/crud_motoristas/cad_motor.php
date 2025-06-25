<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Major Buggy</title>
    <link rel="stylesheet" href="../style.css">
<body>
   

     <header>
        <div class= "nav">
            <img src="../assets/logoMB.png" alt="logo" class="logo">
              <div id= hla>
                <a href="../index.php">Home</a>
                <a href="login_motor.php">Login</a>
                <a href="../agendamentos.php">Agendamentos</a>

                <a href="../logout.php">Sair🚪</a>
            </div>
              


        </div>
  </header>

    <div class="cad_motor">
        <h1>Cadastro de Motorista</h1>
        <form action="create2.php" method="post">
            <label for="nome">Nome do Motorista</label>
            <br>
            <input type="text" id="nome" name="nome" placeholder="Digite seu Nome" required  class= input>
            <br>
            <label for="cpf">CPF</label>
            <br>
            <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required  class= input>
            <br>
            <label for="cnh">CNH</label>
            <br>
            <input type="text" id="cnh" name="cnh" placeholder="Digite sua CNH " required  class= input>
            <br>
            <label for="cep">CEP do Motorista</label>
            <br>
            <input type="text" id="cep" name="cep" placeholder="Digite seu CEP" required  class= input>
            <br>
            <label for="data_nasc">Data de Nascimento</label>
            <br>
            <input type="date" id="data_nasc" name="data_nasc" placeholder="Digite sua Data de nascimento" required  class= input>
            <br>
            <label for="email">Digite um e-mail</label>
            <br>
            <input type="email" id="email" name="email" placeholder="Digite um email" required  class= input>
            <br>
            <label for="senha">Digite uma Senha</label>
            <br>
            <input type="password" id="senha" name="senha" placeholder="Digite uma senha" required  class= input>
            <br>
            <div class= "button">
            <input type="submit" value="Cadastrar Motoristas" class= "cad">
            </div>
            
        </form>
         
    </div>