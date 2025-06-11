 <?php
session_start();
if (!isset($_SESSION['ID'])) {
    header('Location: login.php');
    exit();
}
 require 'conexao1.php';
$sql= " SELECT * FROM carros";
$resultado = $conexao1->prepare($sql);
$resultado->execute();
$carros = $resultado->fetchall(PDO:: FETCH_ASSOC);
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
                <a href="index1.php">Agendamentos</a>
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


   <?php 
if (count($carros) > 0): ?>
    <table>
        <caption>Seus Carros</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Status</th>
                <th>Cor</th>
                <th>Placa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
           
        <?php foreach ($carros as $carro): ?>
    <tr>
        <td><?= htmlspecialchars($carro['ID']) ?></td>
        <td><?= htmlspecialchars($carro['modelo']) ?></td>
        <td><?= htmlspecialchars($carro['ano']) ?></td>
        <td><?= htmlspecialchars($carro['status']) ?></td>
        <td><?= htmlspecialchars($carro['cor']) ?></td>
        <td><?= htmlspecialchars($carro['placa']) ?></td>
        <td id="actions">

            <a href="formEdit.php?ID=<?php echo $carro['ID']; ?>" id="edit"   >Editar|</a>
            <form method="POST" action="deletecar.php" onsubmit="return confirm('Tem certeza que deseja excluir este registro?');">
                <input type="hidden" name="ID" value="<?= htmlspecialchars($carro['ID']) ?>"/> 
                <button type="submit" class="btn">
                    <p>Deletar</p>
                </button>
            </form>
            </a>
        </td>
    </tr>
<?php endforeach; ?>

    </table>
<?php else: ?>
    <h1>Você ainda não cadastrou nenhum veículo.</h1>
<?php endif; ?>


</body>
</html>