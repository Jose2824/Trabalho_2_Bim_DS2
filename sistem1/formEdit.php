<?php
session_start();
require 'conexao1.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Carro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="nav">
            <img src="assets/logoMB.png" alt="logo" class="logo">
            <div id="hla">
                <a href="index.php">Home</a>
                <a href="login.php">Login</a>
                <a href="agendamentos.php">Agendamentos</a>
                <a href="logout.php">Sair da Conta 🚪</a>
            </div>
        </div>
    </header>

    <div class="form">
        <?php 
require "conexao1.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // Consulta segura com prepared statement
        $sql = "SELECT * FROM carros WHERE id = :id";
        $stmt = $conexao1->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $carro = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
            <div class="form">
        <h1>Editar Veículo</h1>
        <form action="edit.php" method="post">
            <input type="hidden" name="id" value="<?= $carro['id'] ?>">

            <label for="modelo">Modelo do Veículo</label>
            <br>
            <input type="text" id="modelo" name="modelo" value="<?= $carro['modelo'] ?>" required class= input>
            <br>
            <label for="ano">Ano</label>
            <br>
            <input  type="text" id="ano" name="ano" value="<?= $carro['ano'] ?>" required  class= input>
            <br>
            <label for="status">Status do Veículo</label>
            <br>
            <input type="text" id="status" name="status" value="<?= $carro['status'] ?>" required class= input>
            <br>
            <label for="cor">Cor do Veículo</label>
            <br>
            <input type="text" id="cor" name="cor" value="<?= $carro['cor'] ?>" required  class= input>
            <br>
            <label for="placa">Placa</label>
            <br>
            <input type="text" id="placa" name="placa" value="<?= $carro['placa'] ?>" required  class= input>
            <br>
            <div class= "button">
            <input type="submit" value="Atualizar Veículo" class= "cad">
            </div>
            
        </form>
         
    </div>
            
           

            <?php
        } else {
            echo "<h1>Veículo não encontrado.</h1>";
        }

    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }

} else {
    echo "<h1>ID não informado.</h1>";
}
?>

    </div>

</body>
</html>
