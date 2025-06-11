<?php

try {
    // Conexão com o banco de dados
    $conexao1 = new PDO("mysql:host=localhost;dbname=MB;charset=utf8mb4", "root", "",
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $erro) {
    echo "Erro na conexão: " . $erro->getMessage();
}

// Verifica se um ID foi passado via GET
if (!isset($_GET['ID'])) {
    die("ID não especificado.");
}

$ID = (int) $_GET['ID'];

// Atualiza os dados se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $modelo = $_POST['modelo'];
    $ano    = $_POST['ano'];
    $status = $_POST['status'];
    $cor    = $_POST['cor'];
    $placa  = $_POST['placa'];

    // Usando a conexão correta ($conexao1)
    $stmt = $conexao1->prepare("UPDATE carros SET modelo = :modelo, ano = :ano, status = :status, cor = :cor, placa = :placa WHERE ID = :ID");
    $stmt->execute([
        ':modelo' => $modelo,
        ':ano'    => $ano,
        ':status' => $status,
        ':cor'    => $cor,
        ':placa'  => $placa,
        ':ID'     => $ID
    ]);

    echo "Carro atualizado com sucesso! <a href='index.php'>Voltar</a>";
    exit;
}

// Busca os dados do carro atual
$stmt = $conexao1->prepare("SELECT * FROM carros WHERE ID = :ID");
$stmt->execute([':ID' => $ID]);
$carro = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$carro) {
    die("Carro não encontrado.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Carro</title>
</head>
<body>
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
                <a href="index1.php">Agendamentos</a>
                <a href="logout.php">Sair da Conta 🚪</a>
            </div>
              


        </div>
  </header>

    <div class="form">
        <h1>Editar Veículo</h1>
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
