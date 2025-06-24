<?php
session_start();
require '../conexao1.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Dados</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <div class="nav">
            <img src="../assets/logoMB.png" alt="logo" class="logo">
            <div id="hla">
                <a href="index.php">Home</a>
                <a href="login.php">Login</a>
                <a href="index1.php">Agendamentos</a>
                <a href="logout.php">Sair🚪</a>
            </div>
        </div>
    </header>

    <div class="form">
        <?php 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // Consulta segura com prepared statement
        $sql = "SELECT * FROM motoristas WHERE id = :id";
        $stmt = $conexao1->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $motorista = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
            <div class="form">
        <h1>Editar Dados</h1>
        <form action="editm.php" method="post">
            <input type="hidden" name="id" value="<?= $motorista['id'] ?>">

            <label for="nome">Nome do Motorista</label>
            <br>
            <input type="text" id="nome" name="nome" value="<?= $motorista['nome'] ?>" required class= input>
            <br>
            <label for="cpf">CPF</label>
            <br>
            <input  type="text" id="cpf" name="cpf" value="<?= $motorista['cpf'] ?>" required  class= input>
            <br>
            <label for="cnh">CNH</label>
            <br>
            <input type="text" id="cnh" name="cnh" value="<?= $motorista['cnh'] ?>" required class= input>
            <br>
            <label for="cep">CEP do Motorista</label>
            <br>
            <input type="text" id="cep" name="cep" value="<?=$motorista['cep'] ?>" required  class= input>
            <br>
            <label for="data_nasc">Data de Nascimento</label>
            <br>
            <input type="date" id="data_nasc" name="data_nasc" value="<?= $motorista['data_nasc'] ?>" required  class= input>
            <br>
            <label for="e-mail">e-mail</label>
            <br>
            <input type="email" id="email" name="email" value="<?= $motorista['email'] ?>" required  class= input>
            <br>
            <label for="senha">senha</label>
            <br>
            <input type="password" id="senha" name="senha" value="<?= $motorista['senha'] ?>" required  class= input>
            <br>
            <div class= "button">
            <input type="submit" value="Atualizar Dados do Motorista" class= "cad">
            </div>
            
        </form>
         
    </div>
 <?php
        } else {
            echo "<h1>Motorista não encontrado.</h1>";
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
         
           
