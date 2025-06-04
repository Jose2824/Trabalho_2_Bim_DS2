 <?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Major Buggy</title>
    <link rel="stylesheet" href="style.css">
<body>
   

     <header>
        <div class= "nav">
            <img src="assets/logoMB.png" alt="logo" class="logo">
              <div id= hla>
                <a href="index.php">Home</a>
                <a href="login.php">Login</a>
                <a href="#">Agendamentos</a>
                <a href="logout.php">Sair da Conta 🚪</a>
            </div>
              


        </div>
  </header>

    <div class="form">
        <h1>Cadastro de Veículo</h1>
        <form action="create1.php" method="post">
            <label for="modelo">Modelo do Veículo</label>
            <br>
            <input type="text" id="modelo" name="modelo" placeholder="Digite o modelo" required  class= input>
            <br>
            <label for="ano">Ano</label>
            <br>
            <input type="text" id="ano" name="ano" placeholder="Digite o ano" required  class= input>
            <br>
            <label for="status">Status do Veículo</label>
            <br>
            <input type="text" id="status" name="status" placeholder="Status" required  class= input>
            <br>
            <label for="cor">Cor do Veículo</label>
            <br>
            <input type="text" id="cor" name="cor" placeholder="Digite a cor" required  class= input>
            <br>
            <label for="placa">Placa</label>
            <br>
            <input type="text" id="placa" name="placa" placeholder="Digite a placa" required  class= input>
            <br>
            <div class= "button">
            <input type="submit" value="Cadastrar Veículo" class= "cad">
            </div>
            
        </form>
         
    </div>

</body>
</html>