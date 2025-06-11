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
                <a href="index1.php">Agendamentos</a>
                <a href="logout.php">Sair da Conta 🚪</a>
            </div>
        </div>
    </header>

    <div class="form">
        <h1>Editar Veículo</h1>
        <form action="edit.php?ID=<?= $ID ?>" method="post">
            <label for="modelo">Modelo do Veículo</label>
            <br>
            <input type="text" id="modelo" name="modelo" value="<?= htmlspecialchars($carro['modelo']) ?>" required class="input">
            <br>
            <label for="ano">Ano</label>
            <br>
            <input type="text" id="ano" name="ano" value="<?= htmlspecialchars($carro['ano']) ?>" required class="input">
            <br>
            <label for="status">Status do Veículo</label>
            <br>
            <input type="text" id="status" name="status" value="<?= htmlspecialchars($carro['status']) ?>" required class="input">
            <br>
            <label for="cor">Cor do Veículo</label>
            <br>
            <input type="text" id="cor" name="cor" value="<?= htmlspecialchars($carro['cor']) ?>" required class="input">
            <br>
            <label for="placa">Placa</label>
            <br>
            <input type="text" id="placa" name="placa" value="<?= htmlspecialchars($carro['placa']) ?>" required class="input">
            <br>
            <div class="button">
                <input type="submit" value="Atualizar Veículo" class="cad">
            </div>
        </form>
    </div>

</body>
</html>
